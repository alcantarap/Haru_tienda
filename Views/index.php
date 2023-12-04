<?php include_once 'Views/template/header-principal.php'; ?>

    <!-- Start Banner  -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <!--primer banner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL . 'assets/images/logo_completo.png'; ?>" alt="Haru Store">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <p>
                                    <a href="<?php echo BASE_URL .'principal/nostros'; ?>"><img src="<?php echo BASE_URL . 'assets/images/titulo_bienvenidos.png'; ?>" alt="tienda" /></a> <br>
                                    A Haru Store, te estamos esperando. <br> Encuentra aquí un espacio seguro para comprar productos exclusivos de mascotas y de alta calidad para entregarles la mejor vida posible, un espacio de adopción conectando con una hermosa comunidad petlovers, además de tips y cuidados generales para ofrecer el mejor el estilo de vida.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--segundo banner-->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo BASE_URL . 'assets/images/tienda.png'; ?>" alt="Tienda">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <p>
                                    <a href="<?php echo BASE_URL .'principal/tienda'; ?>"><img src="<?php echo BASE_URL . 'assets/images/titulo_petshop.png'; ?>" alt="tienda" /></a> <br>
                                    Encuentra aquí miles de productos exclusivos de mascotas y de alta calidad para entregarles la mejor vida posible.<br> Descubre los productos que tenemos para nuestros perritos y gatitos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tercer banner-->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/images/silueta2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <p>
                                    <a href="<?php echo BASE_URL .'principal/adoptame'; ?>"><img src="<?php echo BASE_URL . 'assets/images/titulo_adoptame.png'; ?>" alt="adopcion" /></a> <br>
                                    Conoce al nuevo miembro de tu familia y cambia realidades llenandolas de amor.<br>
                                    Todos los días nacen perritos y gatitos en busca de un hogar, llenemos de amor este espacio buscando nuevos hogares.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--cuarto banner-->
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/images/tipsycuidados2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <p>
                                <a href="<?php echo BASE_URL .'principal/cuidame'; ?>"><img src="<?php echo BASE_URL . 'assets/images/titulo_cuidame.png'; ?>" alt="cuidame" /></a> <br>
                                    Entregar un buen cuidado es clave para el bienestar de nuestras mascotas, encuentra una guía aquí en Haru Store para ofrecerle la mejor vida a nuestros perritos y gatitos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['categorias'] as $categoria){?>
            <div class="col-12 col-md-2 p-5 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="./assets/images/petshop.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria'];?></h5>
            </div>
            <?php }?>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos</h1>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data['nuevosproductos'] as $producto){ ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                            <p class="card-text">
                                <?php echo $producto['descripcion']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php include_once 'Views/template/footer-principal.php'; ?>

 
</body>

</html>