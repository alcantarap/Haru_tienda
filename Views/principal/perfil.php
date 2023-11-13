<?php include_once 'Views/template-principal/header.php'; ?>

<body>

    <!-- Contenido perfil -->
<!--Columna 1-->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <h5 class="card-title">T</h5>
                    <p class="card-text">C</p>
                    <table class="table table-bodered table-striped table-hover align-middle" id="tableListaProductos">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>SubTotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
<!--Columna Logo-->
            <div class="col-md-4">
                <div class="card shadow-lg">
                        <h5 class="card-body">
                            <img class="img-thumbnail" src="<?php echo BASE_URL . 'assets/img/logo_completo.png'; ?>" alt="Logo">
                        </h5>
                    </div>
                </div>
        </div>
    </div>
    <!-- End perfil -->

    <?php include_once 'Views/template-principal/footer.php'; ?>

    <script src="<?php echo BASE_URL . 'assets/js/clientes.js'?>"></script>

</body>

</html>