@extends('template1')

{{-- bisa buat merch, ticket, TU mole, TU valo --}}

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
        <div class="container-fluid rounded-4 d-flex flex-column col-8 p-4 warna-abu stroke-putih mt-3 bg-merah-terang-20">
            <div class="justify-content-center d-flex mb-2 fs-4 text-center mt-3 fw-bold text-light">
                Payment
            </div>

            <div class="mb-2 fs-4 mt-3 fw-semibold">
                Order Details
            </div>

            <div class="mb-2 fs-5 mt-3 fw-semibold">
                Please confirm your Username is correct.
            </div>

            <div class="d-flex mb-2 fs-5 fw-semibold">
                <div class="col-5">
                    {{-- Mole --}}
                    User ID
                    {{-- Valo : Riot ID --}}
                </div>

                <div class="col-4">
                    : 1234567(1234)
                </div>
            </div>

            <div class="d-flex mb-2 fs-5 fw-semibold">
                <div class="col-5">
                    Price
                </div>

                <div class="col-4">
                    : Rp5.000
                </div>
            </div>

            <div class="mb-2 fs-4 mt-3 fw-semibold">
                Open m-banking or e-Wallet and scan the QR code to complete the payment!
            </div>
            
            <div class="justify-content-center d-flex mt-3 mb-3 p-3 border-bottom">
                <img src="/images/qr.png" alt="qr" class="col-4 pb-3">
            </div>

            <div class="d-flex justify-content-between stroke-putih warna-abu fs-2 pt-3 pb-1">
                <div>
                    Total Payment:
                </div>
                <div>
                    Rp5.000
                </div>
            </div>
            
        </div>
    </div>
@endsection