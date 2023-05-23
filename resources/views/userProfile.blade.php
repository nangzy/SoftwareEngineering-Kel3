@extends('main.template1')

@section('content')

    <div class="container-fluid col-11 bg-merah-terang-20 rounded-4">
        <div class="container-fluid d-flex justify-content-center mb-5">
            <h2 class="text-light fw-semibold">User Profile</h2>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <img src="/images/devan.png" alt="devan">
        </div>
        
        <div class="container-fluid d-flex justify-content-center col-5 border border-light">
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
    </div>

@endsection