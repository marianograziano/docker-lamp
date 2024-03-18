<? 

class Conexion{
    static public function conectar(){
        try {
            $conn = mysqli_connect('db', 'root', 'test', "market-pos");
            return $conn;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}