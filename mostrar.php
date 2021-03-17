<?php
//incluye la clase Agenda y CrudAgenda
require_once('crud_agenda.php');
require_once('agenda.php');
$crud=new CrudAgenda();
$agenda= new Agenda();
//obtiene todos los amigos de la agenda con el método mostrar de la clase crud
$listaAgenda=$crud->mostrar();
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<title>HOJAS DE VIDA</title>
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
				<p class="navbar-brand fs-4 m-0">Datos básicos</p>
			</div>
		</nav>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered mt-4">

			<td class="fw-bold text-center">DOCUMENTO</td>
			<td class="fw-bold text-center">NOMBRES</td>
			<td class="fw-bold text-center">APELLIDOS</td>
			<td class="fw-bold text-center">F. NACIMIENTO</td>
			<td class="fw-bold text-center">DIRECCIÓN</td>
			<td class="fw-bold text-center">TELÉFONO</td>
			<td class="fw-bold text-center">CORREO</td>
			<td class="fw-bold text-center">MÁS INFO</td>
			<td class="fw-bold text-center">ACTUALIZAR</td>
			<td class="fw-bold text-center">ELIMINAR</td>

			<?php foreach ($listaAgenda as $agenda) {?>
			<tr>
				<td><?php echo $agenda->getDocumento() ?></td>
				<td><?php echo $agenda->getNombre() ?></td>
				<td><?php echo $agenda->getApellidos() ?></td>
				<td><?php echo $agenda->getEdad() ?></td>
				<td><?php echo $agenda->getDireccion() ?></td>
				<td><?php echo $agenda->getTelefono() ?></td>
				<td><?php echo $agenda->getCorreo() ?></td>
				<td class="text-center"><a class="text-decoration-none"
						href="more.php?id=<?php echo $agenda->getId()?>&accion=a">Ver más</a></td>
				<td class="text-center"><a class="text-decoration-none"
						href="actualizar.php?id=<?php echo $agenda->getId()?>&accion=a">Actualizar</a></td>
				<td class="text-center"><a class="text-decoration-none"
						href="administrar_agenda.php?id=<?php echo $agenda->getId()?>&accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</table>
	</div>
	<div class="d-grid gap-2 mt-4">
		<a href="index.php" class="btn btn-danger" type="button">Volver</a>
	</div>
</body>

</html>