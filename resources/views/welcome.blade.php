<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>GinaFlor P.V.</title>
    <!-- Stylesheets & Fonts -->
    <link rel="shortcut icon" type="image" href="{{ asset('assets/images/logoai.png') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/welcom.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:+1234567890" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+52 4171074547</a>
                    <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"
                            aria-hidden="true"></i>cristobalp638@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                    <a href="{{route('register')}}" class="login"><i class="fa fa-user" aria-hidden="true"></i>Registrarse</a>
                    <ul class="nav social d-none d-md-flex">
                        <li><a href="https://www.facebook.com/Floreria-Ginaflor-PV-105678507803119" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Multipurpose" width="100px" height="100px"></a>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <a class="login-icon d-sm-none" href="{{route('register')}}"><i class="fa fa-user"></i></a>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('nosotros')}}">Sobre nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Arreglos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('formulario') }}">Contáctanos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Start -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-11">
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">Arreglos y eventos
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="600">Bienvenido a GinaFlor<br> El negocio que te brinda arreglos
                                        de calidad. <br>
                                    ¿Necesitas un arreglo?
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="/home" class="btn btn-primary">Comprar ahora</a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">Ahora a tu alcance</h1>
                                    <p data-aos="fade-right" data-aos-delay="600">Bienvenido a GinaFlor<br> El negocio que te brinda arreglos
                                        de calidad. <br>
                                    ¿Necesitas un arreglo?
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="/home" class="btn btn-primary">Comprar ahora</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class="arr-left"><i class="fa fa-angle-left"></i></span>
            <span class="arr-right"><i class="fa fa-angle-right"></i></span>
        </div>
        <div class="texture"></div>
        <div class="diag-bg"></div>
    </section>

    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Razones para elegirnos</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <img height="100" width="100" class="mr-4" src="assets/images/calidad.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Calidad</h5>
                                Los arreglos que brindamos al público se encuentran en el mejor estado.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <img height="100" width="100" class="mr-4" src="assets/images/confianza.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Confianza</h5>
                                Entregamos nuestros arreglos en tiempo y forma, cumpliendo con tus expectativas.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <img height="100" width="100" class="mr-4" src="assets/images/rebaja.png" alt="Web Development">
                            <div class="media-body">
                                <h5>Precio</h5>
                                Contamos con precios accesibles en todos nuestros arreglos.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-posts">
        <div class="container">
            <div class="title text-center">
                            <h1 align="center" class="title-blue">Nuestros arreglos</h1>
                        </div>
            <div class="row">

                <div class="col-lg-6">

                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3 style="color:white;">Nombre del arreglo</h3>

                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="arreglos/1.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="arreglos/2.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <h3 style="color:white;">Nombre del arreglo</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <h3 style="color:white;">Nombre del arreglo</h3>

                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="arreglos/3.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="arreglos/4.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <h3 style="color:white;">Nombre del arreglo</h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="/home" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    <section class="trust">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-6" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">Nuestros eventos</h6>
                        <h1>¿Cómo los llevamos a cabo?</h1>
                    </div>
                    <p>Elige los arreglos de tu preferencia, realiza el págo y posteriormente nos pondremos en contacto contigo para llegar a un acuerdo.
                    </p>
                    <h5>Algunos eventos son</h5>
                    <ul class="list-unstyled">
                        <li>15 años</li>
                        <li>Bodas</li>
                        <li>Funerales</li>
                        <li>Graduaciones</li>
                    </ul>
                </div>
                <div class="col-xl-5 gallery">
                    <div class="row no-gutters h-100" >
                        <a  class="w-50 h-100 gal-img" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="400">
                            <img class="img-fluid" src="arreglos/7.jpg" alt="Gallery Image">
                        </a>
                        <a  class="w-50 h-50 gal-img" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="600">
                            <img class="img-fluid" src="arreglos/a3.jpg" alt="Gallery Image">

                        </a>
                        <a  class="w-50 h-50 gal-img gal-img3" data-aos="fade-up"
                            data-aos-delay="0" data-aos-duration="600">
                            <img class="img-fluid" src="arreglos/a4.jpg" alt="Gallery Image">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial and Clients End -->
    <!-- Call To Action 2 Start -->
    <section class="cta cta2" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>¿Dudas?</h2>
                    <p>Si quires saber mas sobre nuestros arreglos/servicios puedes enviarnos un mensaje.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                <a href="{{route('formulario')}}" class="btn btn-primary">Enviar mensaje</a>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Call To Action 2 End -->

    <!-- Footer Endt -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>
</body>

</html>
