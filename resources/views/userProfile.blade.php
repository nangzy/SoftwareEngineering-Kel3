@extends('main.template1')

@section('content')

    <div class="container-fluid col-11 bg-merah-terang-20 rounded-4 mb-3">
        <div class="container-fluid d-flex justify-content-center mb-5">
            <h2 class="text-light fw-semibold">User Profile</h2>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <img src="/images/devan.png" alt="devan">
        </div>
        
        <div class="container-fluid d-flex justify-content-center col-6 border border-light">
            <div class="fs-5 fw-semibold d-flex container-fluid justify-content-between">
                <table class="table table-borderless">
                    <tbody class="warna-abu stroke-putih">
                        <tr>
                          <th>Nama</th>
                          {{-- ubah dibawah sini --}}
                          <th>Devan</th>
                        </tr>

                        <tr>
                            <th>Date of Birth</th>
                            {{-- ubah dibawah sini --}}
                            <th>25 August 2001</th>
                        </tr>

                        <tr>
                            <th>Gender</th>
                            {{-- ubah dibawah sini --}}
                            <th>Male</th>
                        </tr>

                        <tr>
                            <th>Email</th>
                            {{-- ubah dibawah sini --}}
                            <th>devan.augusta@gmail.com</th>
                          </tr>

                        <tr>
                          <th>Phone Number</th>
                          {{-- ubah dibawah sini --}}
                          <th>081273592705</th>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3 pb-3">
            <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="--bs-btn-padding-x: 3rem"> Edit Profile</button></a>
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
                <div class="fs-5 fw-semibold container-fluid border border-light bg-merah-terang-20 p-4">
                    <div class="rounded-pill bg-merah-terang text-dark mb-3 fs-6" style="padding: .25rem 1rem; display:inline-block;"> 
                        Merch
                    </div>
        
                    <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                        <div>
                            Product
                        </div>
                        <div>
                            EVOS Jersey
                        </div>
                    </div>
        
                    <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                        <div>
                            Price
                        </div>
                        <div>
                            Rp315.000
                        </div>
                    </div>
        
                    <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                        <div>
                            Quantity
                        </div>
                        <div>
                            1
                        </div>
                    </div>
        
                    <div class="d-flex container-fluid justify-content-between warna-abu stroke-putih">
                        <div>
                            Total Price
                        </div>
                        <div>
                            Rp315.000
                        </div>
                    </div>
                </div>
        </div>
        </div>
        <div class="d-flex justify-content-center fs-5 mt-3">
            <a href="#" class="text-decoration-none tulisan-merah-terang">
                See All    
            </a> 
        </div>
        <div>
            &nbsp;
        </div>
    </div>

    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-lg btn-danger">
            <img src="/images/Icons/logOut.png" alt=""> Log out
        </button>
    </div>


@endsection