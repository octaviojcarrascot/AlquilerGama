<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 menu_lateral">

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="vistas/assets/dist/img/carro68.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ALQUILER COCHERA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vistas/assets/dist/img/crearusuario.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Luis Lozano</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                         Menú del Sistema
                          <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/usuario.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                          <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/propietario.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Propietarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/cargar.cochera.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registro Cochera</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/alquiler.cochera.gama.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alquiler Cochera</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a onclick="cargarContenido('content-wrapper','vistas/modulos/infraccion.php')" class="nav-link" style="cursor: pointer;">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cargar Infracción</p>
                            </a>
                        </li>

                    </ul>

                </li>
                
            </ul>

            <ul class="nav nav-pills nav-sidebar nav_profile">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>                        
                        <p>
                            Cerrar Sesion
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>