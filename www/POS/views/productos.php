<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario / Productos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario / Productos</li>
                </ol>
            </div>
        </div>

    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <!-- Row para criterios de busqueeda  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Criterios de Busqueda</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool text-danger   " id="btnLimpiarBusqueda">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                    <label for="iptCodigoBarras">Código de Barras</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                    <label for="iptCategoria">Categoria</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptProducto" class="form-control" data-index="5">
                                    <label for="iptProducto">Producto</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptPrecioVentaDesde" class="form-control">
                                    <label for="iptPrecioVentaDesde">Precio Venta Desde</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptPrecioVentaHasta" class="form-control">
                                    <label for="iptPrecioVentaHasta">Precio Venta Hasta</label>
                                </div>
                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>
        <!-- Row para tabla de productos  -->
        <div class="row">
            <div class="col-lg-12">
                <table id="tbl_productos" class="table table-striped w-100 shadow">
                    <thead>
                        <tr>
                            <th></th> <!-- vacio para que sea responsivo !-->
                            <th>id</th>
                            <th>Codigo</th>
                            <th>Id Categoria</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>P. Compra</th>
                            <th>P. Venta</th>
                            <th>Utilidad</th>
                            <th>Stock</th>
                            <th>Min Stock</th>
                            <th>Ventas</th>
                            <th>Fecha Creacion</th>
                            <th>Fecha Actualizacion</th>
                            <th class="text-center">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</div>

<div class="modal fade" id="mdlGestionarProducto" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Gestionar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-dismiss="modal"
                    id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Columna para registro de codigo de barras -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptCodigoReg">
                                <span class="small">Codigo de barras</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" name="iptCodigoReg"
                                id="iptCodigoReg" placeholder="Codigo de barras" required>
                            <span id="validate_codigo" class="text-danger smal fst-italic" style="display: none;">Debe
                                ingresar el codigo de barras</span>
                        </div>
                    </div>
                    <!-- Columna para registro de categoria de producto -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="selCategoriaReg">
                                <i class="fas fa-dumpster fs-6"></i>
                                <span class="small">Categoria</span>
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" arial-label=".form-select-sm example"
                                id="selCategoriaReg">

                                <span id="validate_categoria" class="text-danger smal fst-italic"
                                    style="display: none;">Debe
                                    ingresar la categoria</span>
                            </select>
                        </div>
                    </div>

                    <!-- Columna para registro de Descripcion -->

                    <div class="col-12 col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptDescripcionReg">
                                <i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Descripción</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" name="iptDescripcionReg"
                                id="iptDescripcionReg" placeholder="Descripción" required>
                            <span id="validate_descripcion" class="text-danger smal fst-italic"
                                style="display: none;">Debe
                                ingresar la descripcion</span>
                        </div>
                    </div>

                    <!-- Columna para registro de precio de compra -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioCompraReg">
                                <i class="fas fa-money-bill-wave fs-6"></i>
                                <span class="small">Precio de Compra</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control form-control-sm"
                                name="iptPrecioCompraReg" id="iptPrecioCompraReg" placeholder="Precio de Compra"
                                required>
                            <span id="validate_precio_compra" class="text-danger smal fst-italic"
                                style="display: none;">Debe
                                ingresar el precio de compra
                            </span>
                        </div>
                    </div>

                    <!-- Columna para registro de precio de venta -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptPrecioVentaReg">
                                <i class="fas fa-money-bill-wave fs-6"></i>
                                <span class="small">Precio de Venta</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control form-control-sm" name="iptPrecioVentaReg"
                                id="iptPrecioVentaReg" placeholder="Precio de Venta" required>
                            <span id="validate_precio_venta" class="text-danger smal fst-italic"
                                style="display: none;">Debe
                                ingresar el precio de venta
                            </span>
                        </div>
                    </div>

                    <!-- Columna para el calculo de Utilidad-->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="iptUtilidadReg">
                                <i class="fas fa-money-bill-wave fs-6"></i>
                                <span class="small">Utilidad</span>

                            </label>
                            <input type="number" class="form-control form-control-sm" name="iptUtilidadReg"
                                id="iptUtilidadReg" placeholder="Utilidad" disabled>

                        </div>
                    </div>

                    <!-- Columna para el ingreso de Stock-->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockReg">
                                <i class="fas fa-plus-circle fs-6"></i>
                                <span class="small">Stock</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control form-control-sm" name="iptStockReg"
                                id="iptStockReg" placeholder="Stock" required>
                            <span id="validate_stock" class="text-danger smal fst-italic" style="display: none;">Debe
                                ingresar la cantidad de stock </span>
                        </div>
                    </div>
                    <!-- Columna para el ingreso de Stock Minimo-->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="iptMinimoStockReg">
                                <i class="fas fa-minus-circle fs-6"></i>
                                <span class="small">Minimo Stock</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control form-control-sm" name="iptMinimoStockReg"
                                id="iptMinimoStockReg" placeholder="Minimo Stock" required>
                            <span id="validate_min_stock" class="text-danger smal fst-italic"
                                style="display: none;">Debe
                                ingresar la cantidad minima de stock </span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-3 mx-2" style="width:170px;" id="btnGuardarProducto"
                        onclick="formSubmitClick()">Guardar</button>

                    <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" id="btnCancelarRegistro"
                        data-dismiss="modal">Cancelar</button>



                </div>
            </div>
        </div>
    </div>
