<?php

include "Models/model.php";

class MvcController{

    public function plantilla(){
        include "Views/template.php";
    }

    public function enlacesPaginasController(){
        if(isset($_GET['action'])){
            $enlaces = $_GET['action'];
        }else{
            $enlaces = "inicio";
        }
        $respuesta = EnlacesPaginas::enlacePaginas($enlaces);
        include $respuesta;
    }
}

?>