<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CodeFácil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Styles
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            h2 {
                font-size: 30px;
                font-weight: 400;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .img-footer {
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>-->
    </head>
    <body>
<!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))

                <div class="top-right links">

                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md">
                    Roles y Permisos<br><h2><small>Proyecto Básico</small></h2>
                </div>

                <div class="links">
                    <img class="img-responsive img-footer" src="" alt="Diseño y Desarrollo Web - JavierJG">
                    <p>
                        Made by <a href="" target="_blank"></a>
                    </p>
                    <p>
                        &lt!-- La vida sería más fácil si pudiésemos ver su <b><code>Código Fuente</code></b> --&gt
                    </p>
                </div>
            </div>
        </div>-->

        <header>
          <nav class="navbar">
            <a class="navbar-brand" href="#">
              <img class="img-logo" src="images/logo_codefacil.png" class="d-inline-block align-top" alt=""/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
            <!--<ul class="navbar-nav">
              <li class="nav-item"><a href="#" class="nav-link">Iniciar Sesión</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Registro</a></li>
            </ul>-->
            <div class="">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
            </div>
          </nav>
        </header>

        <div class="container-fluid">
          <div class="section1">
            <div class="row align-items-center">
              <div class="col-12 text-center">
                <h1>Comparte archivos de forma sencilla <br>a través de Códigos QR</h1>
                <img width="80%" src="images/img-home.png" />
              </div>
            </div>
          </div>
          <div class="section2">
            <div class="row align-items-center">
              <div class="col-12 text-center">
                <img class="btn-subir" src="images/boton-subir.jpg" />
                <h3>SUBE TU ARCHIVO EN PDF</h3>
              </div>
            </div>
          </div>
          <div class="section3">
            <div class="row align-items-center">
              <div class="col-12 text-center">
                <h3 class="h3-section3">PÁSATE A PREMIUM</h3>
                <p>Sin Publicidad | Control de Visitas<br>Encuesta de satisfacción</p>
              </div>
            </div>
          </div>
          <div class="section4"><h1>Tu Publicidad aquí</h1></div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | CodeFácil
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
              </div>
            </div>
          </div>
        </footer>

         <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/jquery-migrate-3.0.1.min.js"></script>
          <script src="js/jquery-ui.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.stellar.min.js"></script>
          <script src="js/jquery.countdown.min.js"></script>
          <script src="js/bootstrap-datepicker.min.js"></script>
          <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/aos.js"></script>
          <script src="js/jquery.fancybox.min.js"></script>
          <script src="js/jquery.sticky.js"></script>


          <script src="js/main.js"></script>
    </body>
</html>
