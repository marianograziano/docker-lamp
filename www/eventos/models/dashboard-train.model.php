<? 

require_once "conection.php";
class DashboardTrainModel{
    static public function mdlGetDatosDashboardTrain(){
        $query = 'call prc_ObtenerDatosDashboard()';
        $result = mysqli_query(Conexion::conectar(), $query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function mdlGetVentasMesActual(){
        $query = 'call prc_ObtenerVentasMesActual()';
        $result = mysqli_query(Conexion::conectar(), $query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static public function mdlGetProductosMasVendidos(){
        $query = 'call prc_ListarProductosMasVendidos()';
        $result = mysqli_query(Conexion::conectar(), $query);
        return $result->fetch_all(MYSQLI_ASSOC);
     }

     static public function mdlGetProductosMenosStocks(){
        $query = 'call prc_ListarProductosPocoStock()';
        $result = mysqli_query(Conexion::conectar(), $query);
        return $result->fetch_all(MYSQLI_ASSOC);
     }
}