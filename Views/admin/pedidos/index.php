<?php include_once 'Views/template/header-admin.php'; ?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#listaPedidos" type="button" role="tab" aria-controls="listaPedidos" aria-selected="true">Pedidos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#PedidosFinalizados" type="button" role="tab" aria-controls="PedidosFinalizados" aria-selected="false">Finalizados</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="listaPedidos" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-midle" style="width: 100%;" id="tblPendientes">
                        <thead>
                            <tr>
                                <th>Id transacción</th>
                                <th>Monto</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Correo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
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
    <div class="tab-pane fade" id="PedidosFinalizados" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div class="card">
            <div class="card-body">
            <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-midle" style="width: 100%;" id="tblFinalizados">
                        <thead>
                            <tr>
                                <th>Id transacción</th>
                                <th>Monto</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Correo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
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

<?php include_once 'Views/template/footer-admin.php'; ?>


<script src="<?php echo BASE_URL . 'assets/js/modulos/pedidos.js'; ?>"></script>

</body>

</html>