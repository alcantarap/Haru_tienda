<?php include_once 'Views/template-principal/header.php'; ?>

    <!-- Start Banner -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <!-- Primer banner - tienda  -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL . 'assets/images/tienda.png'; ?>" alt="Tienda Haru Store">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                            <a href="<?php echo BASE_URL .'principal/tienda'; ?>"><img src="<?php echo BASE_URL . 'assets/images/petshop.png'; ?>" alt="tienda" /></a> <br>
                                <h3 class="h2">Amor en cuatro patitas, un lugar seguro para amar</h3>
                                <p>
                                Haru Store es un E-commerce dedicado a la venta de los mejores productos para nuestros perritos y gatitos. Contamos con un amplio catálogo para que encuentres todo en un mismo lugar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End primer banner - tienda  -->
            <!-- Segundo banner - adopción  -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL . 'assets/images/2adoptemos.png'; ?>" alt="Adoptemos">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                            <a href="<?php echo BASE_URL . 'principal/publicaciones_adop'; ?>"><img src="<?php echo BASE_URL . 'assets/images/zona_adopcion.png'; ?>" alt="adoptemos" /></a><br>
                                <h3 class="h2">Creemos un hogar juntos lleno de amor y pelitos</h3>
                                <p>
                                    Conoce al nuevo miembro de tu familia y cambia realidades llenandolas de amor. <br>
                                    Contamos con una comunidad segura para el proceso de adopción de mascotas sin discrimar. Nuestro foco es que perritos y gatitos encuentren un nuevo hogar lleno de amor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End segundo banner - adopcion  -->
            <!-- Tercer banner - cuidados  -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL . 'assets/images/2bienestar.png'; ?>" alt="Cuidado y Bienestar">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                            <a href="<?php echo BASE_URL . 'principal/cuidame'; ?>"><img src="<?php echo BASE_URL . 'assets/images/zona_cuidados.png'; ?>" alt="Tips&Cuidados" /></a><br>
                                <h3 class="h2">Tips y Cuidados de mascotas</h3>
                                <p>
                                    Entregar un buen cuidado es clave para el bienestar de nuestras mascotas, y no siempre es fácil descubrir que les hace bien a nuestros perritos y gatitos. Aquí te entregamos información y tips generales para sus cuidados.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End tercer banner - cuidados  -->
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner -->


    <!-- Promesa -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Nuestra promesa</h1>
                <p>
                    Nuestra promesa se centra en cuatro pilares fundamentales para ofrecerte el mejor servicio
                </p>
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Servicio de Delivery en Santiago</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
                    </svg></div>
                    <h2 class="h5 mt-4 text-center">Pago por PayPal</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    </svg></div>
                    <h2 class="h5 mt-4 text-center">Comunidad segura para a aprender cuidar y adoptar</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    </svg></div>
                    <h2 class="h5 mt-4 text-center">Servicio 24 horas al día</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->


    <?php include_once 'Views/template-principal/footer.php'; ?>
    
</body>

</html>