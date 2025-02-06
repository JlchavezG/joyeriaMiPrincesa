<?php 
    include "app/conection.php";
    include "app/querys.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Joyeria Mi Princesa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/pace2.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="icon" type="image/png" href="img/Logo_Navbar_Mi_Princesa.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <?php include 'include/navbarInicial.php'; ?>
    <!-- contenido principal -->
    <div class="row justify-content-center backgroundSlider">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators btnSliderBar">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Slider_Web_Mi_Princesa_001.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="subtitulos">Anillos y pulseras</h5>
                        <p class="textPurple">Encuentra tu próxima joya especial con nosotros..</p>
                    </div>
                </div>
                <div class="carousel-item bg-white">
                    <img src="img/Slider_Web_Mi_Princesa_002.png" class="d-block w-100" alt="Saca la princesa que llevas dendro. JoyeriaMiPrincesa">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="subtitulos">¿Buscas un regalo inolvidable?</h5>
                        <p class="textPurple">Descubre nuestros dijes y aretes hechos con amor y dedicación artesanal.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Slider_Web_Mi_Princesa_003.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="subtitulos">Haz de cada detalle algo único</h5>
                        <p class="textPurple">Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Slider_Web_Mi_Princesa_004.png" class="d-block w-100" alt="Todas las piezas de joyeriamiprincesa son parte de tu vida.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="subtitulos">Second slide label</h5>
                        <p class="textPurple">Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Slider_Web_Mi_Princesa_005.png" class="d-block w-100" alt="Un regalo que dura para toda la vida JoyeriaMiPrincesa.">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="subtitulos">Third slide label</h5>
                        <p class="textPurple">Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon BtnSlider" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon BtnSlider" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container mt-5 justify-content-center">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-right">
                <div class="card shadow-lg bg-white mt-2 mb-2 rounded-4">
                    <div class="row text-center mt-2">
                        <img src="img/logo_miprincesa.png" alt="Logotipo joyeria mi princesa" class="img-fluid">
                    </div>
                    <div class="row" id="Nosotros">
                        <h3 class="TituloMiPrincesa text-center">Quienes Somos</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <span class="textJustificado">Somos una tienda online dedicada a ofrecer piezas
                                únicas y exclusivas de joyería diseñadas para
                                resaltar la belleza y elegancia de cada mujer. Con una amplia variedad de collares,
                                pulseras, anillos
                                y pendientes, cada joya está pensada para ser un reflejo de amor, estilo y
                                distinción.</span>
                        </div>
                        <div class="row mt-2">
                            <div class="col"></div>
                            <div class="col text-end py-4">
                                <a href="somos" class="custom-link">
                                    <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                        <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-left">
                <div class="card shadow-lg bg-white mt-2 mb-2 rounded-4">
                    <div class="row mt-5 py-2">
                        <h3 class="TituloMiPrincesa text-center">Nuestras Politicas</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center py-1">
                            <span class="textJustificado">En <span class="textPurple">Joyería Mi
                                    Princesa,</span> trabajamos con pasión para ofrecerte piezas únicas y de la más alta
                                calidad, hechas con manos
                                artesanas mexicanas. Queremos que tu experiencia sea tan especial como nuestras joyas,
                                por eso nuestras políticas están diseñadas
                                pensando en ti. Desde nuestras opciones de entrega hasta los procesos de cambio, estamos
                                aquí para resolver cualquier duda y asegurarnos
                                de que te sientas completamente satisfecho con tu compra. Porque para nosotros, lo más
                                importante es que te lleves algo más que una joya:
                                un recuerdo que brille para siempre.</span>
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item bg-white">
                                    <div class="row">
                                        <div class="col">
                                            <span class="fs-6">Politicas de venta</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use
                                                    xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item bg-white">
                                    <div class="row">
                                        <div class="col">
                                            <span class="fs-6">Politica de entrega</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use
                                                    xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item bg-white">
                                    <div class="row">
                                        <div class="col">
                                            <span class="fs-6">Politica de cambios de productos</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use
                                                    xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row mt-4">
                            <div class="col"></div>
                            <div class="col text-end py-4">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-3" id="Servicios" data-aos="fade-up">
            <h2 class="text-center TituloMiPrincesa">Nuestros servicios</h2>
        </div>
        <div class="row mt-3 mb-5 justify-content-center">
            <div class="col-sm-12 col-nd-12 col-lg-12" data-aos="fade-up">
                <div class="card shadow-lg bg-white mt-2 mb-2 rounded-3">
                    <div class="row mt-1"></div>
                    <div class="row mt-1 text-center">
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#headset" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Soporte Tecnico</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#cup-hot-fill" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Atencion Personalizada</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#credit-card-2-back-fill" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Pago con tarjeta y transferencia</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#gift-fill" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Regalos y detalles</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#signpost-2-fill" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Puntos de entrega</span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                            <svg class="bi textPurple golden-hover" width="50" height="50" fill="currentColor">
                                <use xlink:href="library/bicons/bootstrap-icons.svg#truck" />
                            </svg>
                            <div class="row justify-content-center mt-1">
                                <span class="subtitulos">Entrega a domicilio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Boton Compartir en redes sociales  -->
    <div class="container mt-2">
        <div class="row mt-3 mb-3 py5">
            <div class="col sm-6 col-md-6 col-lg-6 mt-2 text-end" data-aos="fade-right">
                <span class="subtitulos1">Comparte con tus amigos</span>
            </div>
            <div class="col sm-6 col-md-6 col-lg-6 mt-3 text-end" data-aos="fade-left">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.joyeriamiprincesa.com"
                    target="_blanck" class="text-decoration-none">
                    <svg class="bi textPurple golden-hover" width="25" height="25" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#facebook" />
                    </svg>
                </a>
                &nbsp;&nbsp;
                <svg class="bi textPurple golden-hover" width="25" height="25" fill="currentColor">
                    <use xlink:href="library/bicons/bootstrap-icons.svg#instagram" />
                </svg>
                &nbsp;&nbsp;
                <a href="https://m.me/joyeriamiprincesa" class="text-decoration-none" target="_blanck">
                <svg class="bi textPurple golden-hover" width="25" height="25" fill="currentColor">
                    <use xlink:href="library/bicons/bootstrap-icons.svg#messenger" />
                </svg>
                </a>
                &nbsp;&nbsp;
                <a href="https://wa.me/?text=Visita%20este%20sitio%20web%20incre%C3%ADble:%20https://www.tuweb.com"
                    target="_blanck" class="text-decoration-none">
                    <svg class="bi textPurple golden-hover" width="25" height="25" fill="currentColor">
                        <use xlink:href="library/bicons/bootstrap-icons.svg#whatsapp" />
                    </svg>
                </a>
                &nbsp;&nbsp;
            </div>
        </div>
    </div>
    <!-- carrusel de productos  -->
    <div class="container my-5 mb-4 mt-4">
        <h2 class="text-center mb-4 TituloMiPrincesa" data-aos="fade-up">Descubre nuestras Categorías</h2>
        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" data-aos="zoom-in">
                <div class="carousel-item active">
                    <div class="row g-3">
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 1 -->
                            <div class="card category-card bg-white">
                                <img src="img/anillos_plata.jpg"
                                    class="card-img-top category-image" alt="Anillos">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Anillos</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 2 -->
                            <div class="card category-card bg-white">
                                <img src="img/pulsera.jpg"
                                    class="card-img-top category-image" alt="Pulseras">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Pulseras</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 3 -->
                            <div class="card category-card bg-white">
                                <img src="img/aretes.jpg"
                                    class="card-img-top category-image" alt="Aretes">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Aretes</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-3">
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 4 -->
                            <div class="card category-card bg-white">
                                <img src="img/cadena.jpg"
                                    class="card-img-top category-image" alt="Cadenas">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Cadenas</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 5 -->
                            <div class="card category-card bg-white">
                                <img src="img/regalos_princesa.jpg"
                                    class="card-img-top category-image" alt="Regalos">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Regalos</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <!-- Card 5 -->
                            <div class="card category-card bg-white">
                                <img src="img/dijes.jpg"
                                    class="card-img-top category-image" alt="Regalos">
                                <div class="card-body text-center">
                                    <div class="row mt-1 mb-1">
                                        <div class="col">
                                            <p class="category-title">Dijes</p>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="25" height="25" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon BtnSlider" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon BtnSlider" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Termina carrusel de productos -->
    <!-- boton de WhatsApp -->
    <a href="https://wa.me/+525535776949" class="whatsapp-float" target="_blank">
        <svg class="bi text-white" width="25" height="25" fill="currentColor">
            <use xlink:href="library/bicons/bootstrap-icons.svg#whatsapp" />
        </svg>
    </a>
    <!-- termina boton de Whatsapp -->
    <div class="container mt-5 mb-3 justify-content-center" data-aos="zoom-out-up">
        <div class="card shadow-lg rounded-3 bg-white">
            <div class="row mt-2 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="img/paqueteria_miprincesa.jpeg" alt="paqueteria mi princesa" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <span class="subtitulos1">Servicio de Entregas</span>
                    <div class="container">
                        <div class="row mt-2">
                            <p class="text-muted textJustificado"><span class="textPurple">En Joyería Mi Princesa</span> nos preocupamos por tu comodidad, por eso ofrecemos un servicio de entrega rápido y seguro. 
                            Realizamos entregas a domicilio en Naucalpan y zonas cercanas, asegurándonos de que tus piezas lleguen en perfecto estado 
                            y listas para brillar.</p>
                            <p class="text-muted textJustificado">Disfruta de nuestra atención personalizada y la garantía de recibir tus joyas artesanales directamente en tu hogar. 
                            Para más información, contáctanos a través de Messenger o WhatsApp. ¡Estamos aquí para ti!</p> 
                        </div>
                        <div class="row mt-3 text-end">
                            <div class="col text-end">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-3 justify-content-center" data-aos="zoom-out-up">
        <div class="card shadow-lg rounded-3 bg-white">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="img/modeloprincesa.png" alt="brilla con tu propio estilo" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <div class="row mt-3 mb-1">
                        <span class="subtitulos1">Brilla con tu propio estilo</span>
                    </div>
                    <div class="container">
                        <div class="row mt-2">
                            <p class="text-muted textJustificado"><span class="textPurple">En Joyería Mi Princesa</span> Descubre la magia de nuestras joyas 100% artesanales, 
                            creadas con dedicación por manos mexicanas. Cada pieza es única, con diseños exclusivos que reflejan tradición y elegancia. Lleva contigo un detalle especial, 
                            hecho con pasión y autenticidad. <span class="textPurple">¡La belleza de lo hecho a mano, ahora al alcance de tus manos!</span>
                        </div>
                        <div class="row mt-3 mb-1">
                            <div class="col">
                                <svg class="bi textPurple purple-hover" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#gem" />
                                </svg>
                            </div>
                            <div class="col">
                                <svg class="bi textPurple purple-hover" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#hammer" />
                                </svg>
                            </div>
                            <div class="col">
                                <svg class="bi textPurple purple-hover" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#hearts" />
                                </svg>
                            </div>
                            <div class="col">
                                <svg class="bi textPurple purple-hover" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#palette2" />
                                </svg>
                            </div>
                        </div>
                        <div class="row mt-5 text-end">
                            <div class="col text-end">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inicia registro a newslatter de joyeria mi princesa -->
    <div class="container mt-5 mb-5" data-aos="fade-up">
        <div class="row justify-content-center mt-3 mb-3">
            <h3 class="subtitulos1 text-center">Newslatter</h3>
            <p class="text-muted textJustificado">Bienvenido al mundo de la elegancia artesanal! Nuestro newsletter es el espacio perfecto para descubrir las últimas colecciones de piezas 
            únicas en plata 925 y oro, diseñadas con amor por artesanos mexicanos. Aquí encontrarás ofertas exclusivas, consejos sobre el cuidado de tus 
            joyas y detalles de los eventos en los que participamos, como el pasado Bazar Navideño en Naucalpan.</p>
            <p class="text-muted text-center">Suscríbete y mantente conectado con la belleza y calidad que solo Joyería Mi Princesa puede ofrecer. 💎✨</p>
            <div class="col-sm-1o col-md-10 col-lg-5 justify-content-center">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <input type="email" placeholder="tu correo electronico" class="form-control bg-white" required>
                    <input type="submit" class="btn btn-sm btnNews" value="Registrate">
                </form>
            </div>
        </div>
    </div>
    <!-- termina newslatter -->
    <!-- inicia banner de regalos -->
    <div class="container mt-5 mb-3 justify-content-center" data-aos="zoom-out-up">
        <div class="card shadow-lg rounded-3 bg-white">
            <div class="row mt-2 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="img/Regalos001.png" alt="encuentra tu regalo en joyeria mi princesa" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <span class="subtitulos1">Detalles que duran para siempre</span>
                    <div class="container">
                        <div class="row mt-2">
                            <p class="text-muted textJustificado"><span class="textPurple">En Joyería Mi Princesa</span> nos preocupamos por tu comodidad, por eso ofrecemos un servicio de entrega rápido y seguro. 
                            Realizamos entregas a domicilio en Naucalpan y zonas cercanas, asegurándonos de que tus piezas lleguen en perfecto estado 
                            y listas para brillar.</p>
                            <p class="text-muted textJustificado">Disfruta de nuestra atención personalizada y la garantía de recibir tus joyas artesanales directamente en tu hogar. 
                            Para más información, contáctanos a través de Messenger o WhatsApp. ¡Estamos aquí para ti!</p> 
                        </div>
                        <div class="row mt-3 text-end">
                            <div class="col text-end">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina banner -->
    <!-- inicia banner de cotiza tu entrega -->
    <div class="container mt-5 mb-3 justify-content-center" data-aos="zoom-out-up">
        <div class="card shadow-lg rounded-3 bg-white">
            <div class="row mt-2 mb-2">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="img/paqueteria_miprincesa.jpeg" alt="paqueteria mi princesa" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                    <span class="subtitulos1">Detalles que duran para siempre</span>
                    <div class="container">
                        <div class="row mt-2">
                            <p class="text-muted textJustificado"><span class="textPurple">En Joyería Mi Princesa</span> nos preocupamos por tu comodidad, por eso ofrecemos un servicio de entrega rápido y seguro. 
                            Realizamos entregas a domicilio en Naucalpan y zonas cercanas, asegurándonos de que tus piezas lleguen en perfecto estado 
                            y listas para brillar.</p>
                            <p class="text-muted textJustificado">Disfruta de nuestra atención personalizada y la garantía de recibir tus joyas artesanales directamente en tu hogar. 
                            Para más información, contáctanos a través de Messenger o WhatsApp. ¡Estamos aquí para ti!</p> 
                        </div>
                        <div class="row mt-3 text-end">
                            <div class="col text-end">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- termina banner de entrega -->
    
    <!-- inician ventanas modales -->
    <!-- terminan ventanas modales -->
    <!-- inicia el footer -->
    <section class="footer">
        <div class="container mt-2 mb-2">
            <div class="row mt-3 mb-2 justify-content-center">
                <span class="textfooter">Derechos reservador JoyeriaMiPrincesa@2025</span>
            </div>
            <div class="row mt-2 mb-2 textfooterJustificado">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <span>Telefono: 55 35 77 69 49</span>
                    </div>
                    <div class="row">
                        <span>Email: contacto@joyeriamiprincesa.com</span>
                    </div>
                    <div class="row">
                        <span>Ubicación: Naucalpan de juarez Edo de México</span>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">2</div>
                <div class="col-sm-4 col-md-4 col-lg-4">3</div>
            </div>
        </div>
    </section>
    <!-- termina footer -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dark-mode.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>