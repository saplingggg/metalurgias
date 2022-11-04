<?php
require_once('conexion.php');

class Usuario extends Conexion{
    private $idUsuario;
    private $correrousuario;
    private $Uclave;
    private $estadousuario;
	private $idRol;
	

    public function __construct(){
        $this->db=parent::__construct();
    
	}

	public function getIdUsuario(){
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}

	public function getCorrerousuario(){
		return $this->correrousuario;
	}

	public function setCorrerousuario($correrousuario){
		$this->correrousuario = $correrousuario;
	}

	public function getUclave(){
		return $this->Uclave;
	}

	public function setUclave($Uclave){
		$this->Uclave = $Uclave;
	}

	public function getEstadousuario(){
		return $this->estadousuario;
	}

	public function setEstadousuario($estadousuario){
		$this->estadousuario = $estadousuario;
	}

	public function getIdRol(){
		return $this->idRol;
	}

	public function setIdRol($idRol){
		$this->idRol = $idRol;
	}
    
    
	public function registrarUsuario(){
		$consulta=$this->db->prepare("INSERT INTO usuario (Usua_codigo, Usua_nombre, Usua_clave, Usua_tipo) VALUES (:id, :name, :pass, :type)");
		$consulta->bindParam(':id',$this->Ucodigo);
		$consulta->bindParam(':name',$this->Unombre);
		$consulta->bindParam(':pass',$this->Uclave);
		$consulta->bindParam(':type',$this->Utipo);
		

		if ($consulta->execute()) {
			header('Location: ../vistas/formRegistrarUsuario.php?mensaje=correcto');
		}else{
			header('Location: ../vistas/formRegistrarUsuario.php?mensaje=incorrecto');
		}

	}

	public function login(){
		$consulta=$this->db->prepare("SELECT * FROM Usuario WHERE correousuario= :Usuario and clave= :Clave");
		$consulta->bindParam(':Usuario',$this->correrousuario);
		$consulta->bindParam(':Clave',$this->Clave);
	
		$consulta->execute();

		if ($consulta->rowCount()==1) {
			return true;
		}else{
			return false;
		}

	}

	public function consultarUsuarios(){
		$consulta=$this->db->prepare("SELECT * FROM usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	public function consultarTodos(){
		$consulta=$this->db->prepare("SELECT * FROM usuario");
		$filas=null;
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}

	public function consultaCodigo(){
		$filas=null;
		$consulta=$this->db->prepare("SELECT Usua_nombre, Usua_Tipo FROM usuario WHERE Usua_codigo= :id");
		$consulta->bindParam('id',$this->codigo);
		$consulta->execute();
        while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}
}




?>