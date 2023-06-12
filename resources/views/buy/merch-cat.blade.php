@extends('main.template1')

@section('header')
    @include('header.header-after')
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
            <div class="border-merah-75 rounded-4" style="margin-right: 5rem">
                <div>
                    <img src="/images/Merch/evos.png" alt="Valorant">
                </div>
                <div class="fs-3 fw-semibold p-4">
                    EVOS Jersey
                </div>
                <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                    <div>
                        Rp150.000
                    </div>
                    <div>
                        <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                    </div>
                </div>
            </div>

            <div class="border-merah-75 rounded-4" style="margin-right: 5rem">
                <div>
                    <img src="/images/Merch/rrq.png" alt="MobileLegend">
                </div>
                <div class="fs-3 fw-semibold p-4">
                    RRQ Jersey
                </div>
                <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                    <div>
                        Rp150.000
                    </div>
                    <div>
                        <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                    </div>
                </div>
            </div>

            <div class="border-merah-75 rounded-4">
                <div>
                    <img src="/images/Merch/onic.png" alt="MobileLegend" class="rounded-4">
                </div>
                <div class="fs-3 fw-semibold p-4">
                    ONIC Jersey
                </div>
                <div class="fs-4 tulisan-merah-terang fw-semibold p-4 d-flex align-items-center justify-content-between">
                    <div>
                        Rp150.000
                    </div>
                    <div>
                        <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
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
