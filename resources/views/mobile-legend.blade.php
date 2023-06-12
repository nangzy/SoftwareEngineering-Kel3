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
                                <span class="text-white fw-bold">Sea Games 2023: MLBB Men: Day 1</span>
                                <span class="text-white">1 Day</span>
                            </div>
                            <div class="d-flex justify-content-between mt-2 mb-3">
                                <div>
                                    <img src="/images/Icons/philiphine-flag.png" alt="Phillipines">
                                </div>
                                <div class="text-white fs-6">
                                    <div>
                                        Phillipines
                                    </div>
                                    <div>
                                        -
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        VS
                                    </div>
                                </div>
                                <div class="mx-2 text-white fs-6">
                                    <div>
                                        Laos
                                    </div>
                                    <div>
                                        -
                                    </div>
                                </div>
                                <div>
                                    <img src="/images/Icons/laos-flag.png" alt="Laos">
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
                                    MLBB South East Asia Cup 2023
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
                                        $300,000
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PRIZE POOL
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Jun 10 - Jun 18
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        DATES
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Cambodia
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PLACES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img src="/images/others/MSC_2023 2.png" alt="MSC" class="img-fluid p-2" width="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPLETED PART-->
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
                                <span class="text-white fw-bold">MPL Indonesia Season 11: Grand Final</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <img src="/images/others/ONIC.png" alt="ONIC Team">
                                </div>
                                <div class="text-white fs-6">
                                    <div>
                                        ONIC Esports
                                    </div>
                                    <div>
                                        4
                                    </div>
                                </div>
                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        VS
                                    </div>
                                </div>
                                <div class="mx-2 text-white fs-6">
                                    <div>
                                        EVOS Legends
                                    </div>
                                    <div>
                                        0
                                    </div>
                                </div>
                                <div>
                                    <img src="/images/others/EVOS.png" alt="EVOS TEAM">
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
                                    MPL Indonesia Season 11
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
                                        $300,000
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PRIZE POOL
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Feb 17 - May 7
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        DATES
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <div class="text-white fs-6">
                                        Phillipines
                                    </div>
                                    <div class="fs-6 warna-abu stroke-putih">
                                        PLACES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <img src="/images/others/mpl_ph_11 1.png" alt="MPL" class="img-fluid p-2" width="92%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="d-flex flex-row-reverse container-fluid col-10 mt-5">
        <a href="/faq/mlbb-tournament"><img src="/images/Icons/Group 308.png" alt="FAQ"></a>
    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
