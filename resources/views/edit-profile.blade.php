@extends('main.template1')

@section('header')
    @if(Session::has('loginUser'))
        @include('header.header-after')
    @else
        @include('header.header-before')
    @endauth
@endsection

@section('content')
    <form action="/{{ Session::get('loginUser')->id }}/user-profile-edit" method="POST">
        @csrf
        <div class="container-fluid col-11 bg-merah-terang-20 rounded-4 mb-3 p-3">
            <div class="container-fluid d-flex justify-content-center mb-5">
                <h2 class="text-light fw-semibold">User Profile</h2>
            </div>

            <div class="d-flex justify-content-center mb-4">
                <img src="/images/devan.png" alt="devan">
            </div>

            <div class="container-fluid d-flex justify-content-center col-6 border border-light" style="border-radius: 1rem;">
                <div class="fs-5 fw-semibold d-flex container-fluid justify-content-between">
                    <table class="table table-borderless mt-3">
                        <tbody class="warna-abu">
                        <tr>
                            <th>Nama</th>
                            {{-- ubah dibawah sini --}}
                            <th>
                                <input type="text" name="name" class="form-control" required autofocus placeholder="Fill in name" value="{{ Session::get('loginUser')->name }}">
                            </th>
                        </tr>

                        <tr>
                            <th>Date of Birth</th>
                            {{-- ubah dibawah sini --}}
                            <th>
                                <input type="date" name="date_of_birth" class="form-control" required placeholder="Fill in date of birth" value="{{ Session::get('loginUser')->date_of_birth }}">
                            </th>
                        </tr>

                        <tr>
                            <th>Gender</th>
                            {{-- ubah dibawah sini --}}
                            <th>
                                <div class="d-flex">
                                    @if(Session::get('loginUser')->gender == 'M')
                                        <input type="radio" name="gender" class="form-check-input" value="M" required checked>&nbsp;Male
                                        <input type="radio" name="gender" class="form-check-input ms-3" value="F" required>&nbsp;Female
                                    @elseif(Session::get('loginUser')->gender == 'F')
                                        <input type="radio" name="gender" class="form-check-input" value="M" required>&nbsp;Male
                                        <input type="radio" name="gender" class="form-check-input ms-3" value="F" required checked>&nbsp;Female
                                    @else
                                        <input type="radio" name="gender" class="form-check-input" value="M" required>&nbsp;Male
                                        <input type="radio" name="gender" class="form-check-input ms-3" value="F" required>&nbsp;Female
                                    @endif

                                </div>

                            </th>
                        </tr>

                        <tr>
                            <th>Email</th>
                            {{-- ubah dibawah sini --}}
                            <th>
                                <input type="text" name="email" class="form-control" value="{{ Session::get('loginUser')->email }}" required placeholder="Fill in email">
                            </th>
                        </tr>

                        <tr>
                            <th>Phone Number</th>
                            {{-- ubah dibawah sini --}}
                            <th>
                                <input type="text" name="phone_number" class="form-control" required placeholder="Fill in phone number" value="{{ Session::get('loginUser')->phone_number }}">
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-decoration-none" style="--bs-btn-padding-x: 3rem"> Apply </button>
            </div>
        </div>
    </form>
@endsection
