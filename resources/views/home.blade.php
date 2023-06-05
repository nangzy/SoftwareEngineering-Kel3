@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

@section('content')
    <main class="container">
        <br><br>

        <div>
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

            <div style="display: flex; align-items: center; justify-content: start;">
                <div style="margin-right: 1rem;">
                    <img src="{{ asset('/images/Icons/matches.png') }}" alt="matches icon" style="width: 90%;">
                </div>

                <div style="color: white; font-size: 16pt; font-weight: bold;">
                    MATCHES
                </div>
            </div>

            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1" style="background-color: white;"></button>
                    {{--                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"--}}
                    {{--                        aria-label="Slide 2" style="background-color: white;"></button>--}}
                    {{--                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"--}}
                    {{--                        aria-label="Slide 3" style="background-color: white;"></button>--}}
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/carousel/valorant/banner1.png') }}" alt="banner valo 1" class=""
                             style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">
                    </div>
                    {{--                <div class="carousel-item">--}}
                    {{--                    <img src="{{ asset('/images/carousel/valorant/valorant_2.png') }}" alt="banner valo 2" class=""--}}
                    {{--                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">--}}

                    {{--                    <br>--}}

                    {{--                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">--}}
                    {{--                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">--}}
                    {{--                            Valorant--}}
                    {{--                        </div>--}}

                    {{--                        <div style="color: white;">--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">--}}
                    {{--                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>--}}
                    {{--                            </svg> 2 Days ago--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div style="color: white; text-align: center; margin-bottom: 3rem;">--}}
                    {{--                        Disguised Toast Game Changers Stream Team Dream Comes to Abrupt End--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="carousel-item">--}}
                    {{--                    <img src="{{ asset('/images/carousel/valorant/valorant_3.png') }}" alt="banner valo 3" class=""--}}
                    {{--                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">--}}

                    {{--                    <br>--}}

                    {{--                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">--}}
                    {{--                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">--}}
                    {{--                            Valorant--}}
                    {{--                        </div>--}}

                    {{--                        <div style="color: white;">--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">--}}
                    {{--                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>--}}
                    {{--                            </svg> 2 Days ago--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div style="color: white; text-align: center; margin-bottom: 3rem;">--}}
                    {{--                        VCT Americas: From Scrim Buddies to Competition--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <br><br><br><br><br>

        <div>
            <div style="color: white; font-size: 22pt; font-weight: bolder;">
                MOBILE LEGENDS
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

            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1" style="background-color: white;"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1"
                            aria-label="Slide 2" style="background-color: white;"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2"
                            aria-label="Slide 3" style="background-color: white;"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/carousel/mobile_legends/mobile_legends1.png') }}" alt="banner ml 1" class=""
                             style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                        <br>

                        <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                            <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                                Mobile Legends
                            </div>

                            <div style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                </svg> 2 Days ago
                            </div>
                        </div>

                        <div style="color: white; text-align: center; margin-bottom: 3rem;">
                            Mobile Legeds Tour 101
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/carousel/mobile_legends/mogile_legends2.png') }}" alt="banner ml 2" class=""
                             style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                        <br>

                        <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                            <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                                Mobile Legends
                            </div>

                            <div style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                </svg> 2 Days ago
                            </div>
                        </div>

                        <div style="color: white; text-align: center; margin-bottom: 3rem;">
                            Caption here
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/carousel/mobile_legends/mogile_legends2.png') }}" alt="banner ml 3" class=""
                             style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">

                        <br>

                        <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">
                            <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">
                                Mobile Legends
                            </div>

                            <div style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                </svg> 2 Days ago
                            </div>
                        </div>

                        <div style="color: white; text-align: center; margin-bottom: 3rem;">
                            Caption here
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div style="display: flex; align-items: center; justify-content: start;">
                <div style="margin-right: 1rem;">
                    <img src="{{ asset('/images/Icons/matches.png') }}" alt="matches icon" style="width: 90%;">
                </div>

                <div style="color: white; font-size: 16pt; font-weight: bold;">
                    MATCHES
                </div>
            </div>

            <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1" style="background-color: white;"></button>
                    {{--                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1"--}}
                    {{--                        aria-label="Slide 2" style="background-color: white;"></button>--}}
                    {{--                <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2"--}}
                    {{--                        aria-label="Slide 3" style="background-color: white;"></button>--}}
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/carousel/mobile_legends/banner1.png') }}" alt="banner ml 1" class=""
                             style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">
                    </div>
                    {{--                <div class="carousel-item">--}}
                    {{--                    <img src="{{ asset('/images/carousel/valorant/valorant_2.png') }}" alt="banner valo 2" class=""--}}
                    {{--                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">--}}

                    {{--                    <br>--}}

                    {{--                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">--}}
                    {{--                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">--}}
                    {{--                            Valorant--}}
                    {{--                        </div>--}}

                    {{--                        <div style="color: white;">--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">--}}
                    {{--                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>--}}
                    {{--                            </svg> 2 Days ago--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div style="color: white; text-align: center; margin-bottom: 3rem;">--}}
                    {{--                        Disguised Toast Game Changers Stream Team Dream Comes to Abrupt End--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="carousel-item">--}}
                    {{--                    <img src="{{ asset('/images/carousel/valorant/valorant_3.png') }}" alt="banner valo 3" class=""--}}
                    {{--                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem; margin-bottom: 1rem;">--}}

                    {{--                    <br>--}}

                    {{--                    <div style="display: flex; justify-content: center; margin-bottom: 0.5rem; align-items: center;">--}}
                    {{--                        <div style="border-radius: 10rem; background-color: #ff4654; color: black; padding: 0.2rem 0.5rem; margin-right: 2rem;">--}}
                    {{--                            Valorant--}}
                    {{--                        </div>--}}

                    {{--                        <div style="color: white;">--}}
                    {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">--}}
                    {{--                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>--}}
                    {{--                            </svg> 2 Days ago--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div style="color: white; text-align: center; margin-bottom: 3rem;">--}}
                    {{--                        VCT Americas: From Scrim Buddies to Competition--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
