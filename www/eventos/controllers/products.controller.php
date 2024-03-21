<? 

class ProductsController{
    static public function ctrCargaMasivaProductos($fileProductos){
        $respuesta = ProductsModel::mdlCargaMasivaProductos($fileProductos);
        echo "respuesta controller -> " . $respuesta . " "; 
        return $respuesta;
    }

}