<?php

require_once "../controllers/categories.controller.php";
require_once "../models/categories.model.php";

class ajaxCategorias{



public function ajaxListarCategorias(){
    
    $categorias = CategoriasController::ctrListarCategorias();
    
   echo json_encode($categorias, JSON_UNESCAPED_UNICODE);

    }

}

$categorias = new ajaxCategorias(); 
$categorias -> ajaxListarCategorias();
?>