<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudAgenda
	{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo agenda
		public function insertar($agenda){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO basicos values(NULL,:nombre,:apellidos,:edad,:direccion,:telefono,:documento,:correo,:titulo,:institucion,:fecha,:empresa,:cargo,:ini,:culmi)');
			$insert->bindValue('nombre',$agenda->getNombre());
			$insert->bindValue('apellidos',$agenda->getApellidos());
			$insert->bindValue('edad',$agenda->getEdad());
			$insert->bindValue('direccion',$agenda->getDireccion());
			$insert->bindValue('telefono',$agenda->getTelefono());
			$insert->bindValue('documento',$agenda->getDocumento());
			$insert->bindValue('correo',$agenda->getCorreo());
			$insert->bindValue('titulo',$agenda->getTitulo());
			$insert->bindValue('institucion',$agenda->getInstitucion());
			$insert->bindValue('fecha',$agenda->getFecha());
			$insert->bindValue('empresa',$agenda->getEmpresa());
			$insert->bindValue('cargo',$agenda->getCargo());
			$insert->bindValue('ini',$agenda->getIni());
			$insert->bindValue('culmi',$agenda->getCulmi());
			$insert->execute();
		}
 
		// método para mostrar todos los Amigos
		public function mostrar(){
			$db=Db::conectar();
			$listaAgenda=[];
			$select=$db->query('SELECT * FROM basicos');
 
			foreach($select->fetchAll() as $agenda){
				$myAgenda= new Agenda();
				$myAgenda->setId($agenda['id']);
				$myAgenda->setNombre($agenda['nombre']);
				$myAgenda->setApellidos($agenda['apellidos']);
				$myAgenda->setEdad($agenda['edad']);
				$myAgenda->setDireccion($agenda['direccion']);
				$myAgenda->setTelefono($agenda['telefono']);
				$myAgenda->setDocumento($agenda['documento']);
				$myAgenda->setCorreo($agenda['correo']);
				$myAgenda->setTitulo($agenda['titulo']);
				$myAgenda->setInstitucion($agenda['institucion']);
				$myAgenda->setFecha($agenda['fecha']);
				$myAgenda->setEmpresa($agenda['empresa']);
				$myAgenda->setCargo($agenda['cargo']);
				$myAgenda->setIni($agenda['ini']);
				$myAgenda->setCulmi($agenda['culmi']);
				$listaAgenda[]=$myAgenda;
			}
			return $listaAgenda;
		}
 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id)
		{
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM basicos WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un amigo de la agenda, recibe como parámetro el id del agenda
		public function obtenerAgenda($id)
		{
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM basicos WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$agenda=$select->fetch();
			$myAgenda = new Agenda();
			$myAgenda->setId($agenda['id']);
			$myAgenda->setNombre($agenda['nombre']);
			$myAgenda->setApellidos($agenda['apellidos']);
			$myAgenda->setEdad($agenda['edad']);
			$myAgenda->setDireccion($agenda['direccion']);
			$myAgenda->setTelefono($agenda['telefono']);
			$myAgenda->setDocumento($agenda['documento']);
			$myAgenda->setCorreo($agenda['correo']);
			$myAgenda->setTitulo($agenda['titulo']);
			$myAgenda->setInstitucion($agenda['institucion']);
			$myAgenda->setFecha($agenda['fecha']);
			$myAgenda->setEmpresa($agenda['empresa']);
			$myAgenda->setCargo($agenda['cargo']);
			$myAgenda->setIni($agenda['ini']);
			$myAgenda->setCulmi($agenda['culmi']);
			return $myAgenda;
		}
 
		// método para actualizar agenda un amigo, recibe como parámetro un amigo
		public function actualizar($agenda){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE basicos SET nombre=:nombre, apellidos=:apellidos, edad=:edad, direccion=:direccion,telefono=:telefono, documento=:documento, correo=:correo, titulo=:titulo, institucion=:institucion, fecha=:fecha, empresa=:empresa, cargo=:cargo, ini=:ini, culmi=:culmi  WHERE ID=:id');
			$actualizar->bindValue('id',$agenda->getId());
			$actualizar->bindValue('nombre',$agenda->getNombre());
			$actualizar->bindValue('apellidos',$agenda->getApellidos());
			$actualizar->bindValue('edad',$agenda->getEdad());
			$actualizar->bindValue('direccion',$agenda->getDireccion());
			$actualizar->bindValue('telefono',$agenda->getTelefono());
			$actualizar->bindValue('documento',$agenda->getDocumento());
			$actualizar->bindValue('correo',$agenda->getCorreo());
			$actualizar->bindValue('titulo',$agenda->getTitulo());
			$actualizar->bindValue('institucion',$agenda->getInstitucion());
			$actualizar->bindValue('fecha',$agenda->getFecha());
			$actualizar->bindValue('empresa',$agenda->getEmpresa());
			$actualizar->bindValue('cargo',$agenda->getCargo());
			$actualizar->bindValue('ini',$agenda->getIni());
			$actualizar->bindValue('culmi',$agenda->getCulmi());
			$actualizar->execute();
		}
	}
?>