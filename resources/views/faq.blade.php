@extends('main.template1')

@section('content')
    <div class="container-fluid col-11 mt-3 mb-3">
        <a href=""><img src="/images/Icons/Vector.png" alt="back"></a> &nbsp;
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