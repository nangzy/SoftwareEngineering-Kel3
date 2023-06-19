@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <form action="/{{ $ticketId }}/detail-buy-ticket" method="POST">
        @csrf
        <div class="container-fluid mt-5 d-flex col-11">
            <div class="mt-3 mb-3">
                <div class="">
                    <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="col-5">
                @if($ticketDetail->id == 1)
                    <img src="/images/Matches/Ticket1.png" alt="ticket" class="img-fluid">
                @elseif($ticketDetail->id == 2)
                    <img src="/images/Matches/cat2.png" alt="ticket" class="img-fluid" style="width: 150%;">
                @else
                    <img src="/images/Matches/cat3.png" alt="ticket" class="img-fluid" style="width: 150%;">
                @endif
            </div>

            <div class="container-fluid rounded-4 col-5 bg-merah-terang-20 warna-abu">
                <div class="d-flex flex-row-reverse">
                    {{-- category --}}
                    <div class="text-decoration-none btn btn-sm btn-danger shadow m-3 fw-semibold text-dark rounded" style="--bs-btn-padding-x: 1rem">
                        {{ $ticketDetail->category_id == 1 ? 'MLBB' : 'Valorant' }}
                    </div>
                </div>
                <div class="fs-2 stroke-putih">
                    @php($ticketNameSplit = explode("-", $ticketDetail->ticket_name))
                    {{-- Judul --}}
                    {{ trim($ticketNameSplit[0]) }} <br>
                    {{-- Sub-judul --}}
                    {{ trim($ticketNameSplit[1]) }}
                </div>
                <div class="fs-3 tulisan-merah-terang pt-2 pb-2">
                    {{-- harga  --}}
                    {{ $ticketDetail->price_indo }}
                </div>
                <div class="border-bottom border-white stroke-putih fs-6 fw-light pb-3">
                    <div class="mb-3">
                        <div class="warna-abu fw-light">
                            <label for="InputQuantity" class="form-label">QUANTITY</label>
                        </div>
                        <div class="" style="width: 50%;">
                            <input type="number" name="quantity" class="form-control" id="InputQuantity" placeholder="Qty." required>
                        </div>
                    </div>
                </div>
                <div class="pt-2">
                    @php($descSplit = explode("\n", $ticketDetail->description))
                    @foreach($descSplit as $descSplitKey => $descSplitValue)
                        <div>
                            {{ $descSplitValue }}
                        </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih">
                    <div class="">
                        @if(Session::has('loginUser'))
                            <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem">
                                Buy Now
                            </button>
                        @else
                            <div class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" data-bs-target="#isNotLoggedIn" data-bs-toggle="modal" data-bs-dismiss="modal">Buy Now</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="isNotLoggedIn" aria-hidden="true" aria-labelledby="user_not_logged_in" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content" style="background-color: #515151;">
                    <div class="modal-body text-center">
                        <img src="{{ asset('/images/Icons/warning.png') }}" alt="warning">
                        <div class="fs-4 mt-5" style="color: #dddddd;">
                            You need to have an account first! Sign up now!
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <form action="/sign-up" method="get">
                            @csrf
                            <input type="text" name="is_logged_in" value="{{ Session::get('loginUser')->user_id ?? Crypt::encrypt('no') }}" style="display: none;">

                            <button class="btn btn-danger shadow m-3 fw-semibold text-light text-decoration-none" data-bs-dismiss="modal">Create Account</button>
                        </form>
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
