@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <div class="container-fluid col-10 text-white">
        <div class="d-flex">
            <div>
                <img src="/images/Icons/merch.png" alt="merch" class="img-fluid">
            </div>
            <div>
                <h4 class="ms-4">MERCHANDISE</h4>
            </div>
        </div>

        <div class="p-5 d-flex justify-content-center">
            <form action="/merch-cat" method="post">
                @csrf
                <div class="border-merah-75 rounded-4" style="margin-right: 5rem">
                    <div>
                        <img src="/images/Merch/evos.png" alt="Valorant">
                    </div>
                    <div class="fs-3 fw-semibold p-4">
                        EVOS Jersey
                        <input type="number" name="merch_id" value="1" style="display: none;">
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp150.000
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                        </div>
                    </div>
                </div>
            </form>

            <form action="/merch-cat" method="post">
                @csrf
                <div class="border-merah-75 rounded-4" style="margin-right: 5rem">
                    <div>
                        <img src="/images/Merch/rrq.png" alt="MobileLegend">
                    </div>
                    <div class="fs-3 fw-semibold p-4">
                        RRQ Jersey
                        <input type="number" name="merch_id" value="2" style="display: none;">
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp150.000
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                        </div>
                    </div>
                </div>
            </form>

            <form action="/merch-cat" method="post">
                @csrf
                <div class="border-merah-75 rounded-4">
                    <div>
                        <img src="/images/Merch/onic.png" alt="MobileLegend" class="rounded-4">
                    </div>
                    <div class="fs-3 fw-semibold p-4">
                        ONIC Jersey
                        <input type="number" name="merch_id" value="3" style="display: none;">
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp150.000
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="d-flex flex-row-reverse">
            <a href="#"><img src="/images/Icons/Group 308.png" alt="FAQ"></a>
        </div>
    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
