@extends('template1')


@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
        <div class="fs-1 d-flex justify-content-center mb-2">
            <div style="color: #ffffff">
                Welcome to&nbsp;
            </div>
            
            <div class="tulisan-merah-terang">
                E-SCORE TV
            </div>
        </div>

        <div class="fs-6 d-flex justify-content-center mb-4" style="color: #A3B8BF">
            Reset Your Password
        </div>
        
        <div class="container-fluid rounded-4 d-flex flex-column col-4 warna-abu" style="background-color: #5a2225">
            <div class="justify-content-center d-flex mt-5">
                <img src="/images/icons/clipboardtick.png" alt="clipboard" class="col-4">
            </div>

            <div class="justify-content-center d-flex mb-4 fs-2 text-center mt-3 fw-semibold">
                You have successfully change your password.
            </div>
            <div class="d-flex justify-content-center mb-2  ">
                <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="color:black">Log In</button>
            </div>
        </div>
    </div>
@endsection