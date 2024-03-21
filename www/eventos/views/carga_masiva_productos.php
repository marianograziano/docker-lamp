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

<!-- <script>
    $(document).ready(function () {
        console.log("Documento listo");

        $('#formCargaMasivaProductos').submit(function (e) {
            e.preventDefault();
            console.log("Formulario enviado");

            if ($("#fileProductos").get(0).files.length == 0) {
                console.log("No se seleccionó archivo");
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar un archivo',
                    showConfirmButton: false,
                    timer: 2500
                });
            } else {
                console.log("Archivo seleccionado");
                var extensiones_permitidas = [".xls", ".xlsx"];
                var input_file_productos = $("#fileProductos");
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + extensiones_permitidas.join('|') + ")$");
                console.log("Expresión Regular: ", exp_reg);
                console.log("Valor input_file_productos: ", input_file_productos.val());

                if (!exp_reg.test(input_file_productos.val().toLowerCase())) {
                    console.log("Extensión de archivo no permitida");
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'El archivo seleccionado no es válido',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }

                var datos = new FormData($(this)[0]);
                console.log("Datos del formulario preparados");

                $("#btnCargar").prop("disabled", true);
                $("#img_carga").css("display", "block");
                console.log("Botón cargar deshabilitado y GIF de carga visible");

                $.ajax({
                    url: "ajax/productos.ajax.php",
                    type: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log("Respuesta AJAX recibida: ", data);
                        console.log("Respuesta AJAX recibida typo: ", typeof (data));


                        // Utilizamos una expresión regular para encontrar dígitos entre paréntesis
                        let resultado = data.match(/\((\d+)\)/);

                        // resultado es un arreglo donde la primera coincidencia está en el índice 1
                        let cant_categorias = resultado ? parseInt(resultado[1], 10) : null;




                        if (cant_categorias > 0) {
                            console.log("Entro");
                        } else {
                            console.log("No entro");
                        }
                        if (cant_categorias > 0) {
                            console.log("Data" + data);
                            console.log("Carga exitosa");
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Carga Exitosa',
                                showConfirmButton: false,
                                timer: 2500,
                            });

                            $("#btnCargar").prop("disabled", false);
                            $("#img_carga").css("display", "none");
                        } else {
                            console.log("Data" + data);
                            console.log("Error en la carga");
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'Error al cargar el archivo',
                                showConfirmButton: false,
                                timer: 2500
                            });
                            $("#btnCargar").prop("disabled", false);
                            $("#img_carga").css("display", "none");
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Error en AJAX:", textStatus, errorThrown);
                        $("#btnCargar").prop("disabled", false);
                        $("#img_carga").css("display", "none");
                    }
                });
            }
        });
    });
</script> -->
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
               
                if(!exp_reg.test(input_file_productos.val().toLowerCase())){
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'El archivo seleccionado no es válido',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    return false;
                }

                
            }




        })
    });