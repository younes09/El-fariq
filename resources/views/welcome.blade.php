<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>الفريق</title>
    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('assets/img/logo.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="landing/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="landing/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="landing/assets/css/Brands.css">
    <link rel="stylesheet" href="landing/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="landing/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="landing/assets/css/Header-Blue.css">
    <link rel="stylesheet" href="landing/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="landing/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="landing/assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="landing/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Tajawal&display=swap');
        .nav-item a{
            box-shadow: inset 0 0 0 0 #54b3d6;
            color: #54b3d6;
            margin: 0 -.25rem;
            padding: 0 .25rem;
            transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
        }
        .nav-item a:hover {
            box-shadow: inset 100px 0 0 0 #56c6c6;
            color: white;
        }
    </style>
</head>

<body style="background: linear-gradient(90deg, #136a8a, #267871);direction: rtl;font-family: 'Tajawal', sans-serif;">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">EL FARIQ</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">حول</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">إتصل بنا</a></li>
                </ul><span class="navbar-text actions"> 
                    
                    @if (Route::has('login'))
                        @auth
                            <a class="login" href="{{  url('/home') }}">العود إلى الحساب</a>
                        @else
                            <a class="login" href="{{ route('login') }}">دخول لحسابي</a>
                            @if (Route::has('register'))
                            <a class="btn btn-light action-button" role="button" href="{{ route('register') }}">حساب جديد</a>
                            @endif
                        @endauth
                    @endif
                    </span>
            </div>
        </div>
    </nav>
    <div class="container-md my-5">
        <div class="row justify-content-center my-5">
            <div class="col-xl-6 col-sm-12 p-5">
                <h1 class="my-5" style="font-weight: bolder;">مرحبا بك في مسابقة الفريق</h1>
                <h4 class="my-5">مسابقة الفريق هي مسابقة وطنية لكرة القدم للتسجيل في المسابقة يرجى الضغط على الزر شارك في المسابقة</h4>
                <a class="btn btn-primary text-nowrap" href="{{ route('register') }}">شارك في المسابقة<i class="fa fa-soccer-ball-o m-2"></i></a>
            </div>
            <div class="col-xl-6 col-sm-12 p-5"><img class="img-fluid" src="landing/assets/img/Football_Player.png"></div>
        </div>
        <div class="row justify-content-center my-5 align-self-center text-center">
            <div class="col-xl-6 col-sm-12 p-5"><img class="img-fluid" src="landing/assets/img/kisspng-podium-award-trophy-illustration-a-trophy-standing-on-the-charts-5aa17a2c77d166.5435737015205320124908-removebg-preview.png"></div>
            <div class="col-xl-6 col-sm-12 p-5 align-self-center text-center">
                <h1 style="font-weight: bolder;">من سيكون بطل مسابقة الفريق ؟</h1>
            </div>
        </div>
    </div>
    <div class="brands"><a href="#"> <img src="landing/assets/img/instacart.png"><img src="landing/assets/img/kickstarter.png"><img src="landing/assets/img/lyft.png"><img src="landing/assets/img/shopify.png"><img src="landing/assets/img/pinterest.png"><img src="landing/assets/img/twitter.png"></a></div>
    <footer class="footer-basic">
        <div class="social">
            <a href="https://www.youtube.com/@LallaTV?sub_confirmation=1"><i class="icon ion-social-youtube"></i></a>
            <a href="https://fr-fr.facebook.com/LALLA.TELEVISION/"><i class="icon ion-social-facebook"></i></a>
            <a href="https://www.instagram.com/lalla.tv/"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.tiktok.com/@lalla.tv"><img src="{{ url('assets/img/logo-tiktok.svg') }}" style="height: 1.25rem;margin-bottom: 7px;"></img></a>
        </div>
        <ul class="list-inline">
            {{-- <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li> --}}
        </ul>
        <p class="copyright"><a href="http://indexcommunication.com/">INDEXCOMMUNICATION</a> © {{ date('Y') }}</p>
    </footer>
    <script src="landing/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="landing/assets/js/Simple-Slider.js"></script>
</body>

</html>