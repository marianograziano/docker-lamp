<?php

class CategoriasController{
    public static  function ctrListarCategorias(){
        $respuesta = CategoriasModel::mdlListarCategorias();
        return $respuesta;
    }
}