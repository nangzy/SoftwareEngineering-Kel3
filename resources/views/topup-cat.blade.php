@extends('main.template1')

@section('header')
    <li class="nav-item">
        <div class="input-group">
            <div class="form-outline" style="margin-left: 1rem;">
                <input type="search" id="form1" class="form-control" placeholder="Search"/>
            </div>
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Home
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Valorant
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Mobile Legends
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Merch
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Ticket
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Top Up
        </a>
    </li>
    <li class="nav-item">
        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"
           href="#">
            Notification
        </a>
    </li>
    <li class="nav-item">
        <button type="button" class="btn btn-outline-danger"><img src="/images/icons/Login.png" alt="login"> Log In
        </button>
    </li>
    {{--    yg di bawah ini bisa diuncomment pas beackend udh jadi, ini buat klo udah login--}}
    {{--    <li class="nav-item">--}}
    {{--        <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item"--}}
    {{--           href="#">--}}
    {{--            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"--}}
    {{--                 class="bi bi-person-circle" viewBox="0 0 16 16">--}}
    {{--                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>--}}
    {{--                <path fill-rule="evenodd"--}}
    {{--                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>--}}
    {{--            </svg>--}}
    {{--        </a>--}}
    {{--    </li>--}}
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
