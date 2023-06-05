@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

@section('content')
    <div class="container-fluid col-11 mt-3 mb-3 d-flex justify-content-between align-items-center">
        <div class="">
            <a href=""><img src="/images/Icons/Vector.png" alt="back"></a>
        </div>
        <div class="fs-3 fw-semibold text-light">
            Top Up Valorant
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
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <div class="border border-light py-1">
                                <div>
                                    <img src="/images/Top Up/VPoin.png" alt="vp" class="img-fluid">
                                </div>
                                <div class="fs-5 d-flex justify-content-center px-0">
                                    125 Points
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <div class="border border-light py-1">
                                <div>
                                    <img src="/images/Top Up/VPoin.png" alt="vp" class="img-fluid">
                                </div>
                                <div class="fs-5 d-flex justify-content-center px-0">
                                    125 Points
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <div class="border border-light py-1">
                                <div>
                                    <img src="/images/Top Up/VPoin.png" alt="vp" class="img-fluid">
                                </div>
                                <div class="fs-5 d-flex justify-content-center px-0">
                                    125 Points
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <div class="border border-light py-1">
                                <div>
                                    <img src="/images/Top Up/VPoin.png" alt="vp" class="img-fluid">
                                </div>
                                <div class="fs-5 d-flex justify-content-center px-0">
                                    125 Points
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="col-10 d-flex justify-content-center">
                            <div class="border border-light py-1">
                                <div>
                                    <img src="/images/Top Up/VPoin.png" alt="vp" class="img-fluid">
                                </div>
                                <div class="fs-5 d-flex justify-content-center px-0">
                                    125 Points
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih mt-5">
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