<?php


require_once "./View/View.php";
require_once "./Model/model.php";
require_once "./Model/modelMarcas.php";


class Controller {

    private $view;
    private $model;

    function __construct(){
        $this->view = new View();
        $this->model = new Model();
        $this->modelMarcas = new ModelMarcas();
    }

    function Home(){ 
        $this->view->RenderHome();
    }
    function Ventas(){ 
        $botines = $this->model->getBotines();
        $marcas = $this->model->GetMarcas();

        $this->view->RenderVentas($botines,$marcas);
       
    }

    function Marcas(){ 
        $marcas = $this->modelMarcas->GetMarcas();
        $this->view->RenderMarcas($marcas);
       
    }

    function Usuarios(){ 
        $this->view->RenderUsuarios();
    }

    function GetDetalles($params=null){
        $id = $params[":ID"];
        $botin = $this->model->GetBotin($id);
        $marcas = $this->model->GetMarcas();
        
        $this->view->RenderDetalle($botin,$marcas);
    }

    


}