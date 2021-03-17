<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title> INGRESAR HsV</title>
</head>
<!-- TITULOS -->

<body class="container bg-light">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light ">
			<div class="container-fluid justify-content-center">
				<a class="navbar-brand fs-4 fw-bold m-0" href="#">HOJAS DE VIDA</a>
			</div>
		</nav>
	</div>
	<hr class="m-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid justify-content-center">
				<p class="navbar-brand fs-4 m-0">Datos básicos</p>
			</div>
		</nav>
	</div>

	<!-- TITULOS -->

	<!-- FORMULARIO -->
	<form action='administrar_agenda.php' method='post' class="mt-4">
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Documento:</span>
			<input type='number' class="form-control mb-2" name='documento'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Nombre/s:</span>
			<input type='text' class="form-control mb-2" name='nombre'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Apellidos:</span>
			<input type='text' class="form-control mb-2" name='apellidos'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Fecha de nacimiento:</span>
			<input type='date' class="form-control mb-2" name='edad'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Dirección:</span>
			<input type='text' class="form-control mb-2" name='direccion'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Teléfono:</span>
			<input type='number' class="form-control mb-2" name='telefono'>
		</div>
		<div class="my-4input-group input-group-lg">
			<span class="input-group-text">Correo:</span>
			<input type='text' class="form-control mb-2" name='correo'>
		</div>

		<!-- FIN DE FORMULARIO -->

		<!-- ESTUDIOS REALIZADOS -->
		<hr class="mt-5 mb-0 p-0">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid justify-content-center">
					<p class="navbar-brand fs-4 m-0">Estudios realizados</p>
				</div>
			</nav>
		</div>
		<hr class="mt-0 mb-5 p-0">

		<form action='administrar_agenda.php' method='post'>
			<div class="my-4input-group input-group-lg">
				<span class="input-group-text">Título:</span>
				<input type='text' class="form-control mb-2" name='titulo'>
			</div>
			<div class="my-4input-group input-group-lg">
				<span class="input-group-text">Institución:</span>
				<input type='text' class="form-control mb-2" name='institucion'>
			</div>
			<div class="my-4input-group input-group-lg">
				<span class="input-group-text">Fecha de culminación:</span>
				<input type='date' class="form-control mb-2" name='fecha'>
			</div>

			<!-- LABORAL -->

			<hr class="mt-5 mb-0 p-0">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid justify-content-center">
						<p class="navbar-brand fs-4 m-0">Laboral</p>
					</div>
				</nav>
			</div>
			<hr class="mt-0 mb-5 p-0">
			<!-- ESTUDIOS REALIZADOS -->
			<form action='administrar_agenda.php' method='post'>
				<div class="my-4input-group input-group-lg">
					<span class="input-group-text">Empresa:</span>
					<input type='text' class="form-control mb-2" name='empresa'>
				</div>
				<div class="my-4input-group input-group-lg">
					<span class="input-group-text">Cargo</span>
					<input type='text' class="form-control mb-2" name='cargo'>
				</div>
				<div class="my-4input-group input-group-lg">
					<span class="input-group-text">Fecha de inicio:</span>
					<input type='date' class="form-control mb-2" name='ini'>
				</div>
				<div class="my-4input-group input-group-lg">
					<span class="input-group-text">Fecha de culminación:</span>
					<input type='date' class="form-control mb-2" name='culmi'>
				</div>

				<input type='hidden' name='insertar' value='insertar'>

				<!-- BOTONES -->
				<div class="d-grid gap-2 mt-4 mb-5">
					<button class="btn btn-primary" type="submit" value="Guardar">Guardar</button>
					<a href="index.php" class="btn btn-danger" type="button">Volver</a>
				</div>
			</form>
</body>

</html>