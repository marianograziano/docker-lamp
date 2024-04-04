<?php

require_once "conection.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


function logError($mensajeError)
{
    // Establecer la zona horaria a UTC-3
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    // Obtener el timestamp actual y formatearlo
    $timestamp = new DateTime();
    $timestamp->setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires'));
    $fechaFormateada = $timestamp->format('Y-m-d H:i:s');

    // Construir el mensaje completo con el timestamp
    $mensajeCompleto = "[" . $fechaFormateada . "] " . $mensajeError;

    // Ruta al archivo de log en el mismo directorio que este script
    $rutaArchivoLog = __DIR__ . '/model_error.log';

    // Escribir el mensaje completo en el archivo de log
    error_log($mensajeCompleto . PHP_EOL, 3, $rutaArchivoLog);
}



class ProductsModel
{

    static public function mdlCargaMasivaProductos($fileProductos)
    {
        $mensajeError = "Este es un mensaje de error de prueba.";
        $rutaArchivoLog = __DIR__ . '/model_error.log';
        error_log($mensajeError . PHP_EOL, 3, $rutaArchivoLog);
        $nombreArchivo = $fileProductos['tmp_name'];
        try {
            $documento = IOFactory::load($nombreArchivo);
        } catch (Exception $e) {
            die("Error al cargar el documento: " . $e->getMessage());
        }


        $hojaCategorias = $documento->getSheet(1);
        $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();
        $hojaProductos = $documento->getSheetByName('Productos');
        $numeroFilasProductos = $hojaProductos->getHighestDataRow();
        $productosRegistrados = 0;
        $categoriasRegistradas = 0;

        for ($i = 2; $i <= $numeroFilasCategorias; $i++) {
            $categoria = $hojaCategorias->getCell([1, $i])->getValue();

            $aplica_peso = $hojaCategorias->getCell([2, $i])->getValue();
            $fecha_actualizacion = date("Y-m-d");

            if (!empty($categoria)) {
                try {
                    $db = Conexion::conectar();
                    $stmt = $db->prepare("INSERT INTO categorias (nombre_categoria, aplica_peso, fecha_actualizacion_categoria) VALUES (:nombre_categoria, :aplica_peso, :fecha_actualizacion_categoria)");
                    $stmt->bindParam(":nombre_categoria", $categoria, PDO::PARAM_STR);
                    $stmt->bindParam(":aplica_peso", $aplica_peso, PDO::PARAM_STR);
                    $stmt->bindParam(":fecha_actualizacion_categoria", $fecha_actualizacion, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $categoriasRegistradas++;
                    }
                } catch (PDOException $e) {
                    // Manejar el error o loguearlo
                    error_log("Error al insertar categoría: " . $e->getMessage(), );
                }
            }
        }

        if ($categoriasRegistradas > 0) {
            for ($i = 2; $i <= $numeroFilasProductos; $i++) {
                $codigo_producto = $hojaProductos->getCell([1, $i])->getValue();
                $id_categoria_producto = ProductsModel::mdlBuscarIdCategoria($hojaProductos->getCell([2, $i])->getValue());
                $descripcion_producto = $hojaProductos->getCell([3, $i])->getValue();
                $precio_compra_producto = $hojaProductos->getCell([4, $i])->getValue();
                $precio_venta_producto = $hojaProductos->getCell([5, $i])->getValue();
                $utilidad = $hojaProductos->getCell([6, $i])->getCalculatedValue();
                $stock_producto = $hojaProductos->getCell([7, $i])->getValue();
                $minimo_stock_producto = $hojaProductos->getCell([8, $i])->getValue();
                $ventas_producto = $hojaProductos->getCell([9, $i])->getValue();
                $fecha_actualizacion_producto = date('Y-m-d');
                logError("Codigo producto: " . $codigo_producto . " Id categoria: " . $id_categoria_producto['id_categoria'] . " Descripcion: " . $descripcion_producto . " Precio compra: " . $precio_compra_producto . " Precio venta: " . $precio_venta_producto . " Utilidad: " . $utilidad . " Stock: " . $stock_producto . " Minimo stock: " . $minimo_stock_producto . " Ventas: " . $ventas_producto . " Fecha actualizacion: " . $fecha_actualizacion_producto);


                if (!empty($codigo_producto)) {
                    $stmt = Conexion::conectar()->prepare("INSERT INTO productos(codigo_producto,
                                                                                id_categoria_producto,
                                                                                descripcion_producto,
                                                                                precio_compra_producto,
                                                                                precio_venta_producto,
                                                                                utilidad,
                                                                                stock_producto,
                                                                                minimo_stock_producto,
                                                                                ventas_producto,
                                                                                fecha_actualizacion_producto)
                                                                        values(:codigo_producto,
                                                                                :id_categoria_producto,
                                                                                :descripcion_producto,
                                                                                :precio_compra_producto,
                                                                                :precio_venta_producto,
                                                                                :utilidad,
                                                                                :stock_producto,
                                                                                :minimo_stock_producto,
                                                                                :ventas_producto,
                                                                                :fecha_actualizacion_producto);");

                    $stmt->bindParam(":codigo_producto", $codigo_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":id_categoria_producto", $id_categoria_producto['id_categoria'], PDO::PARAM_STR);
                    $stmt->bindParam(":descripcion_producto", $descripcion_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":precio_compra_producto", $precio_compra_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":precio_venta_producto", $precio_venta_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":utilidad", $utilidad, PDO::PARAM_STR);
                    $stmt->bindParam(":stock_producto", $stock_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":minimo_stock_producto", $minimo_stock_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":ventas_producto", $ventas_producto, PDO::PARAM_STR);
                    $stmt->bindParam(":fecha_actualizacion_producto", $fecha_actualizacion_producto, PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        $productosRegistrados++;
                    } else {
                        //$productosRegistrados = 0;
                    }
                }
            }
            return array("categoriasRegistradas" => $categoriasRegistradas, "productosRegistrados" => $productosRegistrados);

        }




    }


