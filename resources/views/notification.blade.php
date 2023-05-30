@extends('main.template1')

@section('content')
    <div class="fs-5 fw-bold d-flex align-items-center mb-4 text-light col-10 container-fluid">
        <img src="/images/Icons/notifications.png" alt="faq">
        {{-- sesuaiin game nya --}}
        &nbsp;NOTIFICATIONS
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-3">
        <div class="container-fluid rounded-4 d-flex flex-column col-12 warna-abu bg-merah-terang-20" >
            {{-- mulai looping disini  --}}
            <div class="container-fluid d-flex flex-column justify-content-center mt-4 mb-2">
                <div class="fw-semibold fs-5 stroke-putih">
                    {{-- Jenis game  --}}
                    Valorant
                </div>
                <div class="fs-6 mb-4 mt-3 "> {{-- content--}}
                    Riot Games Announces Valorant Champions Tour, a Global Tournament Series for 2021.<br>
                    Riot Games has announced the launch of Valorant Champions Tour (VCT), a global tournament series featuring top teams from around the world. The VCT will consist of three levels of competition: Challengers, Masters, and Champions.
                </div>
            </div>
            
        </div>
    </div>
@endsection