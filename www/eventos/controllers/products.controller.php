<? 

class ProductsController{
    static public function ctrCargaMasivaProductos($fileProductos){
        $respuesta = ProductsModel::mdlCargaMasivaProductos($fileProductos);
      
        return $respuesta;
    }

}