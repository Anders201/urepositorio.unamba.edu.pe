<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Repositorio-UNAMBA</title>

    <!-- repositorio -->
    <link rel="icon" href="img/core-img/logo-repo.ico">

    <!-- Core Stylesheet -->
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/index.css') }}">

    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Estilos de Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">

    <!-- Estilos de Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">

    <!-- Estilos de Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!-- Estilos de Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">

    <!-- Estilos de Classy Nav -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/classy-nav.min.css') }}">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-w...tuF3o00dc7Cq8GqSg3PEUuHh3qZx9aRfVdksAGxkfXep4Ts/6HZr7SOmYpd1K36Ys0TlM5lmYHH1xNZ5qAdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="{{ asset('frontend/assets/img/core-img/logo_repolargo.png') }}" alt="Logo Repolargo"></a>
                            </div>
                            <div class="login-content">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ route('index') }}">INICIO</a></li>
                                    <li><a href="{{ route('format') }}">Formatos</a>
                                        <ul class="dropdown">
                                            <li><a href="#proyectos">de Proyectos</a></li>
                                            <li><a href="#informes">de informes</a></li>
                                            <li><a href="#posgrado">de posgrado</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">GUIAS</a>
                                        <ul class="dropdown">
                                            <li><a href="https://www.iso.org/sites/directives/current/part2/index.xhtml" target="_blank">ISO 690</a></li>
                                            <li><a href="https://normas-apa.org/estructura/tablas/" target="_blank">APA</a></li>
                                            <li><a href="https://drive.google.com/file/d/1_Co8cqjeeDVZqGXZWdhOxiy_lS2m_mVC" target="_blank">Vancouver</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('state') }}">Estado Tramite</a></li>
                                    <li><a href="{{ route('about-us') }}">nosotros</a></li>
                                    <li><a href="{{ route('contact') }}">Contáctanos</a></li>
                                </ul>
                            </div>
                            
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+51918764328"><i class="fa fa-phone" aria-hidden="true"></i> <span>(+51)
                                        918 764 321</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
