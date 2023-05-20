{{-- login; sign up; faq; success payment --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EscoreTV</title>

    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background-color: #0f1722">
    {{-- header --}}
    <div class="container d-flex justify-content-between pt-3 align-items-center">
        <div class="warna-krem fs-4 d-flex flex-row align-items-end">
            <img src="{{ asset('/images/logo1.png') }}" alt="logo" class="img-fluid">
            &nbsp;E-SCORE TV
        </div>

        <div>
            @yield('header')
        </div>
    </div>

    @yield('content')

    <br><br>

    {{-- footer --}}
    <img src="{{ asset('/images/others/footer-transparent-2.png') }}" alt="" style="position: absolute; background-repeat: no-repeat; z-index: -10; object-fit: fill; height: 60vh; width: 100%;">
    <div class="container-fluid warna-abu col-11 mt-5 mb-3">
        <br><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-9">
                <div class="fs-6">
                    2023 © <u>E-SCORE TV</u>
                </div>
                <br>
                <div class="fs-6">
                    E-Score TV isn't endorsed by all the games we present and doesn't reflect the views or opinions of anyone officially involved in producing or managing all the games. All associated properties are trademarks or registered trademarks of the company that develops the games.
                </div>
            </div>
            <div class="col-md-3">
                <div style="color: white; font-size: 20pt; font-weight: bolder; text-align: right;">
                    FOLLOW US
                </div>

                <br>

                <div style="text-align: right;">
                    <a href="#" class="pressed-icons" style="display: inline-block; margin-right: 1rem;">
                        <img src="{{ asset('images/Icons/twitter.png') }}" alt="twitter" style="height: 3rem;">
                    </a>

                    <a href="#" class="pressed-icons" style="display: inline-block; margin-right: 1rem;">
                        <img src="{{ asset('images/Icons/instagram.png') }}" alt="twitter" style="height: 3rem;">
                    </a>

                    <a href="#" class="pressed-icons" style="display: inline-block;">
                        <img src="{{ asset('images/Icons/discord.png') }}" alt="twitter" style="height: 3rem;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
