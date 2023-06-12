@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

@section('content')
    <div class="container-fluid col-10 text-white">
        <div class="d-flex">
            <div>
                <img src="/images/Icons/ticket.png" alt="ticket" class="img-fluid">
            </div>
            <div>
                <h4 class="ms-4">UPCOMING EVENT TICKET</h4>
            </div>
        </div>

        <div class="p-5 d-flex justify-content-center">
            <div class="p-5 d-flex justify-content-center">
                <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                    <div>
                        <img src="/images/Matches/cat1.png" alt="Valorant">
                    </div>
                    <div class="fs-4 fw-semibold p-4">
                        MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE
                    </div>
                    <div>
                        <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem"> MLBB</button></a>
                    </div>
                    <div class="warna-abu ps-3">
                        Istora Senayan, Jakarta Pusat
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp75.000
                        </div>
                        <div>
                            <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                    <div>
                        <img src="/images/Matches/cat2.png" alt="Valorant">
                    </div>
                    <div class="fs-4 fw-semibold p-4">
                        VALORANT MASTERS TOKYO - VCT LOCK IN SPLIT
                    </div>
                    <div>
                        <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem"> VALORANT</button></a>
                    </div>
                    <div class="warna-abu ps-3">
                        Ballroom Hall Saitama Hotel, Tokyo
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp50.000
                        </div>
                        <div>
                            <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                    <div>
                        <img src="/images/Matches/cat3.png" alt="Valorant">
                    </div>
                    <div class="fs-4 fw-semibold p-4">
                        VALORANT MASTERS COPENHAGEN - VCT LOCK IN BIND
                    </div>
                    <div>
                        <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem"> VALORANT</button></a>
                    </div>
                    <div class="warna-abu ps-3">
                        Function Hall Swarovski, Copenhagen
                    </div>
                    <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                        <div>
                            Rp50.000
                        </div>
                        <div>
                            <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row-reverse">
            <a href="#"><img src="/images/Icons/Group 308.png" alt="FAQ"></a>
        </div>
    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
