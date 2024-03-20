<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

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
  <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/dist/js/adminlte.min.js"></script>
  <!-- Chart -->
  <script src="views/assets/plugins/chart.js/Chart.min.js"></script>

  <!-- SweetAlert2 -->
  <script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- JS Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
      <?php include "views/dashboard-train.php"; ?>
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