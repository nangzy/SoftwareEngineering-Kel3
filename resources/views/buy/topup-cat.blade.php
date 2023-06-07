@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

@section('content')
    <div class="container-fluid col-10 text-white">
        <div class="d-flex">
            <img src="/images/Icons/Group 214.png" alt="topup">
            <h4 class="ms-4">TOP UP</h4>
        </div>

        <div class="p-5 d-flex justify-content-between">
            <div class="border-merah-75">
                <div>
                    <img src="/images/others/image 20.png" alt="Valorant">
                </div>
                <div class="fs-3 d-flex justify-content-center align-items-center p-4">
                    Valorant
                </div>
            </div>

            <div class="border-merah-75">
                <div>
                    <img src="/images/others/image 21.png" alt="MobileLegend">
                </div>
                <div class="fs-3 d-flex justify-content-center align-items-center p-4">
                    Mobile Legend
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
