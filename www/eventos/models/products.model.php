<?php

require_once "conection.php";
use PhpOffice\PhpSpreadsheet\IOFactory; 

class ProductsModel{

static public function mdlCargaMasivaProductos($fileProductos){
    
    $nombreArchivo = $fileProductos['tmp_name'];
    $documento = IOFactory::load($nombreArchivo);
    
    $hojaCategorias = $documento->getSheet(1);

    $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();


    var_dump($numeroFilasCategorias);
    
    $categoriasregistradas = 0;
    for ($i=2; $i <= $numeroFilasCategorias ; $i++) { 

        $categoria = $hojaCategorias->getCell([1, $i])->getValue();
        //var_dump($categoria);
        $aplica_peso = $hojaCategorias->getCell([2, $i])->getValue();
        //var_dump($aplica_peso);    
        $fecha_actualizacion = date("Y-m-d");
        //var_dump($fecha_actualizacion);
            if(!empty($categoria)){
                $stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,
                                                                                aplica_peso,
                                                                                fecha_actualizacion_categoria)
                                                                    values(:nombre_categoria,
                                                                            :aplica_peso,
                                                                            :fecha_actualizacion_categoria);");

                $stmt -> bindParam(":nombre_categoria",$categoria,PDO::PARAM_STR);
                $stmt -> bindParam(":aplica_peso",$aplica_peso,PDO::PARAM_STR);
                $stmt -> bindParam(":fecha_actualizacion_categoria",$fecha_actualizacion,PDO::PARAM_STR);

                if($stmt->execute()){
                    $categoriasregistradas = $categoriasregistradas + 1;
                  //  echo "Categoría registrada con éxito " . $categoriasregistradas;
                }else{
                    $categoriasregistradas = 0;
                // echo "Categoría registrada sin éxito " . $categoriasregistradas;
                }
            }            
               
        }
        //echo "Pre return categorias " . $categoriasregistradas;
        return $categoriasregistradas;     
    }

}
