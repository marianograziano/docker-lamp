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

                <img src="views/assets/images/loading.gif" id="img_carga" style="display:none;">

            </div>
        </div>
    </div>
</div>

</div>


<script>
    // Espera a que el documento HTML se haya cargado completamente antes de ejecutar la función.
    $(document).ready(function () {
        // Selecciona el formulario con el ID 'formCargaMasivaProductos' y establece un controlador de evento para el evento 'submit'.
        $("#formCargaMasivaProductos").on("submit", function (e) {
            // Previene la acción por defecto del evento, en este caso, la acción de enviar el formulario.
            e.preventDefault();
            // Validar que se seleccione un archivo 
            if ($("#fileProductos").get(0).files.length == 0) {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar un archivo',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                // validar que se seleccione un archivo con extensión .xls o .xlsx
                var extensiones_permitidas = [".xls", ".xlsx"];
                var input_file_productos = $("#fileProductos");
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + extensiones_permitidas.join('|') + ")$");

                if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'El archivo seleccionado debe ser xls o xlsx',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }

                // Crear un objeto FormData para enviar los datos del formulario

                var datos = new FormData($(formCargaMasivaProductos)[0]);

                $('#btnCargar').prop('disabled', true);
                $('#img_carga').attr('style', 'display:block');
                $('#img_carga').attr('style', 'height:200px');
                $('#img_carga').attr('style', 'width:200px');


                // ajax para enviar el archivo al servidor
                $.ajax({
                    url: "ajax/productos.ajax.php",
                    type: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function (respuesta) {
                        console.log("Respuesta ", respuesta);
                        console.log("Total categorias ", respuesta['categoriasRegistradas']);
                        console.log("Total productos ", respuesta['productosRegistrados']);

                        $("#img_carga").attr("style", "display:none");



                        if ((respuesta['categoriasRegistradas'] > 0) && (respuesta['productosRegistrados'] > 0)) {

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Se registraron ' + respuesta['categoriasRegistradas'] + ' categorias y ' + respuesta['productosRegistrados'] + ' productos',
                                showConfirmButton: false,
                                timer: 2500
                            })
                            $("#btnCargar").prop("disabled", false);
                            $("#img_carga").attr("style", "display:none");
                            
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'se presento un error al momento',
                                showConfirmButton: false,
                                timer: 2500
                            })
                            $("#btnCargar").prop("disabled", false);
                        }








                    }
                })

            }
        })
    })

</script>