<? 



class ProductsController{
    static public function ctrCargaMasivaProductos($fileProductos){
        $respuesta = ProductsModel::mdlCargaMasivaProductos($fileProductos);
      
        return $respuesta;
    }

    static public function ctrListarProductos(){
        $respuesta = ProductsModel::mdlListarProductos();
        return $respuesta;
    }

    static public function ctrRegistrarProducto($codigo_producto, $id_categoria_producto, $descripcion_producto, $precio_compra_producto, $precio_venta_producto, $utilidad, $stock_producto, $minimo_stock_producto, $ventas_producto)
    {
        $registrarProducto = ProductsModel::mdlRegistrarProducto($codigo_producto, $id_categoria_producto, $descripcion_producto, $precio_compra_producto, $precio_venta_producto, $utilidad, $stock_producto, $minimo_stock_producto, $ventas_producto);

        return $registrarProducto;
    }

    static public function ctrActualizarStock($table, $data, $id, $nameId){
        $respuesta = ProductsModel::mdlActualizarInfo($table, $data, $id, $nameId);
        return $respuesta;
    }

    static public function ctrActualizarProducto($table, $data, $id, $nameId) {
    $respuesta = ProductsModel::mdlActualizarInfo($table, $data, $id, $nameId);
    return $respuesta;
}


}