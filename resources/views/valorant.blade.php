@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <!-- BUTTON FILTER N REGION -->
    <div class="container-fluid col-10 d-flex mb-5">
        <div class="tulisan-merah-terang fs-6">
            Filter
        </div>

        <div class="ml-3 mr-3">
            <button class="border-merah-20 rounded-pill mx-4 px-3" type="button">Region <img src="/images/Icons/arr-down.png" alt="arr-down"></button>
        </div>
    </div>

    <!-- UPCOMING PART -->
    <div class="container-fluid col-11 mb-5">
        <div class="container-fluid d-flex justify-content-between">
            <!-- UPCOMING MATCHES -->
            <div class="container-fluid">
                <div class=" container-fluid d-flex justify-content-between">
                    <div class="ms-2 fs-2 text-white d-flex">
                        <img src="/images/Icons/game.png" alt="icon-game">
                        UPCOMING MATCHES
                    </div>
                    <div class="tulisan-merah-terang fs-2">
                        View More
                    </div>
                </div>

                <!-- HERE COMES THE LOOP -->
                <div class="border-merah-75 d-flex container-fluid col-11 mt-3">
                    <div class="col-12">
                        <div>
                            <div class="d-flex justify-content-between fs-6">
                                <span class="text-white fw-bold">Challengers League Indonesian: Split 2</span>
                                <span class="tulisan-merah-terang">LIVE</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-2">
                                <div>
                                    <img src="/images/Icons/indo-flag.png" alt="Indonesia">
                                </div>
                                <div class="text-white fs-6">
                                    <div>
                                        Dominatus
                                    </div>
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        VS
                                    </div>
                                </div>
                                <div class="mx-2 text-white fs-6">
                                    <div>
                                        Hike Digital Esports
                                    </div>
                                    <div>
                                        1
                                    </div>
                                </div>
                                <div>
                                    <img src="/images/Icons/indo-flag.png" alt="Indonesia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UPCOMING EVENTS -->
            <div class="container-fluid">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="ms-2 fs-2 text-white d-flex">
                        <img src="/images/Icons/tournament.png" alt="icon-tournament">
                        UPCOMING EVENTS
                    </div>
                    <div class="tulisan-merah-terang fs-2">
                        View More
                    </div>
                </div>

                <!-- HERE COMES THE LOOP -->
                <div class="border-merah-75 d-flex container-fluid col-11 mt-3">
                    <div class="col-9 px-1">
                        <div class="container-fluid px-0 flex-column d-flex align-items-start justify-content-start">
                            <div class="d-flex mb-auto">
                                <div class="fs-6 text-white fw-bold">
                                    Champions Tour 2023: Pacific League
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="tulisan-merah-terang fs-6">
                                        Ongoing
                                    </div>

                                    <div class="fs-6 warna-abu stroke-putih">
                                        STATUS
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        $250,000
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PRIZE POOL
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Mar 25 - May 28
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        DATES
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Seoul
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PLACES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img src="/images/Icons/VCT_Pacific 1.png" alt="Tim_VCT" class="img-fluid p-2" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPLETED PART -->
    <div class="container-fluid col-11">
        <div class="container-fluid d-flex justify-content-between">
            <!-- COMPLETED MATCHES -->
            <div class="container-fluid">
                <div class=" container-fluid d-flex justify-content-between">
                    <div class="ms-2 fs-2 text-white d-flex">
                        <img src="/images/Icons/game.png" alt="icon-game">
                        COMPLETED MATCHES
                    </div>
                    <div class="tulisan-merah-terang fs-2">
                        View More
                    </div>
                </div>

                <!-- HERE COMES THE LOOP -->
                <div class="border-merah-75 d-flex container-fluid col-11 mt-3">
                    <div class="col-12">
                        <div>
                            <div class="d-flex justify-content-between fs-6">
                                <span class="text-white fw-bold">Challengers League Indonesian: Split 1</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-2">
                                <div>
                                    <img src="/images/Icons/indo-flag.png" alt="Indonesia">
                                </div>
                                <div class="text-white fs-6">
                                    <div>
                                        Le Crapaud
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        VS
                                    </div>
                                </div>
                                <div class="mx-2 text-white fs-6">
                                    <div>
                                        BOOM Esports
                                    </div>
                                    <div>
                                        2
                                    </div>
                                </div>
                                <div>
                                    <img src="/images/Icons/indo-flag.png" alt="Indonesia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COMPLETED EVENTS -->
            <div class="container-fluid">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="ms-2 fs-2 text-white d-flex">
                        <img src="/images/Icons/tournament.png" alt="icon-tournament">
                        COMPLETED EVENTS
                    </div>
                    <div class="tulisan-merah-terang fs-2">
                        View More
                    </div>
                </div>

                <!-- HERE COMES THE LOOP -->
                <div class="border-merah-75 d-flex container-fluid col-11 mt-3">
                    <div class="col-9 px-1">
                        <div class="container-fluid px-0 flex-column d-flex align-items-start justify-content-start">
                            <div class="d-flex mb-auto">
                                <div class="fs-6 text-white fw-bold">
                                    Game Changer 2023 Asia Pacific: Open 1
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="tulisan-biru fs-6">
                                        Completed
                                    </div>

                                    <div class="fs-6 warna-abu stroke-putih">
                                        STATUS
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        $10,000
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PRIZE POOL
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Mar 09 - Mar 20
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        DATES
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Online
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PLACES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img src="/images/Icons/GameChanger 1.png" alt="GameChanger" class="img-fluid p-2" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="d-flex flex-row-reverse container-fluid col-10 mt-5">
        <a href="#"><img src="/images/Icons/Group 308.png" alt="FAQ"></a>
    </div>

@endsection

<!-- @section('footer')
    @include('footer.footer-2')
@endsection -->

<!-- <div class="container-fluid col-10 d-flex">
                    <div class="mx-2"><img src="/images/others/killjoy.png" alt="Agent Kilijoy" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/viper.png" alt="Agent Viper" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/breach.png" alt="Agent Breach" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/skye.png" alt="Agent Skye" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/jett.png" alt="Agent Jett" class="img-fluid"></div>

                    <div class="container-fluid col-7 d-flex text-white fs-6 fw-bold mr-5">
                        <div class="warna-merah-gelap p-2">1.20</div>
                        <div class="warna-merah-gelap p-2">245</div>
                        <div class="d-flex p-2 warna-merah-gelap">
                            <div class="mx-2">98</div>
                            <div class="mx-1">/</div>
                            <div class="mx-2">78</div>
                            <div class="mx-1">/</div>
                            <div class="mx-2">27</div>
                        </div>
                        <div class="warna-merah-gelap p-2" style="color: lime">+20</div>
                        <div class="warna-merah-gelap p-2">74%</div>
                        <div class="warna-merah-gelap p-2">173</div>
                        <div class="warna-merah-gelap p-2">25%</div>
                        <div class="warna-merah-gelap p-2">245</div>
                        <div class="warna-merah-gelap p-2">4</div>
                        <div class="warna-merah-gelap p-2" style="color: lime">+8</div>
                    </div>
                </div> -->