    static public function mdlBuscarIdCategoria($nombreCategoria)
    {

        $stmt = Conexion::conectar()->prepare("select id_categoria from categorias where nombre_categoria = :nombreCategoria");
        $stmt->bindParam(":nombreCategoria", $nombreCategoria, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }


    static public function mdlListarProductos()
    {
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductos()');
        $stmt->execute();

        return $stmt->fetchAll();
    }




    static public function mdlRegistrarProducto($codigo_producto, $id_categoria_producto, $descripcion_producto, $precio_compra_producto, $precio_venta_producto, $utilidad, $stock_producto, $minimo_stock_producto, $ventas_producto)
    {
        try {
            $fecha = date('Y-m-d');
            //$stmt = Conexion::conectar()->prepare('call prc_RegistrarProducto(:codigo_producto, :id_categoria_producto, :descripcion_producto, :precio_compra_producto, :precio_venta_producto, :utilidad, :stock_producto, :minimo_stock_producto, :ventas_producto)');
            logError("Codigo producto: " . $codigo_producto . " Id categoria: " . $id_categoria_producto . " Descripcion: " . $descripcion_producto . " Precio compra: " . $precio_compra_producto . " Precio venta: " . $precio_venta_producto . " Utilidad: " . $utilidad . " Stock: " . $stock_producto . " Minimo stock: " . $minimo_stock_producto);
            $stmt = Conexion::conectar()->prepare('INSERT INTO productos(codigo_producto,
                id_categoria_producto,
                descripcion_producto,
                precio_compra_producto,
                precio_venta_producto,
                utilidad, stock_producto,
                minimo_stock_producto,
                ventas_producto,
                fecha_creacion_producto,
                fecha_actualizacion_producto)
                
                VALUES (
                    :codigo_producto,
                    :id_categoria_producto,
                    :descripcion_producto,
                    :precio_compra_producto,
                    :precio_venta_producto,
                    :utilidad,
                    :stock_producto,
                    :minimo_stock_producto,
                    :ventas_producto,
                    :fecha_creacion_producto,
                    :fecha_actualizacion_producto
                )');
            $stmt->bindParam(":codigo_producto", $codigo_producto, PDO::PARAM_STR);
            $stmt->bindParam(":id_categoria_producto", $id_categoria_producto, PDO::PARAM_STR);
            $stmt->bindParam(":descripcion_producto", $descripcion_producto, PDO::PARAM_STR);
            $stmt->bindParam(":precio_compra_producto", $precio_compra_producto, PDO::PARAM_STR);
            $stmt->bindParam(":precio_venta_producto", $precio_venta_producto, PDO::PARAM_STR);
            $stmt->bindParam(":utilidad", $utilidad, PDO::PARAM_STR);
            $stmt->bindParam(":stock_producto", $stock_producto, PDO::PARAM_STR);
            $stmt->bindParam(":minimo_stock_producto", $minimo_stock_producto, PDO::PARAM_STR);
            $stmt->bindParam(":ventas_producto", $ventas_producto, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_creacion_producto", $fecha, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_actualizacion_producto", $fecha, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $resultado = "ok";
            } else {
                $resultado = "error";
            }
        } catch (Exception $e) {
            $resultado = "Excepcion capturada: " . $e->getMessage();
        }
        $stmt = null;
        logError("Resultado: " . $resultado);
        return $resultado;

    }

    static public function mdlActualizarInfo($table, $data, $id, $nameId) {
        $setParts = [];
        foreach ($data as $key => $value) {
            $setParts[] = "$key = :$key";
        }
        $set = implode(', ', $setParts);

        logError("Set: " . $set);
        $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :idParam");
    
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $stmt->bindValue(":idParam", $id, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "ok";
        } else {
            return Conexion::conectar()->errorInfo();
        }
    }



}
