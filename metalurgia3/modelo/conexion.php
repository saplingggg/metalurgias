<?php
class Conexion{
    private $server='localhost';
    private $user='root';
    private $password='';
    private $database='agendamiento';

    public function __construct(){
        try{
            $connect=new PDO("mysql:host=".$this->server.";dbname=".$this->database,$this->user,$this->password);
            return $connect;
        }catch(PDOException $error){
            return "Error al conectarse: ".$error;
        }
    }
}



?>
