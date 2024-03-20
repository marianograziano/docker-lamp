<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Carga Masiva</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Carga Masiva</li>
                </ol>
            </div>
        </div>

    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <!-- fila para input file -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Seleccionar Archivo de Carga (Excel)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" id="formCargaMasivaProductos">
                            <div class=" row">

                                <div class="col-lg-10">
                                    <input type="file" name="fileProductos" class="form-control" id="fileProductos"
                                        accept=".xlsx, .xls">
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" id="btnCargar" class="btn btn-primary">Cargar</button>
                                </div>
                        </form>
                    </div>
                </div> <!-- ./ end card-body -->
            </div>

        </div>
        <!-- fila para gif -->
        <div class="row mx-0">
            <div class="col-lg-12 mx-0 text-center">
                
                    <img src="views/assets/images/loading.gif"  id="img_carga" style="display:none;">;

                
            </div>
        </div>
    </div>
</div>

</div>

<script>
    $(document).ready(function () {
        $('#formCargaMasivaProductos').submit(function (e) {
            e.preventDefault();

            // ******
            // VALIDAR QUE SE SELECCIONE UN ARCHIVO 
            // *****

            if ($("#fileProductos").get(0).files.length == 0) {
                Swal.fire({ // sweet alert
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar un archivo',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                var extensiones_permitidas = [".xls", ".xlsx"];
                var input_file_productos = $("#fileProductos")
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + extensiones_permitidas.join('|') + ")$");
                console.log(exp_reg);
                console.log(input_file_productos.val());

                if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
                    Swal.fire({ // sweet alert
                        position: 'center',
                        icon: 'warning',
                        title: 'El archivo seleccionado no es válido',
                        showConfirmButton: false,
                        timer: 2500
                    })
                    return false; 
                }

                var datos = new FormData($(formCargaMasivaProductos)[0]);

            $("#btnCargar").prop("disabled",true);
            $("#img_carga").attr("style","display:block");
            $("#img_carga").attr("style","height: 200px; width: 100px;");



            }
        });
    });
</script>