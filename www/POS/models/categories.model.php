<?php 

require_once "conection.php";
class CategoriasModel{
    static public function mdlListarCategorias(){
        $stmt = Conexion::conectar()->prepare("select id_categoria, 
                                                nombre_categoria from categorias order BY nombre_categoria ASC"); 
        $stmt -> execute();
        return $stmt -> fetchAll();

    }
}