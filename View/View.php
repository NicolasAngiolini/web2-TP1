<?php

require_once "./smarty-3.1.39/libs/Smarty.class.php";

class View{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }
    function RenderHome(){
        $this->smarty->display("templates/index.tpl");
    }
    function RenderVentas($botines,$marcas){
        $this->smarty->assign('botines', $botines);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display("templates/ventas.tpl");
        
    }
    function RenderUsuarios(){
        $this->smarty->display("templates/usuarios.tpl");
    }


    function RenderMarcas($marcas){
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display("templates/marcas.tpl");
        
    }
    function RenderDetalle($botin,$marcas){
        $this->smarty->assign('botin', $botin);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display("templates/detalles.tpl");
        
    }
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."index");
    }    
}