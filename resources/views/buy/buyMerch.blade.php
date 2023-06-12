@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <form action="/{{ $merchId }}/detail-buy-merch" method="POST">
        @csrf
        <div class="container mt-5 d-flex" style="justify-content: space-around;">
            <div class="">
                <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </button>
            </div>

            {{--        <div id="carouselExampleCaptions" class="carousel slide">--}}
            {{--          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
            {{--            <span aria-hidden="true"><img src="/images/Icons/kiri.png" alt="back"></span>--}}
            {{--            <span class="visually-hidden">Previous</span>--}}
            {{--          </button>--}}
            {{--          <div class="carousel-indicators">--}}
            {{--              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
            {{--              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
            {{--            </div>--}}
            {{--            --}}{{-- loop buat gambar --}}
            {{--            --}}{{-- entah kenapa carousel nya ga smooth --}}
            {{--            <div class="carousel-inner">--}}
            {{--              <div class="carousel-item active">--}}
            {{--                <img src="/images/Merch/baju-depan.png" class="d-block w-100" alt="baju-depan">--}}
            {{--              </div>--}}
            {{--              <div class="carousel-item">--}}
            {{--                <img src="/images/Merch/baju-blkg.png" class="d-block w-100" alt="baju-blkg">--}}
            {{--              </div>--}}
            {{--              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
            {{--                <span aria-hidden="true"><img src="/images/Icons/kanan.png" alt="next"></span>--}}
            {{--                <span class="visually-hidden">Next</span>--}}
            {{--              </button>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            <div class="ms-3">
                @if($merchDetail->id == 1)
                    <img src="/images/Merch/evos.png" alt="Valorant" class="rounded-4" style="width: 30rem;">
                @elseif($merchDetail->id == 2)
                    <img src="/images/Merch/rrq.png" alt="MobileLegend" class="rounded-4" style="width: 30rem;">
                @else
                    <img src="/images/Merch/onic.png" alt="MobileLegend" class="rounded-4" style="width: 30rem;">
                @endif
            </div>

            <div class="container-fluid rounded-4 bg-merah-terang-20 warna-abu ms-5">
                <div class="btn btn-sm btn-danger shadow m-3 fw-semibold text-dark rounded text-decoration-none" style="--bs-btn-padding-x: 1rem">
                    {{-- category --}}
                    {{ $merchDetail->category_id == 1 ? 'Valorant' : 'MLBB' }}
                </div>
                <div class="fs-2 stroke-putih">
                    {{-- Judul --}}
                    {{ $merchDetail->merch_name }}
                </div>
                <div class="fs-3 tulisan-merah-terang pt-2 pb-2">
                    {{-- harga  --}}
                    {{ $merchDetail->price_indo }}
                </div>
                <div class="border-bottom border-white stroke-putih fs-6 fw-light pb-3">
                    <form>
                        <div class="mb-3">
                            <div class="warna-abu fw-light">
                                SIZES:
                            </div>
                            @php($sizeSplit = explode(" ", $merchDetail->size))
                            <div class="" style="">
                                @foreach($sizeSplit as $sizeKey => $sizeValue)
                                    <input class="form-check-input ms-5" type="radio" name="size" required value="{{ $sizeValue }}">&nbsp;{{ $sizeValue }}
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="warna-abu fw-light">
                                <label for="InputQuantity" class="form-label">QUANTITY</label>
                            </div>
                            <div class="" style="width: 50%;">
                                <input type="number" name="quantity" class="form-control" id="InputQuantity" placeholder="Qty." required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pt-2">
                    {{-- loop disini --}}
                    <div class="mb-3">
                        <div class="">
                            Category:
                        </div>
                        @if(isset($merchDetail->organization))
                            <div class="">
                                E-Sport Organization: {{ $merchDetail->organization }}
                            </div>
                        @elseif(isset($merchDetail->item))
                            <div class="">
                                Item: {{ $merchDetail->item }}
                            </div>
                        @endif
                    </div>

                    <div>
                        <div class="">
                            Item Description:
                        </div>
                        @php($descSplit = explode("\n", $merchDetail->description))
                        @foreach($descSplit as $descKey => $descValue)
                            <div>
                                {{ $descValue }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih">
                    <div class="">
                        <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
{{-- belom di dropdown sama quantitynya belom bisa nambah --}}

@section('footer')
    @include('footer.footer-2')
@endsection
