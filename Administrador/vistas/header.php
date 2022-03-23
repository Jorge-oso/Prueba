<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../../css/datatable/dataTables.bootstrap5.min.css">
</head>

<body>
<img class="img-fluid fixed" src="../../img/gobierno.png" alt="">
<nav class="navbar navbar-expand-lg navbar-dark bg-danger static-top">
	<div class="container">
			<a class="navbar-brand" href="inicio.php">
				<img src="../../img/LogoAGNColor.jpg" alt="" width="90px">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" href="inicio.php"><span class="fas fa-house-user"></span> Inicio
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="usuarios.php">
							<span class="fas fa-align-justify"></span> Usuarios
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="documentos.php">
							<span class="fas fa-folder"></span>Documentos
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../procesos/usuario/salir.php">
							<span class="fas fa-door-open"></span> Salir
						</a>
					</li>

					<li class="nav-item">
					<a class="nav-link">
						<span class="fa fa-user-circle"></span>
						<?php echo $_SESSION['user'] ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
