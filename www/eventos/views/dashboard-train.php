<div>



    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-sm-6">
            </div><!-- /.col -->

            <div class="row">
                <!-- FILA TARJETAS INFO -->
                <div class="col-lg-2">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 id="totalProductos"></h3>
                            <p>Total Productos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="totalCompras"><sup style="font-size: 20px">%</sup></h3>
                            <p>Total Compras</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- TOTAL VENTAS -->
                <div class="col-lg-2">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3 id="totalVentas"></h3>
                            <p>Total Ventas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- TOTAL GANANCIAS -->
                <div class="col-lg-2">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="ganancias">65</h3>
                            <p>Ganancias</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- TOTAL PRODUCTOS POCO STOCK -->
                <div class="col-lg-2">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3 id="productosPocoStock"></h3>
                            <p>Productos Poco Stock</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3 id="ventasHoy"></h3>
                            <p>Ventas Hoy</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Info<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row tarjetitas-->
            <div class="row">
                <!-- VENTAS MES -->
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title" id="ventas_mes"></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                    style="height: 300px; min-height: 250px; max-height: 350px; display: block; width: 100%;"></canvas>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- /.col -->
            <!-- /.row VENTAS MES-->
            <div class="row">
                <!-- CARD PRODUCTOS MAS VENDIDOS -->
                <div class="col-lg-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Los 10 productos mas vendidos</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> <!-- ./ end card-tools -->
                        </div> <!-- ./ end card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tbl_productos_mas_vendidos">
                                    <thead>
                                        <th>Cod Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Ventas</th>

                                    </thead>
                                    <tbody>
</tbody>
                                </table>
                            </div>
                        </div>
                        <!-- ./ end card-body -->
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Listado productos poco stock</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> <!-- ./ end card-tools -->
                        </div> <!-- ./ end card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tbl_productos_poco_stock">
                                    <thead>
                                        <th>Cod Producto</th>
                                        <th>Producto</th>
                                        <th>Stock Actual</th>
                                        <th>Minimo Stock</th>

                                    </thead>
<tbody>
</tbody>
                                </table>
                            </div>
                        </div>
                        <!-- ./ end card-body -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->

<!-- Main content -->

<!-- /.content -->

<script>

 // TARJETAS INICIO 
    $.ajax({
        url: "ajax/dashboard-train.ajax.php",
        method: 'POST',
        dataType: "json",
        success: function (response) {
        //    console.log("response", response);
            $("#totalProductos").html(response[0].totalProductos);
            $('#totalCompras').html('$ ' + response[0].totalCompras.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
            $('#totalVentas').html('$ ' + response[0].totalVentas.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
            $('#ganancias').html('$ ' + response[0].ganancias.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
            $('#productosPocoStock').html(response[0].productosPocoStock);
            $('#ventasHoy').html('$ ' + response[0].ventasHoy.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
        }
    })
// ACTUALIZACION CADA 10 SEGS
    setInterval(function () {
        $.ajax({
            url: "ajax/dashboard-train.ajax.php",
            method: 'POST',
            dataType: "json",
            success: function (response) {
              //  console.log("response", response);
                $("#totalProductos").html(response[0].totalProductos);
                $('#totalCompras').html('$ ' + response[0].totalCompras.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
                $('#totalVentas').html('$ ' + response[0].totalVentas.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
                $('#ganancias').html('$ ' + response[0].ganancias.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
                $('#productosPocoStock').html(response[0].productosPocoStock);
                $('#ventasHoy').html('$ ' + response[0].ventasHoy.replace(/\d(?=( \d{3})+\.)/g, "$&,"));
            }
        })
    }, 10000);
// VENTAS DEL MES
    $.ajax({
        url: "ajax/dashboard-train.ajax.php",
        method: 'POST',
        data: {
            'accion': 1 //  parametro para obteer ventas del mes
        },
        dataType: "json",
        success: function (response) {
            console.log("response", response);
            var fecha_venta = [];
            var total_venta = [];
            var total_ventas_mes = 0;


            for (var i = 0; i < response.length; i++) {
                fecha_venta.push(response[i]['fecha_venta']);
                total_venta.push(response[i]['total_venta']);
                total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(response[i]['total_venta'])
            }
            console.log(total_ventas_mes)
            $("#ventas_mes").html('Ventas del Mes  $ ' + total_ventas_mes.toString().replace(/\d(?=( \d{3})+\.)/g, "$&,"));


            var BarChartCanvas = $('#barChart').get(0).getContext('2d');

            var areaChartData = {
                labels: fecha_venta,
                datasets: [
                    {
                        label: 'Ventas del Mes',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: total_venta
                    }
                ]
            }
            var barChartData = $.extend(true, {}, areaChartData);
            var temp0 = areaChartData.datasets[0];
            barChartData.datasets[0] = temp0;
            var barChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                events: false,
                legend: {
                    display: true
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                    onComplete: function () {
                        var ctx = this.chart.ctx;
                        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';

                        this.data.datasets.forEach(function (dataset) {
                            for (var i = 0; i < dataset.data.length; i++) {
                                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                ctx.fillStyle = '#444';

                                var y_pos = model.y - 5;

                                // Make sure data value does not get overFlow and hidden
                                // When the bar's value is too clase to max value of scale
                                // Note: The y value is reverse, it counts from top down

                                if ((scale_max - model.y) / scale_max >= 0.93) {
                                    y_pos = model.y + 20;
                                }

                                ctx.fillText(dataset.data[i], model.x, y_pos);
                            }
                        });
                    }
                }
            }
            new Chart(BarChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

        }
    })
//  PRODUCTOS MAS VENDIDOS 
    $.ajax({
        url: "ajax/dashboard-train.ajax.php",
        method: 'POST',
        data: {
            'accion': 2//  listas 10 productos mas vendidos
        },
        dataType: "json",
        success: function (response) {
            console.log("response", response);
            for (let i = 0; i < response.length; i++) {
                filas = '<tr>' + 
            '<td>' + response[i]['codigo_producto'] + '</td>' +
            '<td>' + response[i]['descripcion_producto'] + '</td>' +
            '<td>' + response[i]['cantidad'] + '</td>' +
            '<td>' + response[i]['total_venta'] + '</td>' +
            '</tr>';
            $('#tbl_productos_mas_vendidos tbody').append(filas);
            }
       
        }
    })
//  PRODUCTOS MENOS STOCK 
$.ajax({
        url: "ajax/dashboard-train.ajax.php",
        method: 'POST',
        data: {
            'accion': 3//  listas 10 productos mas vendidos
        },
        dataType: "json",
        success: function (response) {
            console.log("response", response);
            for (let i = 0; i < response.length; i++) {
                filas = '<tr>' + 
            '<td>' + response[i]['codigo_producto'] + '</td>' +
            '<td>' + response[i]['descripcion_producto'] + '</td>' +
            '<td>' + response[i]['stock_producto'] + '</td>' +
            '<td>' + response[i]['minimo_stock_producto'] + '</td>' +
            '</tr>';
            $('#tbl_productos_poco_stock tbody').append(filas);
            }
        }})
</script>