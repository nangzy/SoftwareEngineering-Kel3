@extends('main.template1')

@section('content')
    <div class="container-fluid mt-5 d-flex col-11">
        <div class="mt-3 mb-3">
            <a href=""><img src="/images/Icons/Vector.png" alt="back"></a> &nbsp;
        </div>
    
        <div class="col-5">
            <img src="/images/Matches/Ticket1.png" alt="ticket" class="img-fluid">
        </div>

        <div class="container-fluid rounded-4 col-5 bg-merah-terang-20 warna-abu">
            <div class="d-flex flex-row-reverse">
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow m-3 fw-semibold text-dark rounded" style="--bs-btn-padding-x: 1rem"> MLBB</button></a>
            </div>
            <div class="fs-2 stroke-putih">
                MPL ID REGULER SEASON <br>
                DAY 1 MATCH 1 - GEEK VS AE
            </div>
            <div class="fs-3 tulisan-merah-terang pt-2 pb-2">
                Rp75.000
            </div>
            <div class="border-bottom border-white stroke-putih fs-6 fw-light pb-3 d-flex justify-content-between">
                <div>
                    Quantity
                </div>

                <div>
                    {{-- quantity nya --}}
                    1
                </div>
            </div>
            <div class="pt-2">
                <ul>
                    {{-- loop content --}}
                    <li>
                        REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE (Legend / 3 Mar 2023)
                    </li>
                </ul>
            </div>
            <div class="d-flex flex-row-reverse">
                {{-- ini belom di drop down --}}
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="--bs-btn-padding-x: 1rem"> Buy Now </button></a> 
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="--bs-btn-padding-x: 1rem"> Payment Method</button></a>
            </div>
        </div>
    </div>
@endsection

{{-- belom di dropdown sama quantitynya belom bisa nambah --}}