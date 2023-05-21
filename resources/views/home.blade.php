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
    <main class="container">
        <br><br>

        <div style="color: white; font-size: 22pt; font-weight: bolder;">
            VALORANT
        </div>

        <br>

        <div style="display: flex; align-items: start;">
            <div style="margin-right: 1rem;">
                <img src="{{ asset('/images/Icons/hot_news.png') }}" alt="hot news icon" style="width: 90%;">
            </div>

            <div style="color: white; font-size: 16pt; font-weight: bold;">
                HOT NEWS
            </div>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1" style="background-color: white;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2" style="background-color: white;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3" style="background-color: white;"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/carousel/valorant/valorant_1.png') }}" alt="banner valo 1" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                    <br>

                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                            Valorant
                        </div>

                        <div style="color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg> 2 Days ago
                        </div>
                    </div>

                    <div style="color: white; text-align: center; margin-bottom: 3rem;">
                        Big Names Fall during VCT Americas Week 1
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/carousel/valorant/valorant_2.png') }}" alt="banner valo 2" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                    <br>

                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                            Valorant
                        </div>

                        <div style="color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg> 2 Days ago
                        </div>
                    </div>

                    <div style="color: white; text-align: center; margin-bottom: 3rem;">
                        Disguised Toast Game Changers Stream Team Dream Comes to Abrupt End
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/carousel/valorant/valorant_3.png') }}" alt="banner valo 3" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                    <br>

                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                            Valorant
                        </div>

                        <div style="color: white;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            </svg> 2 Days ago
                        </div>
                    </div>

                    <div style="color: white; text-align: center; margin-bottom: 3rem;">
                        VCT Americas: From Scrim Buddies to Competition
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
