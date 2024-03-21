<? 
require_once "conection.php";
class DashboardTrainModel{
    static public function mdlGetDatosDashboardTrain(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard()');

        $stmt->execute();
        

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetVentasMesActual(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual()');

        $stmt->execute();

        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetProductosMasVendidos(){
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosMasVendidos()');
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);  
      }

     static public function mdlGetProductosMenosStocks(){
        $stmt = Conexion::conectar()->prepare('call prc_ListarProductosPocoStock()');
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);  
     }
}