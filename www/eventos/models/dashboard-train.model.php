<? 

require_once "conection.php";
class DashboardTrainModel{
    static public function mdlGetDatosDashboardTrain(){
        $stmt = Conexion::conectar()->prepare("call prc_ObtenerDatosDashboard()");
        $stmt->execute();
        return $stmt->fetchAll();

    }
}