<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Simposio INAIGEM - Las Montañas Nuestro Futuro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="views/img/assets/logo-ico.ico" type="image/x-icon">
    <meta name="theme-color" content="#0067C0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="views/css/init.css" rel="stylesheet" type="text/css">
    <link href="views/css/ion-icons.min.css" rel="stylesheet" type="text/css">
    <link href="views/css/etline-icons.min.css" rel="stylesheet" type="text/css">
    <link href="views/css/theme.css" rel="stylesheet" type="text/css">
    <link href="views/css/custom.css" rel="stylesheet" type="text/css">
    <link href="views/css/colors/purple.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <meta property="og:url" content="https://inaigem.gob.pe/simposio/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Simposio INAIGEM - Las Montañas Nuestro Futuro 2022" />
    <meta property="og:description" content="Del 23 al 25 de noviembre de 2022 se celebrará en la ciudad de Arequipa  el Simposio Científico “Las Montañas, Nuestro Futuro 2022”, organizado por el Instituto Nacional de Investigación en Glaciares y Ecosistemas de Montaña (INAIGEM) y Forest Trends Association."
    />
    <meta property="og:image" content="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657587863/logos%20monfu%202022/logos_menu/Group_2_axi5p1.png" />

    <link rel="manifest" href="manifest.json" />
    <script src="views/js/app.js"></script>

</head>
<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>
<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>


