<?php include_once 'Views/template-principal/header.php'; ?>

<body>

    <!-- Contenido perfil -->
    <!--Columna 1-->
    <div class="container py-5">
        <?php if (isset($data['verificar']['verify']) && $data['verificar']['verify'] == 1) { ?>
            <!-- Home - Profile - Contact -->
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pago-tab" data-bs-toggle="tab" data-bs-target="#pago" type="button" role="tab" aria-controls="pago" aria-selected="true">Pago</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pendiente-tab" data-bs-toggle="tab" data-bs-target="#pendiente" type="button" role="tab" aria-controls="pendiente" aria-selected="false">Pendiente</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="completado-tab" data-bs-toggle="tab" data-bs-target="#completado" type="button" role="tab" aria-controls="completado" aria-selected="false">Completado</button>
                </li>
            </ul>
            <!-- Pago -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pago" role="tabpanel" aria-labelledby="pago-tab">
                    <div class="row">
                        <!--Proceso de pedido de compra-->
                        <div class="col-md-8">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h2 class="card-title">Tu pedido</h5>
                                        <p class="card-text"></p>
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
                                <div class="card-footer text-end">
                                    <h3 id="totalProducto"></h3>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card shadow-lg">
                                <div class="card-body text-center">
                                    <img class="img-thumbnail" src="<?php echo BASE_URL . 'assets/img/logo_completo.png'; ?>" alt="Logo" width="170">
                                    <hr>
                                    <!-- Captura de Nombre y Correo en pantalla -->
                                    <p><?php echo $_SESSION['nombreCliente']; ?></p>
                                    <p><i class="fas fa-envelope"></i> <?php echo $_SESSION['correoCliente']; ?></p>

                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Paypal
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div id="paypal-button-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Otros medios de Pago
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>...</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tu pedido (pendiente) -->
                <div class="tab-pane fade" id="pendiente" role="tabpanel" aria-labelledby="pendientes-tab">
                    <div class="col-12">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover" id="tblPendiente" style="width: 100%;">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th>#</th>
                                                <th>Monto</th>
                                                <th>Fecha</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pedidos completados -->
                <div class="tab-pane fade" id="completado" role="tabpanel" aria-labelledby="completado-tab">...</div>
            </div>

        <?php } else { ?>
            <div class="alert alert-danger text-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div class="h3">
                    VERIFICA TU CORREO ELECTRÓNICO
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- End perfil -->

    <div id="modalPedido" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Estado de pedido</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6 col-lg-4 pb-5">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                                <h2 class="h5 mt-4 text-center">Enviado</h2>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 pb-5">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z" />
                                    </svg></div>
                                <h2 class="h5 mt-4 text-center">Proceso</h2>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 pb-5">
                            <div class="h-100 py-5 services-icon-wap shadow">
                                <div class="h1 text-success text-center"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    </svg></div>
                                <h2 class="h5 mt-4 text-center">Completado</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-borderer table-striped table-haver align-middle" id="tablePedidos" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'Views/template-principal/footer.php'; ?>

    <script type="text/javascript" src="<?php echo BASE_URL . 'assets/DataTables/datatables.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/traduccion.js"></script>
    <script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>

</body>

</html>