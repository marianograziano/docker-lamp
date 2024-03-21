<? 
require_once 'eventos/models/conection.php';

try {
    $db = Conexion::conectar();
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}