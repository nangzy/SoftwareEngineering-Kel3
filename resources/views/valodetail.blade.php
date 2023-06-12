@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <div class="container-fluid col-11 mb-4">
        <a href="#"><img src="/images/Icons/Vector.png" alt="tanda-panah" class="img-fluid"></a>
    </div>

    <div class="warna-merah-gelap container-fluid col-11 mt-5 rounded-3">
        <div class="d-flex container-fluid col-12 py-3">
            <div class="col-2 d-flex justify-content-center">
                <img src="/images/others/image 41.png" alt="Logo Tournament" class="img-fluid">
            </div>

            <div class="col-10 px-3">
                <div class="container-fluid px-0 flex-column d-flex align-items-start" style="height: 8rem">
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="fs-3 fw-bold text-white">
                            Champions Tour 2023: LOCK/IN São Paulo
                        </div>
                        <div class="fs-4 text-white">
                            Sunday, March 5th
                        </div>
                    </div>
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="fs-5 text-white">
                            Playoffs Grand Final
                        </div>

                        <div class="fs-5 text-white">
                            1:30 AM WIB
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex justify-content-between col-10 align-items-start">
            <div class="fs-4 fw-bold text-white mt-5">
                LOUD
            </div>
            <div class="d-flex justify-content-center">
                <img src="/images/others/Loud 3.png" alt="Tim Loud" class="img-fluid">
            </div>
            <div>
                <span class="fs-4 text-white mx-1">FINAL</span>
                <div class="fs-1">
                    <span class="text-white">2</span>
                    <span class="text-white">:</span>
                    <span style="color: lime">3</span>
                </div>
                <div class="text-white fs-6 mx-3">
                    BO 5
                </div>
            </div>
            <div>
                <img src="/images/others/fnatic 3.png" alt="Tim Fnatic" class="img-fluid">
            </div>
            <div class="fs-4 fw-bold text-white mt-5">
                FNATIC
            </div>
        </div>

        <div class="d-flex justify-content-center fs-5 text-white p-3 mt-3" style="font-style: italic">
            LOUD ban Haven; FNC ban Pearl; LOUD pick Ascent; FNC pick Fracture; LOUD pick Split; FNC pick Lotus; Icebox remains
        </div>
    </div>

    <div class="container-fluid col-11 mt-5 d-flex justify-content-between">
        <div class="container-fluid">
            <div class="text-white fw-bold fs-5 p-2">
                STREAMS
            </div>

            <!-- HERE COMES THE LOOPING -->
            <div class="container-fluid d-flex mb-5">
                <div class="warna-merah-gelap p-2 rounded-3">
                    <img src="/images/Icons/united-flag.png" alt="United Flag" class="img-fluid">
                    <span class="text-white fs-6">Valorant</span>
                </div>

                <div class="warna-merah-gelap p-2 rounded-3 mx-5">
                    <img src="/images/Icons/korea-flag.png" alt="Korea Flag" class="img-fluid">
                    <span class="text-white fs-6">Valorant Korea</span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="text-white fw-bold fs-5 p-2">
                VODS
            </div>
            <!-- HERE COMES THE LOOP -->
            <div class="container-fluid d-flex mb-5">
                <div class="warna-merah-gelap p-2 rounded-3">
                    <span class="text-white fs-6">MAP 1</span>
                </div>

                <div class="warna-merah-gelap p-2 rounded-3 mx-5">
                    <span class="text-white fs-6">MAP 2</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid col-11 mt-5">
        <div class="warna-merah-gelap">
            <div class="d-flex justify-content-center p-2">
                <img src="images/Icons/Stats Logo.png" alt="Statistic Logo" class="img-fluid">
            </div>

            <div class="d-flex justify-content-center fs-5 fw-bold text-white">
                OVERVIEW
            </div>
        </div>

        <div class="bg-merah-terang">
            <div class="container-fluid col-2 d-flex text-white">
                <div class="p-3">R</div>
                <div class="p-3">ACS</div>
                <div class="d-flex p-3">
                    <div class="mx-3">K</div>
                    <div class="mx-3">D</div>
                    <div class="mx-3">A</div>
                </div>
                <div class="p-3">+/-</div>
                <div class="p-3">KAST</div>
                <div class="p-3">ADR</div>
                <div class="p-3">HS%</div>
                <div class="p-3">FK</div>
                <div class="p-3">FD</div>
                <div class="p-3">+/-</div>
            </div>

            <!-- HERE COMES THE LOOP -->
            <div class="container-fluid d-flex mb-3">
                <div class="container-fluid d-flex">
                    <div>
                        <img src="/images/Icons/brazil-flag.png" alt="Brazil Flag">
                    </div>
                    <div class="fs-6 fw-bold mx-2">
                        <span class="text-white">LESS</span>
                        <div>LOUD</div>
                    </div>
                </div>

                <div class="container-fluid d-flex">
                    <div class="mx-2"><img src="/images/others/killjoy.png" alt="Agent Kilijoy" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/viper.png" alt="Agent Viper" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/breach.png" alt="Agent Breach" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/skye.png" alt="Agent Skye" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/jett.png" alt="Agent Jett" class="img-fluid"></div>
                </div>

                <div class="container-fluid col-7 d-flex text-white fs-6 fw-bold mx-2">
                    <div class="warna-merah-gelap p-2 mx-1">1.20</div>
                    <div class="warna-merah-gelap p-2">245</div>
                    <div class="d-flex p-2 warna-merah-gelap mx-3">
                        <div class="mx-2">98</div>
                        <div class="mx-1">/</div>
                        <div class="mx-2">78</div>
                        <div class="mx-1">/</div>
                        <div>27</div>
                    </div>
                    <div class="warna-merah-gelap p-2 mx-2" style="color: lime">+20</div>
                    <div class="warna-merah-gelap p-2 mx-2">74%</div>
                    <div class="warna-merah-gelap p-2 mx-2">173</div>
                    <div class="warna-merah-gelap p-2 mx-2">25%</div>
                    <div class="warna-merah-gelap p-2 mx-2">245</div>
                    <div class="warna-merah-gelap p-2 mx-2">4</div>
                    <div class="warna-merah-gelap p-2 mx-3" style="color: lime">+8</div>
                </div>
            </div>

            <div class="container-fluid d-flex mb-3">
                <div class="container-fluid d-flex">
                    <div>
                        <img src="/images/Icons/brazil-flag.png" alt="Brazil Flag">
                    </div>
                    <div class="fs-6 fw-bold mx-2">
                        <span class="text-white">LESS</span>
                        <div>LOUD</div>
                    </div>
                </div>

                <div class="container-fluid d-flex">
                    <div class="mx-2"><img src="/images/others/killjoy.png" alt="Agent Kilijoy" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/viper.png" alt="Agent Viper" class="img-fluid"></div>
                    <div class="mx-2"><img src="/images/others/breach.png" alt="Agent Breach" class="img-fluid"></div>
                </div>

                <div class="container-fluid col-7 d-flex text-white fs-6 fw-bold mx-2">
                    <div class="warna-merah-gelap p-2 mx-1">1.20</div>
                    <div class="warna-merah-gelap p-2">245</div>
                    <div class="d-flex p-2 warna-merah-gelap mx-3">
                        <div class="mx-2">98</div>
                        <div class="mx-1">/</div>
                        <div class="mx-2">78</div>
                        <div class="mx-1">/</div>
                        <div>27</div>
                    </div>
                    <div class="warna-merah-gelap p-2 mx-2" style="color: lime">+20</div>
                    <div class="warna-merah-gelap p-2 mx-2">74%</div>
                    <div class="warna-merah-gelap p-2 mx-2">173</div>
                    <div class="warna-merah-gelap p-2 mx-2">25%</div>
                    <div class="warna-merah-gelap p-2 mx-2">245</div>
                    <div class="warna-merah-gelap p-2 mx-2">4</div>
                    <div class="warna-merah-gelap p-2 mx-3" style="color: lime">+8</div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
