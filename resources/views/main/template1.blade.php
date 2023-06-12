{{-- login; sign up; faq; success payment --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EscoreTV</title>

    <link rel="stylesheet" href="/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: #0f1722">
    {{-- header --}}
    @include('main.header')

{{--    <div class="container d-flex justify-content-between pt-3 align-items-center">--}}
{{--        <div class="warna-krem fs-4 d-flex flex-row align-items-end">--}}
{{--            <img src="{{ asset('/images/logo1.png') }}" alt="logo" class="img-fluid">--}}
{{--            &nbsp;E-SCORE TV--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            @yield('header')--}}
{{--        </div>--}}
{{--    </div>--}}

    @yield('content')

    <br><br>

    {{-- footer --}}
    @include('main.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="/js/template1.js"></script>
</html>
