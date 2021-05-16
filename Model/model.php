<?php

class Model {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=botines;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function GetBotines(){
        $sentencia = $this->db->prepare("SELECT * FROM botines"); // selecciona todo de tabla botines
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


    function GetMarcas(){
        $sentencia = $this->db->prepare("SELECT * FROM marcas"); 
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetBotin($id){
        $sentencia = $this->db->prepare("SELECT * FROM botines WHERE id=?"); 
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}