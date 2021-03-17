<?php
//incluye la clase Agenda y CrudAgenda
require_once('crud_agenda.php');
require_once('agenda.php');
$crud  = new CrudAgenda();
$agenda = new Agenda();

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$agenda->setNombre($_POST['nombre']);
		$agenda->setApellidos($_POST['apellidos']);
		$agenda->setEdad($_POST['edad']);
		$agenda->setDireccion($_POST['direccion']);
		$agenda->setTelefono($_POST['telefono']);
		$agenda->setDocumento($_POST['documento']);
		$agenda->setCorreo($_POST['correo']);
		$agenda->setTitulo($_POST['titulo']);
		$agenda->setInstitucion($_POST['institucion']);
		$agenda->setFecha($_POST['fecha']);
		$agenda->setEmpresa($_POST['empresa']);
		$agenda->setCargo($_POST['cargo']);
		$agenda->setIni($_POST['ini']);
		$agenda->setCulmi($_POST['culmi']);

		//llama a la función insertar definida en el crud
		$crud->insertar($agenda);
		header('Location: index.php');

	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$agenda->setId($_POST['id']);
		$agenda->setNombre($_POST['nombre']);
		$agenda->setApellidos($_POST['apellidos']);
		$agenda->setEdad($_POST['edad']);
		$agenda->setDireccion($_POST['direccion']);
		$agenda->setTelefono($_POST['telefono']);
		$agenda->setDocumento($_POST['documento']);
		$agenda->setCorreo($_POST['correo']);
		$agenda->setTitulo($_POST['titulo']);
		$agenda->setInstitucion($_POST['institucion']);
		$agenda->setFecha($_POST['fecha']);
		$agenda->setEmpresa($_POST['empresa']);
		$agenda->setCargo($_POST['cargo']);
		$agenda->setIni($_POST['ini']);
		$agenda->setCulmi($_POST['culmi']);
		$crud->actualizar($agenda);
		header('Location: index.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');
				
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>