@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')

    <div class="container-fluid col-11 mb-4">
        <div class="">
            <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="container-fluid col-11 fw-semibold fs-3 text-light mb-4">
        Detail Transaction
    </div>


    <!-- belom ada activenya -->

    <div class="container-fluid col-11 d-flex">
        <div class="">
            <button class="btn btn-danger btn-sm text-dark rounded-pill fw-semibold me-4 px-3" type="button">Ticket</button>
        </div>

        <div class="ml-3 mr-3">
            <button class="btn btn-danger btn-sm text-dark rounded-pill fw-semibold mx-4 px-3" type="button">Merch</button>
        </div>
        <div class="">
            <button class="btn btn-danger btn-sm text-dark rounded-pill fw-semibold ms-4 px-3" type="button">Top up</button>
        </div>
    </div>

    <!-- loop mulai dari sini -->

    <div class="d-flex container-fluid border border-abu-25 bg-merah-terang-20 rounded-4 col-11 mt-5 py-3">
        <div class="col-3 d-flex justify-content-center">
            <img src="/images/others/TicketMPL.png" alt="TicketMPL" class="img-fluid p-2">
        </div>

        <div class="col-6 px-3">
            <div class="container-fluid px-0 flex-column d-flex align-items-start justify-content-start" style="height: 8rem">
                <div class="d-flex mb-auto">
                    <div class="fs-6 warna-abu stroke-putih">
                        01 March 2023
                    </div>

                    <div>
                        <button class="btn btn-sm btn-danger btn-sm text-dark rounded-pill fw-bold mx-3 px-3 py-0" type="button">Done</button>
                    </div>

                    <div class="fs-6 warna-abu stroke-putih">
                        INV/20230301/MPL/109375922
                    </div>
                </div>
                <div class="fs-2 fw-bold text-light">
                    MPL ID REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE
                </div>

                <div class="fs-6 warna-abu stroke-putih">
                    4 Ticket x Rp 75.000
                </div>
            </div>
        </div>

        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="container-fluid warna-abu d-flex flex-column align-items-start stroke-putih border-start">
                <div class="ms-3">
                    Total Expenses
                </div>
                <div class="m-3">
                    Rp300.000
                </div>
                <div class="ms-3 mt-2">
                    <button class="btn btn-danger rounded-3 fw-semibold px-3" type="button">Buy Again</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
