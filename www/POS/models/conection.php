
<? 

class Conexion{

    static public function conectar(){
        try {
            $conn = new PDO("mysql:host=db;dbname=market-pos", "root", "test", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch (PDOException $e) {
            throw new PDOException('Falló la conexión: ' . $e->getMessage());
        }

    }
}