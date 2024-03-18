<? 

class DashboardTrainController{
    static public function ctrGetDatosDashboardTrain(){
        //$tabla = "dashboard_train";
        $datos = DashboardTrainModel::mdlGetDatosDashboardTrain();

        return $datos; 
        //return $respuesta;
    }
}