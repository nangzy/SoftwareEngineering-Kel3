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
                <img src="/images/Icons/Group 214.png" alt="topup" class="img-fluid">
            </div>
            <div>
                <h4 class="ms-4">TOP UP</h4>
            </div>
        </div>

        <div class="p-5 d-flex justify-content-center">
            <a href="/top-up" class="text-decoration-none">
                <div class="border-merah-75 rounded-4 mx-5" style="margin-right: 15rem">
                    <div>
                        <img src="/images/others/image 20.png" alt="Valorant">
                    </div>
                    <div class="fs-3 text-white d-flex justify-content-center align-items-center p-4">
                        Valorant
                    </div>
                </div>
            </a>
            <a href="/top-up" class="text-decoration-none">
                <div class="border-merah-75 rounded-4 mx-5">
                    <div>
                        <img src="/images/others/image 21.png" alt="MobileLegend">
                    </div>
                    <div class="fs-3 text-white d-flex justify-content-center align-items-center p-4">
                        Mobile Legend
                    </div>
                </div>
            </a>
        </div>

        <div class="d-flex flex-row-reverse">
            <a href="/faq/top-up"><img src="/images/Icons/Group 308.png" alt="FAQ"></a>
        </div>
    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
