@extends('template1') {{-- templatenya diganti --}}

@section('content')

    {{-- looping per game --}}
    {{-- belom di carousel-in --}}
    <div class="fs-4 fw-bold d-flex align-items-center mb-4 text-light col-9 container-fluid">
        {{-- sesuaiin game nya --}}
        Valorant 
    </div>

    <div class="fs-4 fw-bold d-flex align-items-center mb-4 text-light col-9 container-fluid">
        <img src="images/Icons/news.png" alt="hot-news">
        &nbsp; HOT NEWS
    </div>

    <div class="container-fluid d-flex justify-content-center col-9 mt-3">
        <div class="container-fluid d-flex flex-column text-light">
            {{-- isi news --}}
            <img src="/images/News/Valorant_news1.png" alt="valo_news1" class="img-fluid">
            <div class="fs-4">
                Big names fall during VCT Americas Week 1
            </div>
        </div>

        <div class="container-fluid d-flex flex-column text-light">
            {{-- isi news --}}
            <img src="/images/News/Valorant_news2.png" alt="valo_news2" class="img-fluid">
            <div class="fs-4">
                Disguised Toast Game Changers stream team dream comes to abrupt end
            </div>
        </div>

        <div class="container-fluid d-flex flex-column text-light">
            {{-- isi news --}}
            <img src="/images/News/Valorant_news3.png" alt="valo_news3" class="img-fluid">
            <div class="fs-4">
                VCT Americas: from scrim buddies to competition 
            </div>
        </div>
    </div>

    <div class="fs-4 fw-bold d-flex align-items-center mb-4 text-light col-9 container-fluid">
        <img src="images/Icons/matches.png" alt="hot-news">
        &nbsp; MATCHES
    </div>

    <div class="container-fluid d-flex justify-content-center col-9 mt-3">
        <div class="container-fluid d-flex flex-column text-light">
            {{-- isi news --}}
            <img src="/images/Matches/Matches1.png" alt="valo_news1" class="img-fluid">
            <div class="container-fluid p-3 d-flex justify-content-between" style="background-color: #2D0E0F">
                <div>
                    RRQ won the first El Classico in MPL ID S11 over EVOS. <a href="" class="tulisan-merah-terang">Click here for more info</a>
                </div>
                <div class="d-flex">
                    <img src="images/Icons/clock.png" alt="clock">
                    &nbsp; 2 weeks ago
                </div>
            </div>
        </div>
    </div>
@endsection