@extends('main.template1')

@section('header')
    @include('header.header-after')
@endsection

@section('content')
    <div class="container-fluid col-11">
        <a href=""><img src="/images/Icons/Vector.png" alt="back"></a> &nbsp;
    </div>
    <div class="container-fluid mt-5 d-flex col-11">

        <div class="container-fluid rounded-4 col-5 d-flex align-items-center warna-abu">
            <form>
                <div class="px-3">
                    <label for="InputFullName" class="form-label fs-2">Contact Information</label>
                    <input type="text" class="form-control" id="InputFullName" placeholder="FULL NAME">
                </div>
                <div class="mt-4 px-3">
                    <input type="text" class="form-control" id="InputRegion" placeholder="COUNTRY/REGION">
                </div>
                <div class="d-flex mt-4 px-3">
                    <div class="col-3">
                        <input type="text" class="form-control" id="InputCity" placeholder="CITY">
                    </div>
                    <div class="col-1 me-3">
                        &nbsp; 
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id="InputRegency" placeholder="REGENCY">
                    </div>
                    <div class="col-1 me-4">
                        &nbsp; 
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id="InputPostCode" placeholder="POST CODE">
                    </div>
                </div>

                <div class="mt-4 px-3">
                    <input type="text" class="form-control" id="InputAddress" placeholder="ADDRESS FOR SHIPPING">
                </div>
                <div class="mt-4 px-3">
                    <input type="text" class="form-control" id="InputPhoneNumber" placeholder="PHONE NUMBER">
                </div>
                <div class="d-flex align-items-center justify-content-start warna-abu stroke-putih px-3 mt-4">
                    <div class="col-6">
                        <select class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment">
                            <option selected>Shipping Method</option>
                            <option value="1">JNE</option> {{-- nama payment method bisa berubah --}}
                            <option value="2">Xpress Ninja</option>
                            <option value="3">J&T</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid rounded-4 col-5 bg-merah-terang-20 warna-abu">
            <div class="d-flex px-1 pt-3 pb-5">
                <div class="col-3">
                    <img src="/images/Merch/baju-depan.png" class="d-block w-100 rounded-4" alt="baju-depan">
                </div>
                <div class="col-5 px-3">
                    <div class="fs-2">
                        {{-- Judul --}}
                        EVOS Jersey
                    </div>
                    <div class="fs-4 pt-2 pb-0 d-flex">
                        {{-- size  --}}
                        <div class="col">
                            Size
                        </div>
                        <div class="col d-flex justify-content-end">
                            M
                        </div>
                    </div>
                    <div class="fs-4 pt-2 pb-2 d-flex">
                        {{-- harga  --}}
                        <div class="col">
                            Quantity
                        </div>
                        <div class="col d-flex justify-content-end">
                            2
                        </div>
                    </div>
                </div>
                <div class="col-3 px-3 fs-3 pt-2">
                    <div class="tulisan-merah-terang">
                        Rp150.000
                    </div>
                </div>
            </div>

            <div class="fs-6 fw-light pb-1">
                <form class="d-flex border-top border-light justify-content-between align-items-center">
                    <div class="mt-4">
                        <input type="text" class="form-control" id="InputDiscount" placeholder="DISCOUNT CODE" style="width: 20rem;">
                    </div>
                    <div class="mt-4">
                        <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-md btn-danger shadow fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem; --bs-btn-padding-y: .5rem"> Apply </button></a> 
                    </div>
                </form>
            </div>
            
            <div class="fs-6 fw-light pb-3 warna-abu">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-3">
                        Subtotal
                    </div>
                    <div class="mt-3">
                        Rp300.000 
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-3">
                        Subtotal
                    </div>
                    <div class="mt-3">
                        Rp300.000 
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-3">
                        Shipping Cost
                    </div>
                    <div class="mt-3">
                        Rp20.000 
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-3">
                        Estimated Taxes
                    </div>
                    <div class="mt-3">
                        Rp5.000 
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center border-bottom border-light pb-5">
                    <div class="mt-3">
                        Discount
                    </div>
                    <div class="mt-3">
                        Rp10.000 
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="mt-3">
                        Total
                    </div>
                    <div class="mt-3">
                        Rp315.000 
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between warna-abu stroke-putih">
                <div class="col-6">
                    <select class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment">
                        <option selected>Payment Method</option>
                        <option value="1">QRIS</option> {{-- nama payment method bisa berubah --}}
                        <option value="2">DANA</option>
                        <option value="3">OVO</option>
                    </select>
                </div>

                <div class="">
                    <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Checkout </button></a> 
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection