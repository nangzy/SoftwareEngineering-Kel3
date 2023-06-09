@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <div class="container-fluid col-11 bg-merah-terang-20 rounded-4 mb-3 p-3">
        <div class="container-fluid d-flex justify-content-center mb-5">
            <h2 class="text-light fw-semibold">User Profile</h2>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <img src="/images/devan.png" alt="devan">
        </div>

        <div class="container-fluid d-flex justify-content-center col-6 border border-light" style="border-radius: 1rem;">
            <div class="fs-5 fw-semibold d-flex container-fluid justify-content-between">
                <table class="table table-borderless">
                    <tbody class="warna-abu">
                        <tr>
                          <th>Nama</th>
                          {{-- ubah dibawah sini --}}
                          <th>{{ Session::get('loginUser')->name }}</th>
                        </tr>

                        <tr>
                            <th>Date of Birth</th>
                            {{-- ubah dibawah sini --}}
                            <th>{{ Session::get('loginUser')->date_of_birth }}</th>
                        </tr>

                        <tr>
                            <th>Gender</th>
                            {{-- ubah dibawah sini --}}
                            <th>{{ Session::get('loginUser')->gender == 'M' ? 'Male' : 'Female' }}</th>
                        </tr>

                        <tr>
                            <th>Email</th>
                            {{-- ubah dibawah sini --}}
                            <th>{{ Session::get('loginUser')->email }}</th>
                          </tr>

                        <tr>
                          <th>Phone Number</th>
                          {{-- ubah dibawah sini --}}
                          <th>{{ Session::get('loginUser')->phone_number }}</th>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <a href="/{{ Session::get('loginUser')->id }}/user-profile-edit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-decoration-none" style="--bs-btn-padding-x: 3rem"> Edit Profile</a>
        </div>
    </div>

    <div class="container-fluid col-11 bg-merah-terang-20 rounded-4">
        <div class="container-fluid d-flex justify-content-center mb-2">
            <h2 class="text-light fw-semibold mt-4">Transaction History</h2>
        </div>
        <div class="justify-content-center d-flex">
            <div class="col-11">
                <div class="tulisan-merah-terang fs-5 mb-3">
                    Recent Transaction
                </div>

                @php($counter = 0)
                @foreach($transactions as $transactionKey => $transactionValue)
                    @if($counter == 2)
                        @break
                    @endif

                    <div class="fs-5 fw-semibold container-fluid border border-light bg-merah-terang-20 p-4 mb-3">
                        <div class="rounded-pill bg-merah-terang text-dark mb-3 fs-6" style="padding: .25rem 1rem; display:inline-block;">
                            @if($transactionValue->transaction_type == 1)
                                Ticket
                            @elseif($transactionValue->transaction_type == 2)
                                Merch
                            @else
                                Top Up
                            @endif
                        </div>

                        <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                            <div>
                                Product
                            </div>
                            <div>
                                {{ $transactionValue->item_name ?? $transactionValue->event_name }}
                            </div>
                        </div>

                        <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                            <div>
                                Price
                            </div>
                            <div>
                                {{ $transactionValue->real_price }}
                            </div>
                        </div>

                        <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                            <div>
                                Quantity
                            </div>
                            <div>
                                {{ $transactionValue->quantity }}
                            </div>
                        </div>

                        <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                            <div>
                                Total Price
                            </div>
                            <div>
                                {{ $transactionValue->ind_price }}
                            </div>
                        </div>
                    </div>

                    @php($counter++)
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center fs-5 mt-3">
            <form action="/{{ Session::get('loginUser')->id }}/detail-transaction-ticket" method="get">
                <button type="submit" class="remove-button-decoration tulisan-merah-terang see-all-btn">
                    See All
                </button>
            </form>
        </div>
        <div>
            &nbsp;
        </div>
    </div>

    <form action="/logout" method="POST">
        @csrf
        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-lg btn-danger" type="submit">
                <img src="/images/Icons/logOut.png" alt=""> Log out
            </button>
        </div>
    </form>
@endsection
