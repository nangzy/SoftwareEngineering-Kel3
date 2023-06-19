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
                <img src="/images/Icons/ticket.png" alt="ticket" class="img-fluid">
            </div>
            <div>
                <h4 class="ms-4">UPCOMING EVENT TICKET</h4>
            </div>
        </div>

        <div class="p-5 d-flex justify-content-center">
            <form action="/ticket-cat" method="post">
                @csrf
                <div class="p-5 d-flex justify-content-center">
                    <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                        <div>
                            <img src="/images/Matches/cat1.png" alt="Valorant">
                        </div>
                        <div class="fs-4 fw-semibold p-4">
                            MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE
                            <input type="number" name="ticket_id" value="1" style="display: none;">
                        </div>
                        <div>
                            <div class="text-decoration-none btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem">MLBB</div>
                        </div>
                        <div class="warna-abu ps-3">
                            Istora Senayan, Jakarta Pusat
                        </div>
                        <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                            <div>
                                Rp75.000
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form action="/ticket-cat" method="post">
                @csrf
                <div class="p-5 d-flex justify-content-center">
                    <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                        <div>
                            <img src="/images/Matches/cat2.png" alt="Valorant">
                        </div>
                        <div class="fs-4 fw-semibold p-4">
                            VALORANT MASTERS TOKYO - VCT LOCK IN SPLIT
                            <input type="number" name="ticket_id" value="2" style="display: none;">
                        </div>
                        <div>
                            <div class="text-decoration-none btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem">VALORANT</div>
                        </div>
                        <div class="warna-abu ps-3">
                            Ballroom Hall Saitama Hotel, Tokyo
                        </div>
                        <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                            <div>
                                Rp50.000
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <form action="/ticket-cat" method="post">
                @csrf
                <div class="p-5 d-flex justify-content-center">
                    <div class="border-merah-75 rounded-4" style="margin-right: .5rem">
                        <div>
                            <img src="/images/Matches/cat3.png" alt="Valorant">
                        </div>
                        <div class="fs-4 fw-semibold p-4">
                            VALORANT MASTERS COPENHAGEN - VCT LOCK IN BIND
                            <input type="number" name="ticket_id" value="3" style="display: none;">
                        </div>
                        <div>
                            <div class="text-decoration-none btn btn-sm btn-danger shadow ms-3 fw-bold text-dark rounded-pill" style="--bs-btn-padding-x: 1rem">VALORANT</div>
                        </div>
                        <div class="warna-abu ps-3">
                            Function Hall Swarovski, Copenhagen
                        </div>
                        <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                            <div>
                                Rp50.000
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button>
                            </div>
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