<body data-fade-in="true" role="main">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <div id="preloader" class="preloader-container">
        <div class="animation">
            <div class="player">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zfvuugqg.json" background="transparent" style="width: 300px; height: 300px;" speed="0.5" autoplay></lottie-player>
            </div>
            <a id="skip"></a>
        </div>
    </div>
    <!-- partial -->
    <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script>
    <style>
        .preloader-container {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow-x: auto;
            overflow-y: scroll;
            position: fixed;
            z-index: 9000;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background-color: #fff;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            overflow: hidden;
            -webkit-transition: all 1s linear;
            -o-transition: all 1s linear;
            transition: all 1s linear;
        }
        
        .preloader-container .animation {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .preloader-container .animation #skip {
            color: #20495a;
            cursor: pointer;
            font-family: montserrat, sans-serif;
            font-size: 1.75em;
            position: absolute;
            margin: 0 auto;
            bottom: 20vh;
        }
        
        .hidden {
            display: none;
        }
        
        .visuallyhidden {
            opacity: 0;
        }
    </style>
    <script>
        let box = document.querySelector("#preloader"),
            btn = document.querySelector("#skip");

        function fadeOut() {
            box.classList.add("visuallyhidden");
            box.addEventListener(
                "transitionend",
                function(e) {
                    box.classList.add("hidden");
                }, {
                    capture: false,
                    once: true,
                    passive: false
                }
            );
        }
        btn.addEventListener("click", fadeOut, false);
        setTimeout(fadeOut, 4000);
    </script>



    <!--fin btn sociales-->
    <!-- Start Header -->
    <nav class="p-3 mb-5 shadow navbar nav-down m-ocult" id="hed" data-fullwidth="true" data-menu-style="transparent" data-animation="shrink">
        <!-- Styles: light, dark, transparent, transparent-to-dark | Animation: hiding, shrink -->
        <div class="container">
            <div class="navbar-header">
                <div class="container">

                    <a class="navbar-brand to-top" href="#"><img style="margin-top: 10px" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655722586/logos%20monfu%202022/2_logo_monta%C3%B1as_azul_1_mvrnno.png" class="logo-light" alt="#"><img style="margin-top: 10px" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655722859/logos%20monfu%202022/2_logo_monta%C3%B1as_azul_2_n1ot5f.png"
                            class="logo-dark" alt="#"></a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="container">

                    <ul class="nav navbar-nav menu-center">
                        <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li><a href="#evento" style="font-size: 15px;font-family: flama-ligth;">Evento</a></li>
                        <li><a href="#programa" style="font-size: 15px;font-family: flama-ligth;">Programa</a></li>
                        <li><a href="#ponentes" style="font-size: 15px;font-family: flama-ligth;">Ponentes</a></li>
                        <li><a href="#estadia" style="font-size: 15px;font-family: flama-ligth;">Estadia</a></li>
                        <li>
                            <a href="" style="font-size: 15px;font-family: flama-medium;"></a>
                        </li>
                        <li style=" position: absolute;top: 30px;right: 105px;">
                            <img style="width: 800%; margin-top: -40px;  background-size: 100% 100%;" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656612427/logos%20monfu%202022/logos_menu/Capa_2_dpzcjx.svg" class="logo-dark" alt="#">
                        </li>
                        <li>
                            <img class="logo-light" style="width: 35%;margin-top: -70px;right: -200px;  background-size: 100% 100%;" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656611810/logos%20monfu%202022/logos_menu/Inaigem_blanco_peque_shqth1.svg" alt="#">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- partial:index.partial.html -->
    <div class="viewports" style="position: fixed; z-index: 100;">
        <header class="headers" role="banners">
            <nav id="navs" class="navs" role="navigations">
                <!-- ACTUAL NAVIGATION MENU -->
                <ul class="nav__menus" style="margin-top: 50px;" id="menus" tabindex="-1" aria-label="main navigation" hidden>
                    <li class="nav__items"><a href="#evento" class="nav__links">Evento</a></li>
                    <li class="nav__items"><a href="#programa" class="nav__links">Programa</a></li>
                    <li class="nav__items"><a href="#ponentes" class="nav__links">Ponentes</a></li>
                    <li class="nav__items"><a href="#estadia" class="nav__links">Estadia</a></li>
                    <!--
                    <li class="nav__items">
                        <a href="#" class="nav__links" style="color:#0067C0 ;"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657585705/logos%20monfu%202022/cancel_ycj86g.png" width="50px" height="50px" alt=""> </a>
                    </li>-->
                </ul>
                <!-- MENU TOGGLE BUTTON -->
                <a href="#navs" class="nav__toggles" role="button" aria-expanded="false" aria-controls="menus">
                    <svg class="menuicons" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
            <title> </title>
            <g>
              <line
                class="menuicon__bars"
                x1="13"
                y1="16.5"
                x2="37"
                y2="16.5"
              />
              <line
                class="menuicon__bars"
                x1="13"
                y1="24.5"
                x2="37"
                y2="24.5"
              />
              <line
                class="menuicon__bars"
                x1="13"
                y1="24.5"
                x2="37"
                y2="24.5"
              />
              <line
                class="menuicon__bars"
                x1="13"
                y1="32.5"
                x2="37"
                y2="32.5"
              />
              <circle class="menuicon__circles" r="23" cx="25" cy="25" />
            </g>
          </svg>
                </a>

                <!-- ANIMATED BACKGROUND ELEMENT -->
                <div class="splashs"></div>
            </nav>
        </header>
    </div>

    <!-- End Header -->

    <!-- Hero -->
    <section id="hero" class="hero-fullscreen parallax div-inicio" data-overlay-dark="6" style="height:  800px ;">
        <div class="background-image">
            <img class="fondo-aleatorio kenburns-top" src="" alt="#" style=" background-size: cover;z-index: 3;object-fit: contain;;
            margin-left: auto;
            margin-right: auto;
            -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-size: 100% 100%;   
        width: 100%; 
        height: 100%;
        ">
        </div>
        <div class="container">
            <div class="row">
                <center>
                    <div class="hero-content">
                        <img class="img-evento" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png" alt="">
                        <div class="contadaor">
                            <h3 class="text-center dias" id="dias" style="margin-top: -60px;font-family: flama-regular;letter-spacing: 1px;"></h3>
                        </div>

                    </div>
                </center>

                <br><br>

                <div class="hero-content-slider mt22" data-autoplay="true" data-speed="99999999999999999" style="margin-top: 20px;text-shadow: black 0.1em 0.1em 0.2em">


                    <div>
                        <!--<h2><strong>Something You Love</strong></h2>
                        <!--<p class="lead">We are digital agency that loves crafting beautiful websites with great functionality.</p>-->
                        <a href="#costumModal30" role="button" data-toggle="modal" class="btn btn-lg btn-sidebar btn-scroll" style="border-radius: none;visibility: hidden;"></a>
                    </div>
                    <div>
                        <!--<h2><strong>Something You Love</strong></h2>
                        <!--<p class="lead">We do innovation, creativity, effectiveness and all that with love.</p>-->

                    </div>
                    <div>
                        <!--<h2><strong>Something You Love</strong></h2>
                        <!--<p class="lead">Wunderkind was honored as best agency at EdAwards in New York.</p>-->
                        <a href="#costumModal30" role="button" data-toggle="modal" class="btn btn-lg btn-sidebar btn-scroll" style="border-radius: none;visibility: hidden;"> </a>
                    </div>
                    <div>
                        <!--<h2><strong>Something You Love</strong></h2>
                        <!--<p class="lead">Let's meet up and see if there's chemistry!</p>-->
                        <a href="#costumModal30" role="button" data-toggle="modal" class="btn btn-lg btn-sidebar btn-scroll" style="border-radius: none;visibility: hidden;"> </a>
                    </div>
                    <div>
                        <!--<h2><strong>Something You Love</strong></h2>
                        <!--<p class="lead">Let's meet up and see if there's chemistry!</p>-->
                        <a href="#costumModal30" role="button" data-toggle="modal" class="btn btn-lg btn-sidebar btn-scroll" style="border-radius: none;visibility: hidden;"> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN SIDEBAR -->
    <!-- EVENTO -->
    <section id="evento" id="who-we-are" class="parallax pt100 pb90" style="
    background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658314/logos%20monfu%202022/svg/2_Monta%C3%B1a_1_vcwfdd.svg');
    background-repeat: inherit;
    background-size: cover;
    width: 100%;
    margin-top: -180px;
    z-index: 1;
    position: relative;
    height: 100%;
  ">
        <div class="container" style="background-color: transparent;">
            <div class="row s-evento" style="margin-top: 140px">
                <br><br>
                <div class="text-center col-md-2 pb20">

                </div>
                <div class="text-center col-md-6 pb20">
                    <h1 class="txt-bg-gradient" style="font-family: flama-bold;font-size: 58px;text-transform: uppercase;line-height: 55px;"><strong>Evento</strong></h1>
                </div>
                <div class="col-sm-12 feature-left">
                    <div class="col-sm-2 feature-left">
                    </div>
                    <div class="col-sm-8 feature-left event" style="overflow: scroll ;max-height: 350px;">
                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                            <strong class="toolTip">MONFU 2022
                                <span class="toolTipText">
                                    Las Montañas  Nuestro Futuro 2022
                                 </span>
                            </strong> tiene como objetivo trasferir conocimiento cientifico sobre los ecosistemas de montaña y los glaciares tropicales, en un contexto de cambio climático.
                        </p>
                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                            Además, identificar investigaciones científicas sobre la recuperación de los servicios ecosistematicos, y propuestas de acción ante el retroceso glaciar.
                        </p>
                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                            <div class="container-acordion">

                                <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                                    Algunas Preguntas Frecuentes de nuestros participantes:</p>
                                <div class="accordion">
                                    <h5>¿Qué tipo de ejes temáticos esperan recibir ? 🤔</h5>
                                    <i class="fas fa-minus"></i>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="panal">
                                    <p>
                                        <ol class="lead" style="text-align: justify;font-size: 15px">
                                            <li style="text-align: justify;font-size: 15px">1. Monitoreo de glaciares y lagunas de origen glaciar.</li>
                                            <li style="text-align: justify;font-size: 15px">2. Modelación de la dinámica de los glaciares.</li>
                                            <li style="text-align: justify;font-size: 15px">3. Prevención de desastres originados por glaciares y lagunas de origen glaciar.</li>
                                            <li style="text-align: justify;font-size: 15px"> 4. Los glaciares y el ciclo hidrológico.</li>
                                            <li style="text-align: justify;font-size: 15px">5. Monitoreo de ecosistemas de montaña .</li>

                                        </ol>
                                    </p>
                                </div>

                                <div class="accordion">
                                    <h5> ¿Cuáles son los requisitos para Resumen extendido ? 🤔</h5>
                                    <i class="fas fa-minus"></i>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="panal">
                                    <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">

                                        <ul class="lead" style="text-align: justify;font-size: 15px">
                                            <li>&check; Todos los documentos deben ser originales y no deben enviarse simultáneamente a otra revista o conferencia.</li>
                                            <li>&check; Se deberá tener 5000 palabras como máximo.</li>
                                            <li>&check; Los pósteres deben cumplir con el siguiente formato: orientación vertical/portrait o horizontal/landscape, con dimensiones apropiadas para la impresión en un formato A0 (1.19 m por 84.1 cm). Se sugiere
                                                componerlo en dos columnas. </li>
                                            <li>&check;Todas las figuras deben mantener claridad al tamaño ampliado.</li>
                                            <li>&check; Título (breve y específico) con un máximo de 15 palabras.</li>
                                            <li>&check; Autor(es): Se consignan los nombres y apellidos completos de todos los autores con su aprobación, y con el correo electrónico del autor principal.</li>
                                            <li>&check; Afiliación(es) institucional(es).</li>
                                            <li>&check; Resumen de 300 palabras.</li>
                                            <li>&check; Emplear el formato IMRaD (Introducción, Metodología, Resultados y Discusión).</li>
                                            <li>&check; Emplear cinco palabras claves.</li>
                                            <li>&check; Fotos y figuras en formato JPG (al menos 300 dpi).</li>
                                            <li>&check; Incluir las tablas en Excel.</li>
                                            <li>&check; Referencias en estilo APA.</li>
                                        </ul>
                                    </p>
                                </div>

                                <div class="accordion">
                                    <h5> ¿Tienen algún contacto electrónico? 🤔</h5>
                                    <i class="fas fa-minus"></i>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="panal">
                                    <p>
                                        <p class="lead" style="text-align: justify;line-height: 40px;font-size: clamp(1rem, 4vw, 2rem);">
                                            En caso de tener cualquier duda, por favor póngase en contacto con el Comité Académico, escribiendo al Dr. Daniel Martínez Castro. Correo electrónico: <a href="mailto:dmartinez@inaigem.gob.pe">dmartinez@inaigem.gob.pe</a></p>
                                    </p>
                                </div>
                            </div>
                        </p>
                        <br>
                    </div>
                    <div class="col-sm-2 feature-left">
                    </div>

                </div>
                <div class="col-sm-12">
                    <center>
                        <button onclick="window.location.href='https://calendar.google.com/event?action=TEMPLATE&tmeid=NGxkbnJmNGYzMTA2a3A1aGw2OXVibmFqZHQgZGlnY0BpbmFpZ2VtLmdvYi5wZQ&tmsrc=digc%40inaigem.gob.pe';" class="py-6 btn btn-lg btn-primary">SAVE THE DAY <i class="fa-solid fa-calendar"></i></button></center>
                </div>





                <!----
                <div class="col-sm-6 feature-left">
                    <section class="videoContainer">
                        <a id="play-video" class="video-play-button" href="#">
                            <span></span>
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </a>
                        <div id="video-overlay" class="video-overlay">
                            <a class="video-overlay-close">&times;</a>
                        </div>
                    </section>
                </div>--->
                <div class="col-sm-6 feature-left">

                </div>
                <div class="col-sm-6 feature-left">

                </div>
                <center>
                    <div id="elements-testimonials" class="text-center col-md-12 pb20">
                        <div class="col-sm-3 feature-left"></div>
                        <div class="col-sm-6 col-md-offset-3 feature-left">
                            <!-- Testimonial Two -->

                        </div>
                        <div class="col-sm-3 feature-left"></div>
                    </div>
                </center>
            </div>
        </div>

    </section>
    <!-- End About Us -->

    <!-- Who We Are --
    <br><br> <br><br><br><br>
    <section id="programa" id="who-we-are" class="parallax pt40 pb40" data-overlay-dark="0" style="
    background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658315/logos%20monfu%202022/svg/2_Monta%C3%B1a_2_mqzj3z.svg');
   
    background-repeat: inherit;
    background-size: cover;
    width: 100%;
    margin-top: -330px;

    z-index: 1;
    position: relative;
    height: 100%;
    background-color: none;
  
  ">
        <!--<div class="background-image">
            <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658315/logos%20monfu%202022/svg/2_Monta%C3%B1a_2_mqzj3z.svg" alt="#" style=" z-index: -1;
            position: relative">
        </div>--
        <div class="container" style="margin-top: 170px;">
            <div class="row vertical-align">
                <div class="text-center col-md-12">
                </div>
                <div class="col-md-6 pt40 pb30">
                    <h1 class="txt-bg-gradient2" style="color: #286AC9;text-transform: uppercase;  font-size: clamp(10px, 3vw, 40px);font-family:  flama-medium;"><strong>Programa</strong></h1> <br>

                </div><br/>
            </div>
            <div class="col-sm-1" style="background-color:#E0E0E0 ;">
            </div>
            <div class="col-sm-2" style="background-color:#E0E0E0 ;">
                <div id="list-example" id="list-example" class="list-group">
                    <a class="ml-auto list-group-item list-group-item-action" href="#list-item-1" style=" padding: 10px;
                                    text-decoration: none;
                                    color: white;
                                    font-weight: bold;
                                    display: inline-block;
                                    border-left: 30px solid transparent;
                                    border-bottom: 30px solid #D9D9D9; 
                                    height: 0px;
                                    line-height: 50px;
                                    background-color: transparent;
                                    
                                    ">23  Noviembre
                                    </a>

                    <a class="py-4 ml-auto list-group-item list-group-item-action" href="#list-item-2" style=" padding: 10px;
                                    text-decoration: none;
                                    color: white;
                                    font-weight: bold;
                                    display: inline-block;
                                     
                                    border-left: 30px solid transparent;
                                    border-bottom: 30px solid #D9D9D9; 
                                     
                                    height: 0;
                                    line-height: 50px;
                                    background-color: transparent;
                                    ">24 Noviembre
                                    </a>
                    <a class="py-4 ml-auto list-group-item list-group-item-action" href="#list-item-3" style=" padding: 10px;
                                    text-decoration: none;
                                    color: white;
                                    font-weight: bold;
                                    display: inline-block;
                                     
                                    border-left: 30px solid transparent;
                                    border-bottom: 30px solid #D9D9D9; 
                                     
                                    height: 0;
                                    line-height: 50px;
                                    background-color: transparent;
                                    ">25  Noviembre
                                    </a>
                </div>
            </div>

            <div class="col-sm-9 pe-0" style="background-color:#E0E0E0 ;">
                <div style="height:370px;width: 100%;" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0" style="background-color:#E0E0E0 ;">
                    <table class="table" style="margin: 0px;background-color:#E0E0E0 ;">
                        <thead>
                            <tr>
                                <th id="list-item-1" style="text-align: center;background-color:#E0E0E0 ;color: #575756;" colspan="3">23 de Noviembre</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:#E0E0E0 ;color: #575756">
                            <tr style="background-color:#E0E0E0 ;color: #575756">
                                <th>8:30 am - 9:00 am</th>
                                <td>Registro de Participantes</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                                <style>
                                    .btn-enlace {
                                        background-color: #fff;
                                        margin: 2px auto;
                                        width: 80%;
                                    }
                                </style>
                            </tr>
                            <tr>
                                <th scope="row">9:00 am - 10:00 am</th>
                                <td>Ceremonia de apertura</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:00 am - 10:15 am</th>
                                <td>Objetivos del SIMPOSIO " Las Montañas: Nuestro Futuro " y programacion</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:15 am - 10:45 am</th>
                                <td>Receso para el Cafe</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11:00 am - 12:00 pm</th>
                                <td>Conferencia 1 </td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2:00 pm - 3:00 pm</th>
                                <td>Conferencia 2</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3:00 pm - 4:00 pm</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5:00 pm - 6:00 pm</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h4 id="list-item-2"></h4>
                    <table class="table" style="margin: 0px;">
                        <thead>
                            <tr>
                                <th style="text-align: center;color:#575756" colspan="3">24 de Noviembre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10:00 am - 11:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:00 am - 11:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:00 am - 11:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="#" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 id="list-item-3"></h4>
                    <table class="table" style="margin: 0px;">
                        <thead>
                            <tr>
                                <th style="text-align: center; color: #575756;" colspan="3">25 de Noviembre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10:00 am - 11:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:00 am - 11:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10:00 am</th>
                                <td>Descriptio</td>
                                <td>
                                    <div class="btn-enlace"><a href="" style="background-color: #fff;margin: 2px;">Participa del Evento</a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div> <br><br>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
                <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            </div><br><br><br><br><br><br>
        </div>
        </div>
    </section>
    <br><br><br> <br><br><br> <br><br>
    <!-- End Who We Are -->

    <!-- Video Section ----

    <br><br><br><br>
    <section id="ponentes" class=" parallax pt40 pb40" data-overlay-light="0" style="background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658317/logos%20monfu%202022/svg/2_Fondo_azul_fceknd.svg');position: relative;z-index: 1; background-repeat: inherit;
    background-size: cover;
    width: 100%;
    margin-top: -200px;
    height: 150px;
    z-index: 1;
    position: relative;
    background-color: transparent;">
        <!---->

    <!----
        <div class="container" style="margin-top: -20px;">
            <div class="row vertical-align">
                <div class="col-md-4 pr30 mt40 mb40">
                    <h1 style="color: #fff;font-family:  flama-medium;text-transform: uppercase;"><strong>Ponentes</strong></h1><br><br><br><br>
                    <p class="texto-ponentes" style="color: #fff;">Conoce a nuestros expertos del MONFU 2022, puedes encontrar todas sus ponencias y presentaciones en vivo aquí, durante el evento.</p>
                    <br><br>
                </div>
                <div class="col-md-8 col-sm-12 mt50 mb50" style="color: #fff;">
                    <!-------<div class="video-container">
                        <img src="img/video/thumbnail-youtube.jpg" />
                        <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                    </div>
                    <section id="team" class="hero-fullscreen2 pt100 pb90" style="background-color: transparent;">
                        <div class="container ponentes">
                            <div class="row">
                                <div class="team-slider owl-carousel col-md-12">
                                    <div class="team">
                                        <div class="team-container">
                                            <div class="team-image" style="width: 100%;">
                                                <img src="views/img/team/1.jpg" class="img-responsive" alt="#" />
                                            </div>
                                            <div class="team-caption">
                                                <div>
                                                    <div>
                                                        <ul>
                                                            <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 style="color: #fff;">Founder / CEO</h6>
                                        <h5 style="color: #fff;">John Westbrook</h5>
                                        <p style="color: #fff;">Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                                    </div>
                                    <div class="team">
                                        <div class="team-container">
                                            <div class="team-image" style="width: 100%;">
                                                <img src="views/img/team/1.jpg" class="img-responsive" alt="#" />
                                            </div>
                                            <div class="team-caption">
                                                <div>
                                                    <div>
                                                        <ul>
                                                            <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 style="color: #fff;">Founder / CEO</h6>
                                        <h5 style="color: #fff;">John Westbrook</h5>
                                        <p style="color: #fff;">Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                                    </div>
                                    <div class="team">
                                        <div class="team-container">
                                            <div class="team-image" style="width: 100%;">
                                                <img src="views/img/team/1.jpg" class="img-responsive" alt="#" />
                                            </div>
                                            <div class="team-caption">
                                                <div>
                                                    <div>
                                                        <ul>
                                                            <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                            <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 style="color: #fff;">Founder / CEO</h6>
                                        <h5 style="color: #fff;">John Westbrook</h5>
                                        <p style="color: #fff;">Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                                    </div>

                                    <div class="team" style="background-color:none;text-align: center; pointer-events: none;">
                                        <div class="team-container">
                                            <div class="team-image" style="width: 100%;">
                                                <button class="boton-inaigem" style="margin-top: 100px;left: 20px;">Más Información  <i class="ion-arrow-right-c"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
