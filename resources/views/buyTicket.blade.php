@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

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
                {{-- category --}}
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow m-3 fw-semibold text-dark rounded" style="--bs-btn-padding-x: 1rem"> MLBB</button></a>
            </div>
            <div class="fs-2 stroke-putih">
                {{-- Judul --}}
                MPL ID REGULER SEASON <br>
                {{-- Sub-judul --}}
                DAY 1 MATCH 1 - GEEK VS AE
            </div>
            <div class="fs-3 tulisan-merah-terang pt-2 pb-2">
                {{-- harga  --}}
                Rp75.000
            </div>
            <div class="border-bottom border-white stroke-putih fs-6 fw-light pb-3">
                <form>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="warna-abu fw-light">
                            <label for="InputQuantity" class="form-label">QUANTITY</label>
                        </div>
                        <div class="col-1">
                            <input type="text" class="form-control" id="InputQuantity" placeholder="1">
                        </div>
                    </div>
                </form>
            </div>
            <div class="pt-2">
                <ul>
                    {{-- loop content --}}
                    <li>
                        REGULER SEASON DAY 1 MATCH 1 - GEEK VS AE (Legend / 3 Mar 2023)
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih">
                <div class="col-6">
                    <select class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment">
                        <option selected>Payment Method</option>
                        <option value="1">QRIS</option> {{-- nama payment method bisa berubah --}}
                        <option value="2">DANA</option>
                        <option value="3">OVO</option>
                    </select>
                </div>
                <div class="">
                    <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- belom di dropdown sama quantitynya belom bisa nambah --}}

@section('footer')
    @include('footer.footer-2')
@endsection