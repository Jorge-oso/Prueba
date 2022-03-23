<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Inicio de sesión</title>
	<link rel="stylesheet" href="../Css/styles.css">
	<!--  Bootstrap  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body class="custom-color">
	<section class="ftco-section">
		<div class="container-lg d-flex align-items-center justify-content-center vh-100">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center ">
				<!-- Columna 1 Formulario de inicio de sesión-->
				<div class="col-lg-4 border bg-light border-2">
					<div class="px-lg-5 py-lg-4 p-4  w-100 align-self-center ">
						<div class="align-content-center">
							<img src="../img/logo_agn.jpeg" class="img-fluid rounded mx-auto d-block " height="120" width="150">
						</div>
						<form id="frmLogin" method="post" onsubmit="return logear()" class="signin-form mb-lg-3">
							<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1"> <i
									class="bi bi-person-circle"></i></span>
									<input type="text" class="form-control" id="login" placeholder="Usuario"
									aria-label="Username" aria-describedby="basic-addon1" name="login">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class=" bi bi-key-fill"></i></span>
									<input type="password" class="form-control" id="password" placeholder="Contraseña"
									aria-label="Password" aria-describedby="basic-addon1" autocomplete="new-password" name="password">
								</div>
								<div>
									<label for="" class="form-label"></label>
									<button type="submit" class="btn btn-primary w-100 ">Iniciar Sesión</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Culumna 2 imgen-->
					<div class="col-lg-6 fondo d-none d-lg-block">
						<img src="../img/agn.jpeg" class="img-fluid imga" alt="" height="1000" width="1000">
						<div class="centrado1">Archivo General de la Nación</div> 
						<div class="centrado2">DTIC</div>
						<div class="centrado3">Dirección de Tecnologías de la Información y Comunicaciones</div>
						<div class="centrado4">Consulta y Descripción Documental</div>
						<div class="centrado5">___________________________________________________________</div>
					</div>
				</div>
			</div>
		</section>
		<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../css/jquery-3.6.0.min.js"></script>
		<script src="../css/sweetalert.min.js"></script>

		<script type="text/javascript">
			function logear(){
				$.ajax({
					type:"POST",
					data:$('#frmLogin').serialize(),
					url:"procesos/usuario/login.php",
					success:function(respuesta) {
						respuesta = respuesta.trim();
						if (respuesta == 1) {
							window.location = "vistas/inicio.php";
						} else {
							swal(":(", "Fallo al entrar!", "error");
						}
					}
				});
				return false;
			}
		</script>
	</body>
	</html>