---




    </section>

    <section id="team" class="hero-fullscreen2 pt100 pb90" style="background-color: transparent;">
        <div class="background-image2">
            <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655918506/logos%20monfu%202022/svg/wave_njemgq.png" alt="">
        </div>
    </section>
    <!-- MONTAÑA -->
    <section id="hero" class="hero-fullscreen parallax" style="margin-top: -300px;background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1657583516/logos%20monfu%202022/svg/iMac_-_2_ymvhfe.svg')  ; position: relative;z-index: -999;opacity: 100%;">

        <div class="background-image montaña-falsa">
            <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658316/logos%20monfu%202022/svg/2_monta%C3%B1aazul_rfubtr.svg" alt="" style="  object-fit: contain;
        margin-left: auto;
        margin-right: auto;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-size: 100% 100%;

        z-index: -990;
        position: relative;
        margin-top: -1111111111;
        margin-left: -800px;
        height: 300px;
        width: 500px;">
        </div>

    </section>
    <!-- End Hero -->
    <!-- Services -->
    <section id="estadia" class="pt100 pb90" style="
    background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1655658316/logos%20monfu%202022/svg/2_Castillo_fwhmjr.svg');
   
    background-repeat: inherit;
    background-size: cover;
    width: 100%;
    margin-top: -300px;

    z-index: 1;
    position: relative;
    height: 100%;
    background-color: transparent;
    
  
  ">
        <br><br>
        <div class="background-image">

        </div>


        <div class="container" style="margin-top: 190px">
            <div class="row skl-estadia">
                <br>
                <div class="text-center col-md-6 pb20">
                </div>
                <div class="text-center col-md-6 pb20">
                    <h1 class="txt-bg-gradient2" style="font-family: flama-medium; text-transform: uppercase; font-size: 40px;letter-spacing: 2px;"><br>Estadía</h1>
                    <!--<p class="lead">Entérate sobre la estadía del<span class="color" style="color: #0067C0;"> MONFU 2022.</span></p>-->
                </div>
                <div class="p-2 mx-auto mb-4 shadow-lg col-sm-12 card">

                    <div class="row no-gutters">
                        <div class="col-sm-8" style=" 
                        clip-path: polygon(0 0, 100% 0%, 86% 100%, 0 100%);height: 350px; overflow: hidden;">
                            <img class="arequipa-ciudad" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655309822/logos%20monfu%202022/5_fffwgk.jpg" style=" background-size: cover; 
                            object-fit: cover;
                        
                             background-position-y:top ;
                            background-size:100% 100%;  background-position: center;
                            background-repeat: no-repeat;height: auto;-webkit-background-size: cover;
                            -moz-background-size: cover;
                            transition: 0.5s;
                            -o-background-size: cover;" alt="">
                            <style>
                                .arequipa-ciudad {
                                    transition: 0.5s;
                                }
                                
                                img .arequipa-ciudad:hover {
                                    transform: scale(1.2);
                                }
                            </style>
                        </div>
                        <div class="col-sm-4 text-estadia">
                            <div class="text-center card-body" style="text-align: right">
                                <h3 class="py-4 lead " style="font-size: clamp(18px, 3vw, 22px);line-height: 32px;   /* within paragraph */
                                margin-bottom: 30px; /* between paragraphs */;color: #646363;font-family: flama-ligth;letter-spacing: 0.5px;">
                                    <strong style="color: #575756;font-family: flama-medium;">Arequipa</strong>, ubicada al sur del Perú, conocida como la "Ciudad Blanca". <br> Ciudad que cautiva y que siempre recibe a sus visitantes con impresionantes
                                    edificaciones, cocina regional y atractivos turísticos.
                                    <br> </h3>
                                <p class="card-text"><small class="text-muted"><hr></small></p>
                                <a class="py-6 btn btn-lg btn-primary " style="background-color: #0067C0;margin-top: 10px;float: right; opacity: 56%; ">Conoce Más <i class="fa-solid fa-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <section id="organizacion" id="who-we-are" class="pt100 pb90" style="   background-repeat: inherit;
    background-size: cover;
    width: 100%;
    z-index: 1;
    position: relative;
    height: 100%;
    background-color: #fff;
    margin-top: -36px;">
        <div class="container" style="background-color: transparent;">
            <div class="row">
                <div class="text-center col-md-12 pb30 ">
                    <div class="text-center col-md-10 pb30 ">
                        <h1 class="feature-left" style="color: #0067C0;"><br> Organización</h1>
                        <p class="feature-left text-organizacion" style="font-size: 27px;font-family: flama-ligth; color: #646363;">Nuestros organizadores y entidades asociadas están presentes para el <strong style="color: #575756;">MONFU 2022</strong>.</p>
                    </div>
                    <div class="text-center col-md-2 pb30 ">
                    </div>
                    <br> <br>
                    <div class="col-sm-12 mark-2" style="display: flex;   margin: auto;
                    overflow: hidden;
                    position: relative;">
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://www.gob.pe/minam" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655934969/logos%20monfu%202022/logo-minam_pnceys_1_ci4ahn.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://inaigem.gob.pe/web2/institucion/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655934557/logos%20monfu%202022/Inaigem_trdv3h.png" alt="" width="80%" /></a>

                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://www.usaid.gov/es/peru" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656617193/logos%20monfu%202022/logos_menu/USAID_lkflsz.svg" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="#" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656617196/logos%20monfu%202022/logos_menu/Canada_tvh6g6.svg" alt="" width="80%" /></a>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-12 mark-1" style="display: flex;   margin: auto;
                    overflow: hidden;
                    position: relative;">

                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://www.forest-trends.org/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655933260/logos%20monfu%202022/forest-trends_crpbcw.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://condesan.org/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655933604/logos%20monfu%202022/condesan-logo_bytgh0.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://spda.org.pe/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655933261/logos%20monfu%202022/spda-logo_j09a95.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://ecodecision.com.ec/language/es/inicio/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655933531/logos%20monfu%202022/eco-decision-logo_ulx4k9.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                        <div class="col-sm-3 feature-left marvca">
                            <div class="feature-left-content">
                                <a href="https://www.imperial.ac.uk/" target="_blank"> <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655933755/logos%20monfu%202022/imperial-logo_epdlhu.png" alt="" width="80%" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--
    <svg class="wavesx" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallaxst">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,103,192,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,103,192,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0,103,192,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#0067c0" />
        </g>
        </svg>-->

    <footer class="col-sm-12" style=" width: 100%;
     left: 0; bottom: 0;
    z-index: -100; background: #0067c0;font-family: flama;color: #fff;">
        <!--
        <link rel="stylesheet" href="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657577191/code/footer/animt-bubble-foot_mkpgmk.css">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        -->
        <div class="col-sm-12 fadeInLeft" data-wow-delay=".2s ">
        </div>
        <br>
        <div class="col-sm-12">

            <div class="col-sm-6">
                <div class="col-sm-12">
                    <img class="logo-montañas" src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1655187006/logos%20monfu%202022/logo-arequipa_rwruyo.png" style="  text-indent: -9999px;
                    display: block;
                    max-width: 60%;
                    max-height: 60%;
                    top: 0%;
                    background-size: 100% 100%;
                    margin-right: auto;
                    margin-left: auto;" alt="">
                    <br>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <p class="footer-links" style="position: relative;color: #fff;">
                            Jr. Juan Bautista Mejía 887 Huaraz,<br/> Áncash, Perú (043) 221766 – (043) 456234
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="footer-links" style="position: relative;color: #fff;">
                            Av. Prolongación Túpac Amaru A-2 <br/>Wanchaq 08002, Cusco (084) 200259
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="footer-links" style="position: relative;color: #fff;">
                            Jr. Nicolás de Piérola 399, Urb. Liguria <br/>Santiago de Surco, Lima, Perú (01) 3017443
                        </p>
                    </div>
                </div>

            </div>

            <div class="footer-rigth" style="position: relative;background-image: url('https://res.cloudinary.com/dicmh7cfa/image/upload/v1655727512/logos%20monfu%202022/2_cerro_lineas_1_dixkj5.png');
            background-size: cover;z-index: 6;object-fit: contain;;
            margin-left: auto;
            margin-right: auto;
            -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-size: 100% 100%;   
        width: 100%; 
          ">
                <div class="col-sm-4">
                    <form id="forms">
                        <label>Correo</label>
                        <input type="text" id="Correo" name="Correo" required placeholder="Escribe tu Email" />
                        <label>Mensaje</label>
                        <textarea id="Mensaje" name="Mensaje" required placeholder="Escribe tu Consulta"></textarea>
                        <button id="submits" type="submit" type="submit" class="btn-block boton-inaigem2" style="border-radius: 4px;">Enviar <i class="fa-solid fa-message-arrow-up"></i></button>

                    </form>

                    <br><br> <br><br>
                </div>


            </div>

        </div>
    </footer>


    <div class="text-center col-sm-12">
        <img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1656444923/logos%20monfu%202022/lg_black_gpwdnw.png" alt="" class="mx-auto img-fluid d-block" width="50px">
        <p class="led" style="color: #575756;font-size: 9px;">Diseñado y programado por DIGC INAIGEM - 2022</p>
    </div>




    <!-- partial:index.partial.html --
    <div class="container text-center">
        <div class="costumModal">
            <h2 class="title">
                30+ Bootstrap Modal Animation Effects
            </h2>
        -->
    <div id="costumModal30" class="modal" data-easein="bounce" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                    <h4 class="modal-title" style="font-size: 18px; color: #0067C0;">
                        Formulario de Inscripción MONFU 2022
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="requires-validation" id="form">
                        <div class="col-md-12">
                            <div id="list_container">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="valid-feedback">Nombres</div>
                            <input id="Nombre" class="form-control" type="text" name="Nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="col-md-12">
                            <div class="valid-feedback">Apellidos</div>
                            <input class="form-control" type="text" id="Apellido" name="Apellido" placeholder="Ingresa tus Apellidos" required>
                        </div>
                        <div class="col-md-12">
                            <div class="valid-feedback">Correo</div>
                            <input class="form-control" id="Correo" type="email" name="Correo" placeholder="Ingresa tu Correo" required>
                        </div>
                        <div class="col-md-12">

                            <select id="TipoDocumento" name="TipoDocumento" class="mt-3 form-select" required>
                                  <option selected disabled value="">Tipo de Documento</option>
                                  <option value="DNI">DNI</option>
                                  <option value="Pasaporte">Pasaporte</option>
                           </select>
                        </div>
                        <div class="col-md-12">
                            <div class="valid-feedback">Número del documento de identidad
                            </div>
                            <input class="form-control" type="text" id="ndocumento" name="ndocumento" placeholder="Número .." required>
                        </div>

                        <div class="col-md-12">
                            <div class="valid-feedback">Institución/Organización</div>
                            <input class="form-control" type="text" id="organizacion" name="organizacion" placeholder="Institución/Organización" required>
                        </div>
                        <div class="col-md-12">
                            <div class="valid-feedback"> Ocupación/Profesión</div>
                            <input class="form-control" type="text" id="ocupacion" name="ocupacion" placeholder="Ocupación/Profesión" required>
                        </div>
                        <div class="col-md-12">

                            <input class="form-control" type="radio" id="carta" name="carta" value="si" required> Deseas Carta de Invitación
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                        Cancelar
                                    </button>
                            <button id="submit" type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
    <script>
        function limpiarFormularioregistro() {
            document.getElementById("form").reset();
        }
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbzkV-x3KGJosbryUvT60cWDcL_2W8_Y91Qspq51BU5jkiVRSaMW0UiWJIs50H--4iX3MA/exec";
        const form = document.querySelector("#form");
        const btnx = document.querySelector("#submit");

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            btnx.disabled = true;
            btnx.innerHTML = "Loading...";

            console.log(form);
            fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form)
                })
                .then((response) => {
                    btnx.disabled = false;
                    btnx.innerHTML = "Submit";
                    alertify
                        .alert('Registro Monfu 2022', 'Refistro Satisfactorio!', function() {
                            alertify.success('Registro Completado');
                        });
                    limpiarFormularioregistro();
                })
                .catch((error) => {
                    btnx.disabled = false;
                    btnx.innerHTML = "Submit";
                    alert("Error!", error.message);
                });
        });
    </script>

    <span><a class="scroll-top" id="scroll-top"><img src="https://res.cloudinary.com/dicmh7cfa/image/upload/v1657641542/logos%20monfu%202022/punta-de-flecha-hacia-arriba_ygxwn2.png" alt=""></a></span>
    <script src="views/js/jquery.js"></script>
    <script src="views/js/init.js"></script>
    <script src="views/js/scripts.js"></script>
    <script src="views/js/server.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657648992/code/plugin-facebook/script-2-inaigem_avtmfg.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657648966/code/plugin-facebook/script-1-inaigem_vquk74.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657648838/code/modal/modal-inaigem_r3pbsy.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657648751/code/preloar-maycol-mendoza/preload-maycol-mendoza_iy1oun.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657648483/code/menu/mn-mvil_cuwefl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657649202/code/contador/count-maycol-mendoza_cqpuhu.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657652988/code/acordion/acordion-inaigem_ecr2uq.js"></script>
    <script src="https://res.cloudinary.com/dicmh7cfa/raw/upload/v1657653127/code/support%20message/support-message-inaigem_nsqjlt.js"></script>
</body>

</html>

</html>
