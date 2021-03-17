<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_agenda.php');
	require_once('agenda.php');
	$crud   = new CrudAgenda();
	$agenda = new Agenda();
	//busca el agenda utilizando el id, que es enviado por GET desde la vista mostrar.php
	$agenda=$crud->obtenerAgenda($_GET['id']);
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>ACTUALIZAR HOJAS DE VIDA</title>
</head>

<body class="container bg-light">

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container justify-content-center">
				<a class="navbar-brand fs-4 fw-bold m-0" href="#">HOJAS DE VIDA</a>
			</div>
		</nav>
	</div>
	<hr class="m-0 p-0">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container justify-content-center">
				<a class="navbar-brand fs-4 m-0" href="#">Datos Básicos</a>
			</div>
		</nav>
	</div>

	<div class="container mt-4">
		<form action='administrar_agenda.php' method='post'>
			<table>
				<tr>
					<input type='hidden' name='id' value='<?php echo $agenda->getId()?>'>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Documento:</span>
						<input type='number' name='documento' value='<?php echo $agenda->getDocumento() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Nombres: </span>
						<input type='text' name='nombre' value='<?php echo $agenda->getNombre()?>' class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Apellidos: </span>
						<input type='text' name='apellidos' value='<?php echo $agenda->getApellidos() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>

					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Edad:</span>
						<input type='date' name='edad' value='<?php echo $agenda->getEdad() ?>' class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Dirección:</span>
						<input type='text' name='direccion' value='<?php echo $agenda->getDireccion()?>'
							class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Teléfono:</span>
						<input type='number' name='telefono' value='<?php echo $agenda->getTelefono() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Correo:</span>
						<input type='text' name='correo' value='<?php echo $agenda->getCorreo() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Título:</span>
						<input type='text' name='titulo' value='<?php echo $agenda->getTitulo() ?>'
							class="form-control">
					</div>
				</tr>
				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Institución:</span>
						<input type='text' name='institucion' value='<?php echo $agenda->getInstitucion() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Fecha:</span>
						<input type='date' name='fecha' value='<?php echo $agenda->getFecha() ?>' class="form-control">
					</div>
				</tr>

				<tr>

					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Empresa:</span>
						<input type='text' name='empresa' value='<?php echo $agenda->getEmpresa() ?>'
							class="form-control">
					</div>
				</tr>

				<tr>

					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Cargo:</span>
						<input type='text' name='cargo' value='<?php echo $agenda->getCargo() ?>' class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Fecha de inicio:</span>
						<input type='date' name='ini' value='<?php echo $agenda->getIni() ?>' class="form-control">
					</div>
				</tr>

				<tr>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">Fecha de culminación:</span>
						<input type='date' name='culmi' value='<?php echo $agenda->getCulmi() ?>' class="form-control">
					</div>
				</tr>

				<input type='hidden' name='actualizar' value='actualizar'>
			</table>
	</div>


	<div class="d-grid gap-2 mt-4">
		<input class="btn btn-primary" type='submit' value='Guardar'>
		<a href="mostrar.php" class="btn btn-danger" type="button">Volver</a>
	</div>
	</form>
</body>

</html>