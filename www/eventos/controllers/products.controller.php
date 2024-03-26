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

}