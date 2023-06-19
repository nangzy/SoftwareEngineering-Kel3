@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <div class="container-fluid col-11 mt-3 mb-3 d-flex justify-content-between align-items-center">
        <div class="">
            <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>
        </div>
        <div class="fs-3 fw-semibold text-light">
            Top Up {{ $game_cat->game }}
        </div>
        <div>
            &nbsp;
        </div>
    </div>

    <div class="container-fluid bg-merah-terang-20 warna-abu col-7 rounded-3">
        <div class="p-4">
            <form>
                <div class="mb-4 col-4">
                  <label for="InputID" class="form-label">Masukkan Riot ID {{-- ini diubah sesuai game --}}</label>
                  <input type="text" class="form-control" id="InputID">
                </div>

                <div class="mb-2">
                    Pilihan Nominal Top Up
                </div>

                {{-- loop bagian sini; button belom active --}}
                <div class="row row-cols-5">
                    @foreach ($game_cat->topups as $topup)
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="col-10 d-flex justify-content-center">
                                <button class="btn btn-outline-danger p-3 px-4 mb-3 mt-3 rounded">
                                    <div>
                                        <div>
                                            <img src="/images/Top Up/{{ $topup->image }}.png" alt="vp" style="width: 4rem; height: 4rem; object-fit: cover">
                                        </div>
                                        <div class="fs-5 d-flex justify-content-center px-0">
                                            {{ $topup->quantity }}
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </form>

            <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih">
                <div class="col-4">
                    <select class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment">
                        <option selected>Payment Method</option>
                        <option value="1">QRIS</option> {{-- nama payment method bisa berubah --}}
                        <option value="2">DANA</option>
                        <option value="3">OVO</option>
                    </select>
                </div>
                <div class="">
                    <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
