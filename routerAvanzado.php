<?php
    
    require_once 'Controller/controller.php';
    require_once 'routerClass.php';

    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $r = new Router();

    //Rutas
    $r->addRoute("home", "GET", "controller", "Home"); // palabra clave , accion , archivo , funcion
    $r->addRoute("ventas", "GET", "controller", "Ventas");
    $r->addRoute("usuarios", "GET", "controller", "Usuarios");
    $r->addRoute("marcas", "GET", "controller", "Marcas");
    $r->addRoute("detalles/:ID", "GET", "controller", "GetDetalles");

    
    //Acciones
    $r->addRoute("ruedas/insert", "POST", "RuedasController", "InsertRueda"); 
    $r->addRoute("ruedas/delete/:ID", "GET", "RuedasController", "DeleteRueda"); //:ID es el parametro que le pasas
    $r->addRoute("botines", "GET", "controller", "InsertRueda");
    $r->addRoute("marcas", "UP", "controller", "InsertRueda");

    $r->addRoute("botines/:ID", "GET", "controller", "GetDetalles");


    

    //Ruta por defecto.
    $r->setDefaultRoute("controller", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
    
    
    /* 
    -los $logged de los controller
    -$modelMarca en ruedas controller
    
    */
?>

