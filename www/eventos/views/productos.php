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
                            <button type="button" class="btn btn-tool" data-card-widget="btnLimpiarBusqueda">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
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


<script>

$.ajax({
    url:"ajax/productos.ajax.php",
    type: "POST",
    data: {'accion': 1}, // 1 Listar producto
    dataType: "json",
    success: function (respuesta) {
        console.log("respuesta", respuesta);
    }
})


    $(document).ready(function () {
        var table;
        table = $("#tbl_productos").DataTable({
            dom:'Bfrtip',
            buttons:[
                {
                    text: 'Agregar Producto',
                    className: 'addNewRecord',
                    action: function (e,dt,node,config){
                        alert('Agregar Producto');
                    }
                },
                'excel', 'print', 'pageLength'
            ],
            pageLength:[5,10,15,30,50,100],
            pageLength:10,

            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {'accion': 1}, //

            },
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs:[
                {
                    targets:0,
                    orderable: false, 
                    className: 'control', 
                },
                {
                    targets:1,
                    visible: false,
               },
               {
                    targets:3,
                    visible: false,
               },
                {
                      targets:11,
                      visible: false,
                },
                {
                      targets:13,
                      visible: false,
                },
                {
                      targets:12,
                      visible: false,
                },
                {
                      targets:14,
                      orderable: false,
                      render: function(data, type, full, meta) {
                        return "<center>" +
                        "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer'>" + 
                        "<i class='fas fa-pencil-alt' fs-5'></i>"+
                        "</span>"   +
                        "<span class='btnAumentarStock text-success px-1' style='cursor:pointer'>" + 
                        "<i class='fas fa-plus-circle' fs-5'></i>"+
                        "</span>"   +
                        "<span class='btnAumentarStock text-warning px-1' style='cursor:pointer'>" + 
                        "<i class='fas fa-minus-circle' fs-5'></i>"+
                        "</span>"   +
                        
                        "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer'>" + 
                        "<i class='fas fa-trash' fs-5'></i>"+
                        "</span>"   +
                        "</center>"
                      }
                },
            ],
            language: {
                url: '//cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json',
            },
        });
    });
    

</script>