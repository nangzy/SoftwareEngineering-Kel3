@extends('main.template1')

@section('content')
    <div class="container-fluid mt-5 d-flex col-11">
        <div class="mt-3 mb-3">
            <a href=""><img src="/images/Icons/Vector.png" alt="back"></a> &nbsp;
        </div>
    
        <div id="carouselExampleCaptions" class="carousel slide">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span aria-hidden="true"><img src="/images/Icons/kiri.png" alt="back"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            {{-- loop buat gambar --}}
            {{-- entah kenapa carousel nya ga smooth --}}
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/images/Merch/baju-depan.png" class="d-block w-100" alt="baju-depan">
              </div>
              <div class="carousel-item">
                <img src="/images/Merch/baju-blkg.png" class="d-block w-100" alt="baju-blkg">
              </div>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span aria-hidden="true"><img src="/images/Icons/kanan.png" alt="next"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>

        <div class="container-fluid rounded-4 col-5 bg-merah-terang-20 warna-abu">
            <div class="d-flex flex-row-reverse">
                {{-- category --}}
                <a href="/" class="text-decoration-none"><button type="submit" class="btn btn-sm btn-danger shadow m-3 fw-semibold text-dark rounded" style="--bs-btn-padding-x: 1rem"> MLBB</button></a>
            </div>
            <div class="fs-2 stroke-putih">
                {{-- Judul --}}
                EVOS Jersey
            </div>
            <div class="fs-3 tulisan-merah-terang pt-2 pb-2">
                {{-- harga  --}}
                Rp150.000
            </div>
            <div class="border-bottom border-white stroke-putih fs-6 fw-light pb-3">
                <form>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="warna-abu fw-light">
                        SIZE
                    </div>
                    <div class="">
                      {{-- ukurannya --}}
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="warna-abu fw-light">
                      <label for="InputQuantity" class="form-label">QUANTITY</label>
                  </div>
                  <div class="col-1">
                    <input type="text" class="form-control" id="InputQuantity" placeholder="1">
                  </div>
                </div>
                </form>
            </div>
            <div class="pt-2">
              {{-- loop disini --}}
                <div class="mb-3">
                  Category:
                </div>
                <div>
                  tes 123
                </div>

                <div class="mb-3">
                    Item Description:
                </div>

                <div>
                  <ul type="square">
                    <li>
                      tes 123
                    </li>
                  </ul>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-end warna-abu stroke-putih">
              <div class="">
                <a href="/payment-page" class="text-decoration-none"><button type="submit" class="btn btn-lg btn-danger shadow m-3 fw-semibold text-light" style="--bs-btn-padding-x: 1.5rem"> Buy Now </button></a> 
              </div>
            </div>
        </div>
    </div>
@endsection

{{-- belom di dropdown sama quantitynya belom bisa nambah --}}