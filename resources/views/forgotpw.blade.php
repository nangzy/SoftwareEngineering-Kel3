@extends('template1')

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
            Reset Your Password
        </div>
        
        <div class="container-fluid rounded-4 d-flex flex-column col-4 warna-krem" style="background-color: #5a2225">
            <form>
                <div class="mt-2 p-2">
                    Please Input Your Active Email And Your New Password
                </div>
                <div class="p-2">
                  <label for="InputEmailVerification" class="form-label">Email Verification</label>
                  <input type="email" class="form-control" id="InputEmailVerification" placeholder="name@example.com">
                  
                </div>
                <div class="mb-3 p-2">
                  <label for="InputNewPassword" class="form-label">New Password</label>
                  <input type="password" class="form-control" id="InputInputPassword" placeholder="**********">
                </div>
                <div class="mt-2 p-2">
                    After you click reset, you will get verification number through your email
                </div>

                <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="color:black">Reset</button>
                </div>
              </form>
        </div>

        
    </div>
@endsection