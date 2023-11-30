<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Mensaje de contenido página -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">¡Cuidame!</h1>
        <p>
            Esta sección esta dedicada a Tips y Cuidados para nuestras mascotas, sabemos que no es un proceso fácil y que existe mucha desinformación por lo que hemos creado este espacio para ti.<br>
            Debes tener en cuenta que los excesos siempre le harán daño a tus mascotas, por lo que debes tener en consideración el tamaño de tu mascota, evaluar reacciones que pueda tener y consultar siempre con tu veterinario.
        </p>
    </div>
</div>
<br>
<!-- Container -->
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Alimentos que le hacen bien a perritos</h1>
    </div>
<div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
<!--Imagenes de zona de adopción-->
                <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/manzanas.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manzanas</h5>
                        <p class="card-text">Son ricas en vitaminas A, C y K, necesarias para numerosos procesos corporales. Posee propiedades antioxidantes que ayudan a prevenir y a ralentizar problemas de salud como el cáncer o el envejecimiento cerebral canino.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/apio.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apio</h5>
                        <p class="card-text">Esta verdura es muy beneficiosa para los perros; eso sí, en cantidades limitadas, bien troceada y lavada. Es un gran antioxidante natural y es vital para mantener la salud de nuestro perro en buenas condiciones. El apio es digestivo, fortalece el sistema inmune, es antiinflamatorio y diurético.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/brocoli.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Brócoli</h5>
                        <p class="card-text">Brócoli. Esta verdura es excelente para el organismo de los perros gracias a su alto contenido de vitaminas A, C, E y K. Tiene propiedades cicatrizantes, fortalece los huesos, la visión y los dientes del animal.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/frambuesas.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Frambuesas</h5>
                        <p class="card-text">Es la mejor opción en cuanto a propiedades y deberían añadirse a la ración de comida diaria de los perros. Las frambuesas tienen alto contenido en antioxidantes y se recomienda una ración de 2 a 6 frambuesas de acuerdo al tamaño de tu mascota.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/frutillas.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Frutillas</h5>
                        <p class="card-text">Es la mejor opción en cuanto a propiedades y deberían añadirse a la ración de comida diaria de los perros. Las frambuesas tienen alto contenido en antioxidantes.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/zanahorias.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Zanahorias</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/lechuga.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lechuga</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="<?php echo BASE_URL . 'assets/images/platano.png'; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Platanos</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                </div>
        </div>
</div>  

<!--Paginación-->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>

<?php include_once 'Views/template-principal/footer.php'; ?>