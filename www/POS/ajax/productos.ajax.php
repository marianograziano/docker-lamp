<?php

require_once "../vendor/autoload.php";
require_once "../controllers/products.controller.php";
require_once "../models/products.model.php";

class ajaxProductos{
    public $fileProductos;
    public $codigo_producto;
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    public $stock_producto;
    public $minimo_stock_producto;
    public $ventas_producto;
    
    public function ajaxCargaMasivaProductos(){
            
        $respuesta = ProductsController::ctrCargaMasivaProductos($this->fileProductos);

        echo json_encode($respuesta);
    }

    public function ajaxListarProductos() {
        $productos = ProductsController::ctrListarProductos();
        echo json_encode($productos);
    }

    public function ajaxRegistrarProducto(){
        $producto = ProductsController::ctrRegistrarProducto($this->codigo_producto, $this->id_categoria_producto, $this->descripcion_producto, $this->precio_compra_producto, $this->precio_venta_producto, $this->utilidad, $this->stock_producto, $this->minimo_stock_producto, $this->ventas_producto);
        echo json_encode($producto);

    }
}

if (isset($_POST["accion"]) && $_POST["accion"] == 1) { // Parametro par alistar productos 
    $productos = new ajaxProductos(); 
    $productos -> ajaxListarProductos(); 
} else  if (isset($_POST["accion"]) && $_POST["accion"] == 2) { // Parametro para registrar Producto 
    $registrarProducto = new ajaxProductos();
    $registrarProducto -> codigo_producto = $_POST["codigo_producto"];
    $registrarProducto -> id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto -> descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto -> precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto -> precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto -> utilidad = $_POST["utilidad"];
    $registrarProducto -> stock_producto = $_POST["stock_producto"];
    $registrarProducto -> minimo_stock_producto = $_POST["minimo_stock_producto"];
    $registrarProducto -> ventas_producto = $_POST["ventas_producto"];
    $registrarProducto -> ajaxRegistrarProducto();


}

else if (isset($_FILES["fileProductos"])) {
    $archivos_producto = new ajaxProductos();
    $archivos_producto -> fileProductos = $_FILES["fileProductos"];
    $archivos_producto -> ajaxCargaMasivaProductos();
    
    
    
}

