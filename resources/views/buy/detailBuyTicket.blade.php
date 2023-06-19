@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <form action="/{{ $active }}/{{ $ticketId }}/payment-page" method="POST">
        @csrf
        <div class="ms-5">
            <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>
        </div>
        <div class="container-fluid mt-5 d-flex col-11">

            <div class="container-fluid rounded-4 col-5 d-flex align-items-center warna-abu">
                <div>
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
                            <select name="shipping_method" class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment" required>
                                <option selected>Shipping Method</option>
                                <option value="JNE">JNE</option> {{-- nama payment method bisa berubah --}}
                                <option value="Xpress Ninja">Xpress Ninja</option>
                                <option value="J&T">J&T</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid rounded-4 col-5 bg-merah-terang-20 warna-abu">
                <div class="d-flex px-1 pt-3 pb-5">
                    <div class="col-3">
                        @if($ticketDetailPayment->id == 1)
                            <img src="/images/Matches/Ticket1.png" alt="ticket" class="img-fluid" style="width: 100%;">
                        @elseif($ticketDetailPayment->id == 2)
                            <img src="/images/Matches/cat2.png" alt="ticket" class="img-fluid" style="width: 100%;">
                        @else
                            <img src="/images/Matches/cat3.png" alt="ticket" class="img-fluid" style="width: 100%;">
                        @endif
                    </div>
                    <div class="col-5 px-3">
                        <div class="fs-2">
                            {{-- Judul --}}
                            {{ $ticketDetailPayment->ticket_name }}
                        </div>
                        <div class="fs-4 pt-2 pb-2 d-flex">
                            {{-- harga  --}}
                            <div class="col">
                                Quantity
                            </div>
                            <div class="col d-flex justify-content-end">
                                {{ $ticketDetailPayment->chosen_quantity }}
                                <input type="number" name="chosen_quantity" value="{{ $ticketDetailPayment->chosen_quantity }}" style="display: none;">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 px-3 fs-3 pt-2">
                        <div class="tulisan-merah-terang">
                            {{ $ticketDetailPayment->price_indo }}
                        </div>
                    </div>
                </div>

                <div class="fs-6 fw-light pb-1">
                    <div class="d-flex border-top border-light justify-content-between align-items-center">
                        <div class="mt-4">
                            <input type="text" class="form-control" id="InputDiscount" placeholder="DISCOUNT CODE" style="width: 20rem;">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-md btn-danger shadow fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem; --bs-btn-padding-y: .5rem"> Apply </button>
                        </div>
                    </div>
                </div>

                <div class="fs-6 fw-light pb-3 warna-abu">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mt-3">
                            Subtotal
                        </div>
                        <div class="mt-3">
                            {{ 'Rp'.number_format($ticketDetailPayment->subtotal, 0, ",", ".") }}
                            <input type="number" name="subtotal" value="{{ $ticketDetailPayment->subtotal }}" style="display: none;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mt-3">
                            Shipping Cost
                        </div>
                        <div class="mt-3" id="shipping_cost">
                            {{ 'Rp'.number_format($ticketDetailPayment->shipping_cost, 0, ",", ".") }}
                            <input type="number" name="shipping_cost" value="{{ $ticketDetailPayment->shipping_cost }}" style="display: none;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mt-3">
                            Estimated Taxes
                        </div>
                        <div class="mt-3">
                            {{ 'Rp'.number_format($ticketDetailPayment->tax, 0, ",", ".") }}
                            <input type="number" name="tax" value="{{ $ticketDetailPayment->tax }}" style="display: none;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-bottom border-light pb-5">
                        <div class="mt-3">
                            Discount
                        </div>
                        <div class="mt-3">
                            {{ 'Rp'.number_format($ticketDetailPayment->discount, 0, ",", ".") }}
                            <input type="number" name="discount" value="{{ $ticketDetailPayment->discount }}" style="display: none;">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mt-3">
                            Total
                        </div>
                        <div class="mt-3">
                            {{ 'Rp'.number_format($ticketDetailPayment->endtotal, 0, ",", ".") }}
                            <input type="number" name="endtotal" value="{{ $ticketDetailPayment->endtotal }}" style="display: none;">
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between warna-abu stroke-putih">
                    <div class="col-6">
                        <select name="payment_method" class="form-select btn btn-lg btn-danger text-light fw-semibold" aria-label=".form-select payment" required>
                            <option selected>Payment Method</option>
                            <option value="QRIS">QRIS</option> {{-- nama payment method bisa berubah --}}
                            <option value="DANA">DANA</option>
                            <option value="OVO">OVO</option>
                        </select>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light text-decoration-none" style="--bs-btn-padding-x: 1.5rem"> Checkout </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    @include('footer.footer-2')
@endsection