</div>


<script>

var accion;
var table;
var Toast = Swal.mixin({
     toast: true,
     position: 'top',
     showConfirmButton: false,
     timer: 3000,
})


    $(document).ready(function () {



        $.ajax({
            url: "ajax/productos.ajax.php",
            type: "POST",
            data: { 'accion': 1 }, // 1 Listar producto
            dataType: "json",
            success: function (respuesta) {
                //console.log("respuesta primer document ready", respuesta);
            }
        })


        // CARGA DE CATEGORIAS EN EL SELECT DE REGISTRO DE PRODUCTOS
        $.ajax({
            url: "ajax/categorias.ajax.php",
            cache: false,
            dataType: "json",
            success: function (respuesta) {
                var options = '<option selected value="0">Seleccione una categoria</option>';

                for (let index = 0; index < respuesta.length; index++) {
                    options += '<option value="' + respuesta[index].id_categoria + '">' + respuesta[index].nombre_categoria + '</option>';
                }

                $("#selCategoriaReg").html(options);
            }
        });


        // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
        table = $("#tbl_productos").DataTable({
            // dom: 'Bfrtip',
            dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" + "rtip",
            buttons: [
                {
                    text: 'Agregar Producto',
                    className: 'addNewRecord',
                    action: function (e, dt, node, config) {
                        $("#mdlGestionarProducto").modal('show');
                        accion = 2;
                    }
                },
                'excel',
                'print', 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,

            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: { 'accion': 1 }, //

            },
            responsive: {
                iptPrecioVentaReg,
                details: {
                    type: 'column'
                }
            },
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    className: 'control',
                },
                {
                    targets: 1,
                    visible: false,
                },
                {
                    targets: 3,
                    visible: false,
                },
                {
                    targets: 9,
                    createdCell: function (td, cellData, rowData, row, col) {
                        if (parseFloat(rowData[9]) <= parseFloat(rowData[10])) {
                            $(td).parent().css('background', "#FF5733")
                        }
                    }
                },
                {
                    targets: 11,
                    visible: false,
                },
                {
                    targets: 13,
                    visible: false,
                },
                {
                    targets: 12,
                    visible: false,
                },
                {
                    targets: 14,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer'>" +
                            "<i class='fas fa-pencil-alt' fs-5'></i>" +
                            "</span>" +
                            "<span class='btnAumentarStock text-success px-1' style='cursor:pointer'>" +
                            "<i class='fas fa-plus-circle' fs-5'></i>" +
                            "</span>" +
                            "<span class='btnAumentarStock text-warning px-1' style='cursor:pointer'>" +
                            "<i class='fas fa-minus-circle' fs-5'></i>" +
                            "</span>" +

                            "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer'>" +
                            "<i class='fas fa-trash' fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                },
            ],
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json',
            },
        });



        // EVENTOS PARA CRITERIOS DE BUSQUEDA CODIGO CATEGIRA Y PRODUCTO. #

        $("#iptCodigoBarras").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptCategoria").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptProducto").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })
        $("#iptPrevioVentaDesde, #iptPrecioVentaHasta").keyup(function () {
            table.draw();

        })

        $.fn.DataTable.ext.search.push(

            function (settings, data, dataIndex) {

                var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
                var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());
                var col_venta = parseFloat(data[7]) || 0;

                console.log(precioDesde, precioHasta);

                if ((isNaN(precioDesde) && isNaN(precioHasta)) ||
                    (isNaN(precioDesde) && col_venta <= precioHasta) ||
                    (precioDesde <= col_venta && isNaN(precioHasta)) ||
                    (precioDesde <= col_venta && col_venta <= precioHasta)
                ) {
                    return true;
                }

                return false;
            }
        )

        $("#btnLimpiarBusqueda").on("click", function () {
            $("#iptCodigoBarras, #iptCategoria, #iptProducto, #iptPrecioVentaDesde, #iptPrecioVentaHasta").val("");
            table.search("").columns().search("").draw();

        })

        // Limpiar campos al cancelar modal de registro de productos
        $("#btnCancelarRegistro, #btnCerrarModal").on("click", function () {
            console.log("CodigoReg antes:", $("#iptCodigoReg").val());
            $("#iptCodigoReg").val("");

            console.log("selCategoriaReg antes:", $("#selCategoriaReg").val());
            $("#selCategoriaReg").val("0");

            console.log("DescripcionReg antes:", $("#iptDescripcionReg").val());
            $("#iptDescripcionReg").val("");

            $("#iptPrecioCompraReg").val("");

            $("#iptPrecioVentaReg").val("");

            $("#iptUtilidadReg").val("");

            $("#iptStockReg").val("");

            $("#iptMinimoStockReg").val("");


            $("#validate_codigo, #validate_categoria, #validate_descripcion, #validate_precio_compra, #validate_precio_venta, #validate_stock, #validate_min_stock").css("display", "none");

        });


        // EVENTO PARA CALCULAR UTILIDAD

        $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function () {
            calcularUtilidad()

        });

        $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function () {
            calcularUtilidad()

        });


    }
    )

    function calcularUtilidad() {
        var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
        var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
        console.log("iptPrecioCompraReg", iptPrecioCompraReg);
        console.log("iptPrecioVentaReg", iptPrecioVentaReg);
        var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;
        console.log("Utilidad", Utilidad);
        $("#iptUtilidadReg").val(Utilidad.toFixed(2));

    }

    function formSubmitClick() {
        // validar ingreso de campos o inputs

        Swal.fire({
            title: "Esta seguro que desea agregar el producto",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Guardar',
            cancelButtonText: 'Cancelar',

        }).then((result) => {
            if (result.isConfirmed) {
                var datos = new FormData();
                datos.append("accion", accion);
                datos.append("codigo_producto", $("#iptCodigoReg").val());
                datos.append("id_categoria_producto", $("#selCategoriaReg").val());
                datos.append("descripcion_producto", $("#iptDescripcionReg").val());
                datos.append("precio_compra_producto", $("#iptPrecioCompraReg").val());
                datos.append("precio_venta_producto", $("#iptPrecioVentaReg").val());
                datos.append("utilidad", $("#iptUtilidadReg").val());
                datos.append("stock_producto", $("#iptStockReg").val());
                datos.append("minimo_stock_producto", $("#iptMinimoStockReg").val());
                datos.append("ventas_producto", 0);






                // AJAX para registrar producto
                $.ajax({
                    url: "ajax/productos.ajax.php",
                    type: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function (respuesta) {
                        console.log("respuesta", respuesta);
                        if (respuesta == "ok") {
                            Toast.fire({
                                icon: 'success',
                                title: 'Producto registrado correctamente'
                            })

                            table.ajax.reload();
                            $("#mdlGestionarProducto").modal('hide');
                            $("#iptCodigoReg").val("");
                            $("#selCategoriaReg").val("0");
                            $("#iptDescripcionReg").val("");
                            $("#iptPrecioCompraReg").val("");
                            $("#iptPrecioVentaReg").val("");
                            $("#iptUtilidadReg").val("");
                            $("#iptStockReg").val("");
                            $("#iptMinimoStockReg").val("");


                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Error al registrar el producto'
                            })
                        }
                    }
                })
            }

        })


    }


</script>