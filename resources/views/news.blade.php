@extends('main.template1')

@section('content')
<div class="d-flex container-fluid col-11">
    <div class="">
        <button class="btn shadow text-decoration-none back-button" onclick="history.back()" style="color: #ff4654; background-color: #0f1722;">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </button>
    </div>

    <div class="container-fluid col-11">
        <div class="d-flex justify-content-between text-white">
            <h1>{{ $news->title }}</h1>
        </div>

        <div class="d-flex flex-row-reverse p-2 ">
            <div>
                <img src="/images/Icons/clock.png" alt="Clock">
                <span class="text-white">2 days ago</span>
            </div>
            
            <div class="valo-btn">
                <a href="#">Valorant</a>
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-center">
            <img src="/images/others/{{ $news->image }}.png" alt="news" class="img-fluid" style="width: 50rem; height: auto;">
        </div>
        @php($contentSplit=explode("\n", $news->content))
        <div class="text-white fs-6 text-justify my-5 ">
            @foreach($contentSplit as $contentKey => $contentValue)
                {{ $contentValue }} <br>
            @endforeach
        </div>

        <div class="news-foot rounded-3 p-4">
            <h5 class="mb-4">RELATED:</h5>
            <div class="mb-3">VCT 2023 Americas League: Teams, Results, Schedule, Format, Livestreams, More</div>
        </div>
    </div>
</div>
    

@endsection

@section('footer')
    @include('footer.footer-2')
@endsection