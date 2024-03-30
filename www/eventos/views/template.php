<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LU1QA - Gestor de Eventos</title>
  <!-- CSS -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/dist/css/template.css">
  <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">


  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- AdminLTE App -->
  <script src="views/assets/dist/js/adminlte.min.js"></script>
  <!-- Chart -->
  <script src="views/assets/plugins/chart.js/Chart.min.js"></script>

  <!-- SweetAlert2 -->
  <script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    
  <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

        <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

</head>




<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include "modules/navbar.php";
    include "modules/aside.php";
    ?>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

   <!-- Content Header (Page header) -->
  <?php include "views/productos.php"; ?>
  </div>
  <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <?php
    include "modules/footer.php";

    ?>

  </div>
  <!-- ./wrapper -->
  <script>
    function LoadTemplate(php_page, container) {
      $("." + container).load(php_page);
      console.log("Template Loaded");
    }
  </script>

  <!-- REQUIRED SCRIPTS -->


</body>

</html>