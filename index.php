<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Joyeria Mi Princesa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/pace2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php include 'include/navbarInicial.php'; ?>
    <!-- contenido principal -->
    <div class="row justify-content-center backgroundSlider">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Slider_Web_Mi_Princesa_001.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <div class="container mt-5 justify-content-center">
        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card shadow-lg bg-white mt-2 mb-2 rounded-5">
                    <div class="row text-center mt-2">
                        <img src="img/logo_miprincesa.png" alt="Logotipo joyeria mi princesa" class="img-fluid">
                    </div>
                    <div class="row">
                        <h3 class="TituloMiPrincesa text-center">Quienes Somos</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <span class="text-muted textJustificado">Somos una tienda online dedicada a ofrecer piezas únicas y exclusivas de joyería diseñadas para
                            resaltar la belleza y elegancia de cada mujer. Con una amplia variedad de collares, pulseras, anillos 
                            y pendientes, cada joya está pensada para ser un reflejo de amor, estilo y distinción.</span>
                        </div>
                        <div class="row mt-2">
                            <div class="col"></div>
                            <div class="col text-end py-4">
                                <a href="somos" class="custom-link">
                                <svg class="bi textPurple" width="35" height="35" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle"/>
                                </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card shadow-lg bg-white mt-2 mb-2 rounded-5">
                    <div class="row mt-5 py-2">
                        <h3 class="TituloMiPrincesa text-center">Nuestras Politicas</h3>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center py-1">
                            <span class="textJustificado text-muted">En <span class="textPurple">Joyería Mi Princesa,</span> trabajamos con pasión para ofrecerte piezas únicas y de la más alta calidad, hechas con manos 
                            artesanas mexicanas. Queremos que tu experiencia sea tan especial como nuestras joyas, por eso nuestras políticas están diseñadas 
                            pensando en ti. Desde nuestras opciones de entrega hasta los procesos de cambio, estamos aquí para resolver cualquier duda y asegurarnos 
                            de que te sientas completamente satisfecho con tu compra. Porque para nosotros, lo más importante es que te lleves algo más que una joya: 
                            un recuerdo que brille para siempre.</span>
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <span class="fs-6 text-muted">Politicas de venta</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle"/>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                        <span class="fs-6 text-muted">Politica de entrega</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle"/>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <span class="fs-6 text-muted">Politica de cambios de productos</span>
                                        </div>
                                        <div class="col text-end">
                                            <svg class="bi textPurple" width="20" height="20" fill="currentColor">
                                                <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-right-circle"/>
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
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#plus-circle"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-3">
            <h2 class="text-center TituloMiPrincesa">Nuestros servicios</h2>
        </div>
        <div class="row mt-3 mb-5 justify-content-center">
                <div class="col-sm-12 col-nd-12 col-lg-12">
                    <div class="card shadow-lg bg-white mt-2 mb-2 rounded-5">
                        <div class="row mt-1"></div>
                        <div class="row mt-1 text-center">
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#headset"/>
                                </svg>
                                <div class="row justify-content-center mt-1">
                                    <span class="subtitulos">Soporte Tecnico</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#cup-hot-fill"/>
                                </svg>
                                <div class="row justify-content-center mt-1">
                                    <span class="subtitulos">Atencion Personalizada</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#credit-card-2-back-fill"/>
                                </svg>
                                <div class="row justify-content-center mt-1">
                                    <span class="subtitulos">Pago con tarjeta y transferencia</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#gift-fill"/>
                                </svg>
                                <div class="row justify-content-center mt-1">
                                    <span class="subtitulos">Regalos y detalles</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#signpost-2-fill"/>
                                </svg>
                                <div class="row justify-content-center mt-1">
                                    <span class="subtitulos">Puntos de entrega</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-2 py-4">
                                <svg class="bi textPurple" width="50" height="50" fill="currentColor">
                                    <use xlink:href="library/bicons/bootstrap-icons.svg#truck"/>
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
    <!-- boton hacia arriba -->
    <a class="ir-arriba"  javascript:void(0) title="Volver arriba">
        <svg class="bi textPurple" width="50" height="50" fill="currentColor">
            <use xlink:href="library/bicons/bootstrap-icons.svg#arrow-up"/>
        </svg>
    </a>
    <!-- termina boton arriba  -->
    <!-- carrusel de productos  -->
     
    <!-- Termina carrusel de productos -->  
    <!-- inicia el footer -->
    <section class="footer"></section>
    <!-- termina footer -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>