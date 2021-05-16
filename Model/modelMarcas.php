<?php

class ModelMarcas {

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=botines;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function GetMarcas(){
        $sentencia = $this->db->prepare("SELECT * FROM marcas"); // selecciona todo de tabla botines
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


    
}