<?php include_once 'Views/template-principal/header2.php'; ?>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">¡Adoptame!</h1>
            <p>
                Este es un espacio seguro para encontrar al nuevo integrante de nuestras familias. <br> <br>
                Si estas interesado en adoptar o tienes que dar en adopción independiente de la razón cuenta con este espacio seguro para un nuevo hogar.
            </p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a  href="<?php echo BASE_URL . 'principal/publicaciones_adop'; ?>" class="btn btn-secondary" type="button">Ir a zona de adopción</a>
            </div>
        </div>
    </div>

    <!-- Formulario publicación -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                <h1>Rellena el formulario para publicar</h1> <br>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Nombre mascota</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email de contacto</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Tipo de mascota</label>
                        <select id="inputState" class="form-select">
                        <option selected>Perro</option>
                        <option>Gato</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Raza mascota</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Raza">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Edad de la Mascota</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Edad">
                </div>
                <div class="mb-3">
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Comuna</label>
                        <select id="inputState" class="form-select">
                        <option selected>Lo Barnechea</option>
                        <option>Vitacura</option>
                        <option>Las Condes</option>
                        <option>La Reina</option>
                        <option>Peñalolen</option>
                        <option>La Florida</option>
                        <option>Puente Alto</option>
                        <option>Pirque</option>
                        <option>San José de Maipo</option>
                        <option>La Pintana</option>
                        <option>San Bernardo</option>
                        <option>El Bosque</option>
                        <option>La Granja</option>
                        <option>San Ramón</option>
                        <option>La Cisterna</option>
                        <option>Lo Espejo</option>
                        <option>Cerrillos</option>
                        <option>Maipú</option>
                        <option>Padre Hurtado</option>
                        <option>Macul</option>
                        <option>San Joaquín</option>
                        <option>San Miguel</option>
                        <option>Pedro Aguirre Cerda</option>
                        <option>Pudahuel</option>
                        <option>Lo Prado</option>
                        <option>Cerro Navia</option>
                        <option>Quinta Normal</option>
                        <option>Estación Central</option>
                        <option>Santiago</option>
                        <option>Ñuñoa</option>
                        <option>Providencia</option>
                        <option>Huechuraba</option>
                        <option>Recoleta</option>
                        <option>Conchalí</option>
                        <option>Renca</option>
                        <option>Quilicura</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Descripción</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Descripción adicional de la mascota que desee añadir" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Foto de la mascota</label>
                    <input type="file" class="form-control" aria-label="file example" required>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="button" class="btn btn-secondary">Publicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Fin formulario-->

  
                    


        <?php include_once 'Views/template-principal/footer.php'; ?>
   
</body>
</html>