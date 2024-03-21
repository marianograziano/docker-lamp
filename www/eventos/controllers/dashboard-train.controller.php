<? 

class DashboardTrainController{
    static public function ctrGetDatosDashboardTrain(){
        //$tabla = "dashboard_train";
        $datos = DashboardTrainModel::mdlGetDatosDashboardTrain();
        return $datos; 
        //return $respuesta;
    }
    static public function ctrGetVentasMesActual(){
        $ventasMesActual = DashboardTrainModel::mdlGetVentasMesActual();

        return $ventasMesActual;
    }


    static public function ctrGetProductosMasVendidos(){
        $productosMasVendidos = DashboardTrainModel::mdlgetProductosMasVendidos();

        return $productosMasVendidos;
    }

    static public function ctrGetProductosMenosStock() {
        $productosMenosStock = DashboardTrainModel::mdlGetProductosMenosStocks();

        return $productosMenosStock;
    }
}