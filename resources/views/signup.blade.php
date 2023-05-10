@extends('template1')

@section('header')
    <button type="button" class="btn btn-outline-danger"> <img src="/images/icons/Login.png" alt="login"> Log In</button>
@endsection

@section('content')
    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-5">
        <div class="fs-1 d-flex justify-content-center mb-2">
            <div style="color: #ffffff">
                Get Your&nbsp;
            </div>
            
            <div class="tulisan-merah-terang">
                E-SCORE TV&nbsp;
            </div>
            <div style="color: #ffffff">
                Account
            </div>
        </div>

        <div class="fs-6 d-flex justify-content-center mb-4" style="color: #A3B8BF">
            Sign into The E-score TV with your EST account
        </div>
        
        <div class="container-fluid rounded-4 d-flex flex-column col-4 warna-krem" style="background-color: #5a2225">
            <form>
                <div class="mt-2 p-3">
                  <label for="InputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="InputEmail1" placeholder="name@example.com">
                  
                </div>
                <div class="p-3">
                  <label for="InputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="InputPassword1" placeholder="**********">
                </div>
                <div class="mb-3 p-3">
                    <label for="InputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="**********">
                  </div>

                <div class="fs-5 d-flex justify-content-center" style="color: white">
                    OR
                </div>

                {{-- kurang api buat konekin --}}

                
                <div class="d-flex justify-content-center mb-2  ">
                    <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="color:black">Sign Up</button>

                </div>
              </form>
        </div>
    </div>
@endsection