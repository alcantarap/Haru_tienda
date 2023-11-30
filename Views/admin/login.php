<!--?php echo password_hash('admin', PASSWORD_DEFAULT); exit;?>-->

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="<?php echo BASE_URL;?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?php echo BASE_URL;?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?php echo BASE_URL;?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo BASE_URL;?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?php echo BASE_URL;?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>assets/css/app.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>assets/css/icons.css" rel="stylesheet">
	<title><?php echo $data['title'];?></title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?php echo BASE_URL;?>assets
                            /images/login-images/login-cover.svg" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="<?php echo BASE_URL;?>assets
                                /images/logo_completo.png" width="260" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">HaruStore Admin</h5>
										<p class="mb-0">Porfavor inicia sesión</p>
									</div>
									<div class="form-body">
										<form class="row g-3" id="formulario">
											<div class="col-12">
												<label for="email" class="form-label">Correo electrónico</label>
												<input type="email" class="form-control" id="email" name="email" value="admin_haru@gmail.com" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="clave" class="form-label">Contraseña</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="clave" name="clave" value="12345678" placeholder="Contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
												</div>
											</div>
											<div class="col-md-12 text-end">	<a href="authentication-forgot-password.html">Olvidaste la contraseña?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Iniciar sesión</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">No tienes una cuenta? <a href="authentication-signup.html">Registrate aqui</a>
													</p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="<?php echo BASE_URL;?>assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;?>assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="<?php echo BASE_URL;?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="<?php echo BASE_URL;?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="<?php echo BASE_URL;?>assets/js/app.js"></script>
	<script>
		const BASE_URL = '<?php echo BASE_URL;?>';
	</script>
	<script src="<?php echo BASE_URL;?>assets/js/modulos/login.js"></script>
	<script src="<?php echo BASE_URL;?>assets/js/sweetalert2.all.min.js"></script>
</body>

</html>