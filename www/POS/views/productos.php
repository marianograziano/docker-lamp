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
                                    <input type="text" id="iptPrecioVentaDesde" class="form-control" step="0.1">
                                    <label for="iptPrecioVentaDesde">Precio Venta Desde</label>
                                </div>
                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="iptPrecioVentaHasta" class="form-control" step="0.01" >
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

                <form class="needs-validation" novalidate>
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
                                <div class="invalid-feedback">Ingrese el codigo de barras</div>

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
                                    id="selCategoriaReg" required>
                                </select>
                                <div class="invalid-feedback">Seleccione una categoria</div>
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
                                <div class="invalid-feedback">Ingrese la descripción</div>

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
                                <input type="number" class="form-control form-control-sm" name="iptPrecioCompraReg"
                                    id="iptPrecioCompraReg" placeholder="Precio de Compra" step="0.01"
                                     required>
                                <div class="invalid-feedback">Ingrese el precio de compra del producto</div>


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
                                    id="iptPrecioVentaReg" placeholder="Precio de Venta" step="0.01" required>
                                <div class="invalid-feedback">Ingrese el precio de venta del producto</div>


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
                                <div class="invalid-feedback">Ingrese el stock del producto</div>
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
                                <div class="invalid-feedback">Ingrese el stock minimo del producto</div>

                            </div>
                        </div>


                        <button type="button" class="btn btn-primary mt-3 mx-2" style="width:170px;"
                            id="btnGuardarProducto">
                            Guardar
                        </button>

                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            id="btnCancelarRegistro" data-dismiss="modal">Cancelar</button>



                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="mdlGestionarStockLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
                <button type="button" class="btn-close text-white fs-6" data-dismiss="modal" aria-label="Close"
                    id="btnCerrarModalStock">

                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="form-label text-primary d-block">Codigo:<span id="stock_codigoProducto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Producto:<span id="stock_Producto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Stock Actual:<span id="stock_Stock"
                                class="text-secondary"></span></label>
                    </div>
                    <div class="col-lg-12">
                        <label class="" for="iptStockSumar">
                            <i class="fas fa-plus-circle fs-6"></i>
                            <span class="small" id="titulo_modal_label">Stock a sumar</span>
                        </label>
                        <input type="number" min="0" class="form-control form-control-sm" id="iptStockSumar"
                            placeholder="Stock a sumar">
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label text-danger">Nuevo Stock: <span id="stock_nuevoStock"
                                class="text-secondary"></span></label><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnGuardarNuevoStock">Guardar</button>
                <button type="button" class="btn btn-danger" id="btnCancelarRegistroStock"
                    data-dismiss="modal">Cancelar</button>

            </div>

        </div>


        <script>

            var accion;
            var table;
            var operacion_stock = 0;
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
                        var options = '<option selected value="">Seleccione una categoria</option>';

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
                                    "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer'>" +
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

                        // console.log(precioDesde, precioHasta);

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
                    //  console.log("CodigoReg antes:", $("#iptCodigoReg").val());
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



                $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function () {
                    calcularUtilidad()

                });

                $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function () {
                    calcularUtilidad()

                });

                // Click al icono aumentar de una de las filas. 

                $('#tbl_productos tbody').on('click', '.btnAumentarStock', function () {

                    operacion_stock = 1;
                    $("#mdlGestionarStock").modal('show');
                    $("#titulo_modal_stock").html("Aumentar Stock");
                    $("#titulo_modal_label").html("Agregar al stock");
                    $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a agregar al stock");

                    // recuperar info de la fila donde estan los botones 

                    var data = table.row($(this).parents('tr')).data();


                    $("#stock_codigoProducto").html(data[2]);
                    $("#stock_Producto").html(data[5]);
                    $("#stock_Stock").html(data[9]);


                    $("#stock_nuevoStock").html(parseInt($("#stock_Stock").html()));





                });

                // Click al icono de disminuir de una de las filas. 

                $('#tbl_productos tbody').on('click', '.btnDisminuirStock', function () {

                    operacion_stock = 2;
                    $("#mdlGestionarStock").modal('show');
                    $("#titulo_modal_stock").html("Disminuir Stock");
                    $("#titulo_modal_label").html("Disminuir al stock");
                    $("#iptStockSumar").attr("placeholder", "Ingrese cantidad a disminuir al stock");

                    // recuperar info de la fila donde estan los botones 

                    var data = table.row($(this).parents('tr')).data();


                    $("#stock_codigoProducto").html(data[2]);
                    $("#stock_Producto").html(data[5]);
                    $("#stock_Stock").html(data[9]);


                    $("#stock_nuevoStock").html(parseInt($("#stock_Stock").html()));





                });

                // Click al icono de editar de una de las filas.

                $('#tbl_productos tbody').on('click', '.btnEditarProducto', function () {

                    accion = 4;
                    $("#mdlGestionarProducto").modal('show');

                    var data = table.row($(this).parents('tr')).data();

                    $("#iptCodigoReg").val(data[2]);
                    $("#selCategoriaReg").val(data[3]);
                    $("#iptDescripcionReg").val(data[5]);
                    $("#iptPrecioCompraReg").val(data[6]);
                    $("#iptPrecioVentaReg").val(data[7]);
                    $("#iptUtilidadReg").val(data[8]);
                    $("#iptStockReg").val(data[9].replace(' Und(s)', '').replace(' KG(s)', ''));
                    $("#iptMinimoStockReg").val(data[10].replace(' Und(s)', '').replace(' KG(s)', ''));


                });



                // resetear al cancelar o cerrar. 


                $("#btnCancelarRegistroStock, #btnCerrarModalStock").on("click", function () {
                    $("#iptStockSumar").val("");
                    $("#stock_nuevoStock").html(parseInt($("#stock_Stock").html()));
                })

                // Ir sumando en modal registro 

                $("#iptStockSumar").keyup(function () {

                    if (operacion_stock == 1) {
                        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

                            var stockActual = parseFloat($("#stock_Stock").html());
                            var cantidadAgregar = parseFloat($("#iptStockSumar").val());

                            $("#stock_nuevoStock").html(stockActual + cantidadAgregar);

                        } else {

                            Toast.fire({
                                icon: 'warning',
                                title: 'Ingrese un valor mayor a 0'
                            });
                            $("#iptStockSumar").val("");
                            $("#stock_nuevoStock").html(parseInt($("#stock_Stock").html()));


                        }
                    } else {

                        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

                            var stockActual = parseFloat($("#stock_Stock").html());
                            var cantidadAgregar = parseFloat($("#iptStockSumar").val());

                            $("#stock_nuevoStock").html(stockActual - cantidadAgregar);

                        } else {

                            Toast.fire({
                                icon: 'warning',
                                title: 'La cantidad a disminuir no puede ser menor al stock actual'
                            });
                            $("#iptStockSumar").val("");
                            $("#stock_nuevoStock").html(parseInt($("#stock_Stock").html()));



                        }
                    }
                });


                // evento que registra en la bd el aumento o dosminucion de stock 

                $("#btnGuardarNuevoStock").on('click', function () {
                    if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {
                        var nuevoStock = parseFloat($("#stock_nuevoStock").html());
                        codigoProducto = $("#stock_codigoProducto").html();

                        var datos = new FormData();

                        datos.append("accion", 3);
                        datos.append("nuevoStock", nuevoStock);
                        datos.append("codigo_producto", codigoProducto);

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            type: "POST",
                            data: datos,
                            processData: false,
                            contentType: false,  // 1 Listar producto
                            dataType: "json",
                            success: function (respuesta) {
                                //console.log("respuesta primer document ready", respuesta);
                                $('#stock_nuevoStock').html("");
                                $('#iptStockSumar').val("");
                                $('#mdlGestionarStock').modal('hide');
                                table.ajax.reload();

                                Swal.fire({
                                    position: "center",
                                    title: respuesta,
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }
                        })

                    }
                });

            });





            function calcularUtilidad() {
                var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
                var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();

                var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;
                $("#iptUtilidadReg").val(Utilidad.toFixed(2));

            }



            document.getElementById('btnGuardarProducto').addEventListener('click', function () {


                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {

                    if (form.checkValidity() === true) {
                        console.log("Listo para registrar el producto");
                        guardarRegistro();

                    } else {
                        console.log("Faltan campos por llenar")
                        console.log("CodigoReg antes:", $("#iptCodigoReg").val());
                        console.log("selCategoriaReg antes:", $("#selCategoriaReg").val());
                        console.log("DescripcionReg antes:", $("#iptDescripcionReg").val());
                        console.log("PrecioCompraReg antes:", $("#iptPrecioCompraReg").val());
                        console.log("PrecioVentaReg antes:", $("#iptPrecioVentaReg").val());

                    }
                    form.classList.add('was-validated');
                }, false);
            });

            document.getElementById('btnCancelarRegistro').addEventListener('click', function () {
                $(".needs-validation").removeClass('was-validated');
            });

            function guardarRegistro() {
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



if (accion == 2) {
    var titulo_msg = "Producto registrado correctamente"

}


if (accion == 4) {
    var titulo_msg = "Producto registrado correctamente"

}
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
                                        title: titulo_msg,
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