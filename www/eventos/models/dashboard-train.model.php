<? 

require_once "conection.php";
class DashboardTrainModel{
    static public function mdlGetDatosDashboardTrain(){
        $query = 'call prc_ObtenerDatosDashboard()';
        $result = mysqli_query(Conexion::conectar(), $query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}