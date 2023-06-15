@extends('main.template1')

@section('content')
    <div class="container-fluid col-11 mt-3 mb-3">
        <div class="">
            <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="fs-4 fw-bold d-flex align-items-center mb-4 text-light col-10 container-fluid">
        <img src="/images/Icons/messagequestion.png" alt="faq">
        {{-- sesuaiin game nya --}}
        &nbsp;{{ $faq->title }}
    </div>

    <div class="container-fluid d-flex flex-column justify-content-center col-10 mt-3">
        <div class="container-fluid rounded-4 d-flex flex-column col-12 text-light bg-merah-terang-20" >

            {{-- nanti di loop buat isi faq nya --}}
            @php($contentSplit=explode("\n", $faq->content))
            <div class="fs-6 fw-semibold mb-4 mt-3 ">
                @foreach($contentSplit as $contentKey => $contentValue)
                    {{ $contentValue }} <br>
                @endforeach
            </div>
            
        </div>
    </div>
@endsection

@section('footer')
    @include('footer.footer-1')
@endsection