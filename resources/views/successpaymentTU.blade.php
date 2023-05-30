@extends('main.template1')

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
        <div class="fs-1 d-flex justify-content-center mb-2">
            <div style="color: #ffffff">
                Special Thanks From&nbsp;
            </div>
            
            <div class="tulisan-merah-terang">
                E-SCORE TV&nbsp;
            </div>
        </div>
        
        <div class="container-fluid rounded-4 d-flex flex-column col-5 warna-abu mt-3" style="background-color: #5a2225">
            <div class="justify-content-center d-flex mt-3">
                <img src="/images/icons/clipboardtick.png" alt="clipboard" class="col-4">
            </div>

            <div class="justify-content-center d-flex mb-2 fs-2 text-center mt-3 fw-semibold">
                Your purchase has been processed.
            </div>

            <div class="justify-content-center d-flex mb-2 fs-4 text-center mt-3 fw-semibold" style="color: #B1B1B1">
                Please wait 1-3 minutes for your purchase and re-login your account.
            </div>
            
            <div class="d-flex justify-content-center mb-2  ">
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="--bs-btn-padding-x: 3rem"> Home</button></a>
            </div>
        </div>
    </div>
@endsection