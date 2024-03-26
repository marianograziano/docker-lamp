<?php

require_once "../vendor/autoload.php";
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class ajaxProductos{
    public $fileProductos;
    public function ajaxCargaMasivaProductos(){
            
        $respuesta = ProductsController::ctrCargaMasivaProductos($this->fileProductos);

        echo json_encode($respuesta);
    }

    public function ajaxListarProductos() {
        $productos = ProductsController::ctrListarProductos();
        echo json_encode($productos);
    }
}

if (isset($_POST["accion"]) && $_POST["accion"] == 1) {
    $productos = new ajaxProductos(); 
    $productos -> ajaxListarProductos(); 
} else 

if (isset($_FILES["fileProductos"])) {
    $archivos_producto = new ajaxProductos();
    $archivos_producto -> fileProductos = $_FILES["fileProductos"];
    $archivos_producto -> ajaxCargaMasivaProductos();
    
    
    
}

