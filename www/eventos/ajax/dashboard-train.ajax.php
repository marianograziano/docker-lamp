<?
require_once "../controllers/dashboard-train.controller.php";
require_once "../models/dashboard-train.model.php";
class AjaxDashboardTrain{
    public function getDatosDashboardTrain() {
        $datos = DashboardTrainController::ctrGetDatosDashboardTrain();
        echo json_encode($datos);
    }
    }

    $datos = new AjaxDashboardTrain();
    $datos -> getDatosDashboardTrain();
