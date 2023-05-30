@extends('main.template1')

@section('content')
    <div class="container-fluid col-11">
        <a href=""><img src="/images/Icons/Vector.png" alt="back"></a> &nbsp;
    </div>
    <div class="container-fluid d-flex justify-content-start align-items-center col-11 mt-5">
        <div>
            <img src="/images/Tournamen/vct(saopaolo).png" alt="sao paolo">
        </div>

        <div class="fs-4 d-flex flex-column fw-semibold text-light px-5">
            <div class="row">
                Champions Tour 2023: LOCK/IN São Paulo
            </div>
            <div class="row warna-abu d-flex" style="font-size: .7rem;">
                <div class="col px-0">
                    DATES
                </div>
                <div class="col px-0">
                    PRIZE POOL
                </div>
                <div class="col px-0">
                    LOCATION
                </div>
            </div>
            <div class="row warna" style="font-size: .75rem;">
                <div class="col px-0">
                    Feb 13, 2023 - Mar 5, 2023
                </div>
                <div class="col px-0">
                    $500,000 USD
                </div>
                <div class="col px-0">
                    São Paulo, Brazil
                </div>
            </div>
        </div>
    </div>

    <div class="fs-2 fw-semibold text-light col-11 container-fluid mt-5">
        PLAYOFFS
    </div>

    <div class="container-fluid col-11 mt-2 warna-merah-gelap text-light rounded-3 p-5">
        <div class="row d-flex py-5">
            <div class="col d-flex justify-content-center fs-2">
                Semifinals
            </div>
            <div class="col d-flex justify-content-center fs-2">
                Final
            </div>
        </div>
        <div class="row py-5 container-fluid me-0 col-11 d-flex justify-content-center">
            <img src="/images/Tournamen/bracketvct.png" alt="bracket" class="img-fluid">
        </div>
    </div>

    <div class="d-flex container-fluid justify-content-between col-11 align-items-center">
        <div class="fs-2 fw-semibold text-light col-7 container-fluid mt-5 me-4">
            PRIZE DISTRIBUTION
        </div>
        <div class="fs-2 fw-semibold text-light col-5 container-fluid mt-5">
            UPCOMING MATCHES
        </div>
    </div>


    <div class="d-flex container-fluid justify-content-between col-11">
        <div class="container-fluid mt-2 warna-merah-gelap text-light rounded-3 p-0 rounded-3 col-7 d-flex">
            <table class="table table-bordered text-light text-center fs-3 align-middle m-0">
                <thead class="">
                    <tr class="">
                      <th scope="col">Place</th>
                      <th scope="col">Price</th>
                      <th scope="col">Team</th>
                      <th scope="col">Note</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="row">1st</th>
                        <td>$100.000 USD</td>
                        <td class="">
                            <img src="/images/Tournamen/Logo Team Valo/fnatic.png" alt="fnatic" style="width: 3rem" class="pe-3">
                            Fnatic
                        </td>
                        <td></td>
                    </tr>
                    <tr class="">
                        <th scope="row">2nd</th>
                        <td>$60.000 USD</td>
                        <td class="">
                          <img src="/images/Tournamen/Logo Team Valo/loud.png" alt="loud" style="width: 3rem" class="pe-3">
                          Loud
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3rd-4th</th>
                        <td>$40.000 USD</td>
                        <td class="">
                          <img src="/images/Tournamen/Logo Team Valo/drx.png" alt="drx" style="width: 3rem" class="pe-3">
                          DRX
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3rd-4th</th>
                        <td>$40.000 USD</td>
                        <td class="">
                          <img src="/images/Tournamen/Logo Team Valo/navi.png" alt="navi" style="width: 3rem" class="pe-3">
                          Natus Vincere
                        </td>
                        <td></td>
                    </tr>
                  </tbody>
              </table>
        </div>

        <div class="d-flex flex-column col-5 ps-5">
            <div class="container-fluid mt-2 warna-merah-gelap text-light rounded-3 p-0 rounded-3 fs-5 p-3 ">
                <div class="text-center p-5">
                    There is no upcoming matches for this tournament!
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> All Upcoming Matches</button></a> 
                </div>
            </div>
            <div class="fs-2 fw-semibold text-light ps-3 container-fluid mt-5">
                LATEST RESULTS
            </div>
            <div class="container-fluid mt-2 warna-merah-gelap text-light rounded-3 p-0 rounded-3 fs-5 p-3 ">
                <div class="fs-5 fw-semibold pb-3">
                    Playoff-Semifinals
                </div>
                <div class="d-flex pb-2">
                    <div class="col-2">
                        <img src="/images/Tournamen/Nation/Brazil.png" alt="BR">
                    </div>
                    <div class="col-5">
                        LOUD
                    </div>
                    <div class="col-3">
                        3
                    </div>
                    <div class="col" style="color: #FD0000">
                        60d
                    </div>
                </div>

                <div class="d-flex pb-3">
                    <div class="col-2">
                        <img src="/images/Tournamen/Nation/SouthKorea.png" alt="SK">
                    </div>
                    <div class="col-5">
                        DRX
                    </div>
                    <div class="col-3">
                        2
                    </div>
                </div>

                <div class="border mb-3">
                </div>

                {{-- Semi-Final --}}
                <div class="fs-5 fw-semibold pb-3">
                    Playoff-Semifinals
                </div>
                <div class="d-flex pb-2">
                    <div class="col-2">
                        <img src="/images/Tournamen/Nation/Brazil.png" alt="BR">
                    </div>
                    <div class="col-5">
                        LOUD
                    </div>
                    <div class="col-3">
                        2
                    </div>
                    <div class="col" style="color: #FD0000">
                        60d
                    </div>
                </div>

                {{-- Final --}}
                <div class="d-flex pb-3">
                    <div class="col-2">
                        <img src="/images/Tournamen/Nation/EuropeUnion.png" alt="EU">
                    </div>
                    <div class="col-5">
                        FNATIC
                    </div>
                    <div class="col-3">
                        3
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow mt-3 fw-semibold text-light" style="--bs-btn-padding-x: 3rem"> All Results </button></a> 
                </div>
            </div>
        </div>
    </div>

    <div class="fs-2 fw-semibold text-light col-11 container-fluid mt-5 mb-2">
        PARTICIPATING TEAMS
    </div>

    <div class="d-flex col-11 container-fluid text-light fs-3" >
        <div class="container-fluid col me-4 px-0 rounded-3" style="background-color: #80181E">
            <div class="warna-merah-gelap text-center rounded-top px-0">
                Natus Vincere
            </div>
            <div class="d-flex justify-content-center align-items-center p-3 border-bottom">
                <img src="/images/Tournamen/Logo Team Valo/navi.png" alt="navi" style="width: 11rem">
            </div>
            <div class="text-center p-3">
                Alpha Bracket
            </div>
        </div>

        <div class="container-fluid col mx-4 px-0 rounded-3" style="background-color: #80181E">
            <div class="warna-merah-gelap text-center rounded-top">
                LOUD
            </div>
            <div class="d-flex justify-content-center align-items-center p-3 border-bottom">
                <img src="/images/Tournamen/Logo Team Valo/loud.png" alt="loud" style="width: 11rem">
            </div>
            <div class="text-center p-3">
                Alpha Bracket
            </div>
        </div>

        <div class="container-fluid col mx-4 px-0 rounded-3" style="background-color: #80181E">
            <div class="warna-merah-gelap text-center rounded-top">
                FNATIC
            </div>
            <div class="d-flex justify-content-center align-items-center p-3 border-bottom">
                <img src="/images/Tournamen/Logo Team Valo/fnatic.png" alt="fnt" style="width: 11rem">
            </div>
            <div class="text-center p-3">
                Omega Bracket
            </div>
        </div>

        {{-- foto drx nya belom diubah --}}
        <div class="container-fluid col mx-4 px-0 rounded-3" style="background-color: #80181E">
            <div class="warna-merah-gelap text-center rounded-top">
                DRX
            </div>
            <div class="d-flex justify-content-center align-items-center p-3 border-bottom">
                <img src="/images/Tournamen/Logo Team Valo/drx.png" alt="drx" style="width: 11rem">
            </div>
            <div class="text-center p-3">
                Omega Bracket
            </div>
        </div>
    </div>
@endsection