<?php
	class Agenda{
		private $id;
		private $nombre;
		private $apellidos;
		private $edad;
		private $direccion;
		private $telefono;
		private $documento;
		private $correo;
		private $titulo;
		private $institucion;
		private $fecha;
		private $empresa;
		private $cargo;
		private $ini;
		private $culmi;

		function __construct(){}
 
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getDireccion(){
			return $this->direccion;
		}
		
		public function getApellidos(){
			return $this->apellidos;
			}
	 
		public function setApellidos($apellidos){
				$this->apellidos = $apellidos;
		}

		public function getEdad(){
			return $this->edad;
			}
	 
		public function setEdad($edad){
				$this->edad = $edad;
		}

		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
 
		public function getTelefono(){
		return $this->telefono;
		}
 
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getDocumento(){
		return $this->documento;
		}
	 
		public function setDocumento($documento){
			$this->documento = $documento;
		}
		
		public function getCorreo(){
			return $this->correo;
			}
	 
		public function setCorreo($correo){
				$this->correo = $correo;
		}
	 
		public function getTitulo(){
			return $this->titulo;
		}
	 
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
	
		public function getInstitucion(){
			return $this->institucion;
		}
	 
		public function setInstitucion($institucion){
			$this->institucion = $institucion;
		}
			
		public function getFecha(){
			return $this->fecha;
		}
		 
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
	
		public function getEmpresa(){
			return $this->empresa;
		}
		 
		public function setEmpresa($empresa){
			$this->empresa = $empresa;
		}

		public function getCargo(){
			return $this->cargo;
		}
		 
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}

		public function getIni(){
			return $this->ini;
		}
		 
		public function setIni($ini){
			$this->ini = $ini;
		}

		public function getCulmi(){
			return $this->culmi;
		}
		 
		public function setCulmi($culmi){
			$this->culmi = $culmi;
		}
	}
?>