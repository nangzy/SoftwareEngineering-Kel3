@extends('main.template1')

@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: #6A6A6A">
        <div class="modal-body">
            <div class="d-flex justify-content-center mb-2">
                <img src="/images/Icons/warning.png" alt="warning">
            </div>
            <div class="warna-abu stroke-putih d-flex justify-content-center fs-2 container-fluid col-11 mb-5">
                Oops!! <br>
                Looks like you dont have an account yet. Click here to create account
            </div>
            <div class="d-flex justify-content-center">
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold" style="--bs-btn-padding-x: 3rem"> Create Account</button></a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection