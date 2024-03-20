<?
require_once "../controllers/dashboard-train.controller.php";
require_once "../models/dashboard-train.model.php";
class AjaxDashboardTrain{
    public function getDatosDashboardTrain() {
        $datos = DashboardTrainController::ctrGetDatosDashboardTrain();
        echo json_encode($datos);
    }

    public function getVentasMesActual() {
        $ventasMesActual = DashboardTrainController::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getproductosMasVendindos() {
        $productosMasVendidos = DashboardTrainController::ctrGetProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }

    public function getProductosMenosStock() {
        $productosMenosStock = DashboardTrainController::ctrGetProductosMenosStock();
        echo json_encode($productosMenosStock);
    }


}
    if (isset($_POST["accion"]) && ($_POST["accion"] == 1))  {
        
        $ventasMesActual = new AjaxDashboardTrain();
        $ventasMesActual -> getVentasMesActual();
        } else if (isset($_POST["accion"]) && ($_POST["accion"] == 2)){
            
            $productosMasVendindos = new AjaxDashboardTrain();
            $productosMasVendindos -> getproductosMasVendindos();
            } else if (isset($_POST["accion"]) && ($_POST["accion"] == 3)){
            
                $productosMenosStock = new AjaxDashboardTrain();
                $productosMenosStock -> getproductosMenosStock();
                }
        
        
    else {
    $datos = new AjaxDashboardTrain();
    $datos -> getDatosDashboardTrain();
}
