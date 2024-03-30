<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="views/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LU1QA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/dashboard.php', 'content-wrapper')">
                        <i class="nav-icon fas fa-th active"></i>
                        <p>
                            Tablero
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/dashboard-train.php', 'content-wrapper')">
                        <i class="nav-icon fas fa-th active"></i>
                        <p>
                            Tablero
                            <span class="right badge badge-danger">Train</span>
                        </p>
                    </a>
                </li>

                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Eventos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/newevents.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nuevo Evento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/events.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Eventos en Curso</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/users.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a style="cursor: pointer;" class="nav-link" onclick="LoadTemplate('views/config.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Configuración</p>
                            </a>
                        </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    $(".nav-link").on('click', function(){
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    });
</script>
