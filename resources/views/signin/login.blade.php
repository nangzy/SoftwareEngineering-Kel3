@extends('main.template1')

@section('header')
    <li class="nav-item">
        <a href="/sign-up" type="button" class="btn btn-outline-danger"><img src="/images/icons/Signup.png"
                                                                             alt="signup"> Sign Up
        </a>
    </li>
@endsection

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
        <div class="fs-1 d-flex justify-content-center mb-2">
            <div style="color: #ffffff">
                Welcome to&nbsp;
            </div>

            <div class="tulisan-merah-terang">
                E-SCORE TV
            </div>
        </div>

        <div class="fs-6 d-flex justify-content-center mb-4" style="color: #A3B8BF">
            Sign into The E-score TV with your EST account
        </div>

        <div class="container-fluid rounded-4 d-flex flex-column col-4 warna-krem bg-merah-terang-20">
            <form method="post" action="/login">
{{--                pakai @csrf biar gk dapet error 'page expired'--}}
                @csrf
                <div class="mt-2 p-3">
                    <label for="InputEmail1" class="form-label">Email Address</label>
                    <input type="text" name="user_email" class="form-control" id="InputEmail1" placeholder="name@example.com" autofocus required value="{{ old('user_email') }}">
                    @if($validateUserInput == 'wrong_email_format')
                        <div class="fw-semibold text-white">
                            Wrong Email Format!
                        </div>
                    @endif
                </div>
                <div class="mb-3 p-3">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <input type="password" name="user_password" class="form-control" id="InputPassword1" placeholder="**********" required>
                </div>

{{--                <div class="fs-5 d-flex justify-content-center" style="color: white">--}}
{{--                    OR--}}
{{--                </div>--}}

                {{-- kurang api buat konekin --}}
{{--                <div class="text-center">--}}
{{--                    google sign in, etc.--}}
{{--                </div>--}}

                <div class="mb-3 form-check m-3">
                    <input type="checkbox" class="form-check-input" id="Check1">
                    <label class="form-check-label" for="Check1">Remember Me</label>
                </div>

                @if($validateUserInput == 'login_failed')
                    <div class="fs-5 fw-semibold p-3 text-center text-white" style="background-color: #80181E; border-radius: 1rem;">
                        Wrong Credentials!
                    </div>
                @endif

                <div class="d-flex justify-content-center mb-2  ">
                    <button type="submit" value="login" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="color:black">
                        Login
                    </button>
                </div>
            </form>
        </div>



        <div class="d-flex justify-content-center fs-5 fw-semibold m-3">
            <a href="/forgot-password" class="text-decoration-none text-light">Forgot Password?</a>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer.footer-1')
@endsection
