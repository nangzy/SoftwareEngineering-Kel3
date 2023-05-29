@extends('main.template1')

@section('content')

    <div class="container-fluid col-11 mb-4">
        <a href="#"><img src="/images/Icons/Vector.png" alt="tanda-panah" class="img-fluid"></a>
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
            <img src="/images/others/JerseyRRQ.png" alt="jerseyRRQ" class="img-fluid p-2">
        </div>

        <div class="col-6 px-3">
            <div class="container-fluid px-0 flex-column d-flex align-items-start justify-content-start" style="height: 8rem">
                <div class="d-flex mb-auto">
                    <div class="fs-6 warna-abu stroke-putih">
                        21 April 2023 
                    </div>

                    <div>
                        <button class="btn btn-sm btn-danger btn-sm text-dark rounded-pill fw-bold mx-3 px-3 py-0" type="button">Done</button>
                    </div>

                    <div class="fs-6 warna-abu stroke-putih">
                        INV/20230421/MPL/457391833                 
                    </div>
                </div>
                <div class="fs-2 fw-bold text-light">
                    RRQ Jersey, L
                </div>
                
                <div class="fs-6 warna-abu stroke-putih">
                    3 piece x Rp 150.000
                </div>
            </div>
        </div>

        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="container-fluid warna-abu d-flex flex-column align-items-start stroke-putih border-start">
                <div class="ms-3">
                    Total Expenses
                </div>
                <div class="m-3">
                    Rp450.000
                </div>
                <div class="ms-3 mt-2">
                    <button class="btn btn-danger rounded-3 fw-semibold px-3" type="button">Buy Again</button>
                </div>
            </div>
        </div>
    </div>
@endsection