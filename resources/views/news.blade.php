@extends('main.template1')

@section('content')
<div class="d-flex container-fluid col-11">
    <div>
        <a href="#"><img src="/images/Icons/Vector.png" alt="tanda-panah" class="img-fluid"></a>
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
            <img src="/images/others/{{ $news->image }}.png" alt="news" class="img-fluid">
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