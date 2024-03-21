<?php

require_once "../vendor/autoload.php";
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class ajaxProductos{
    public $fileProductos;
    public function ajaxCargaMasivaProductos(){
            
        $respuesta = ProductsController::ctrCargaMasivaProductos($this->fileProductos);
        echo "respuesta -> ". $respuesta; 
        echo json_encode($respuesta);
    }
}

if (isset($_FILES["fileProductos"])) {
    $archivos_producto = new ajaxProductos();
    $archivos_producto -> fileProductos = $_FILES["fileProductos"];
    $archivos_producto -> ajaxCargaMasivaProductos();
    
}