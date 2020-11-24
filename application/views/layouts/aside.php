

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background-color: #222cf1">
    <!-- Brand Logo -->
    <a href="<?php echo base_url( ); ?>application/views/admin/dashboard" class="brand-link">
      <img src="<?php echo base_url( ). "assets/"; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TECSA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #222cf1">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <!-- opcion registro de la barra lateral--->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url( ). "assets/"; ?>#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Registro
                <i class="fas fa-angle-left right"></i>
                <!---<span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Producto_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Marca" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marca</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Categoria_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categoria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Subcategoria_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategoria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Proveedor_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/TipoPago_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo de pago</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Personal_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Usuario_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Profesion_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profesion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Roles_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Nacionalidad_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nacionalidad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Color_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Color</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Tipo_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo de producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Imagen_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Imagenes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Empresa_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresa</p>
                </a>
              </li>
            </ul>
          </li>

            <!---- opcion del cliente de la barra lateral-->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url( ). "assets/"; ?>#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Cliente
                <i class="fas fa-angle-left right"></i>
                <!---<span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Juridico_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Juridico</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Mantenimiento/Natural_controller" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Natural</p>
                </a>
              </li>
            </ul>
          </li>

          <!---opcion ventas de productos -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url( ). "assets/"; ?>#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Movimiento
                <i class="fas fa-angle-left right"></i>
                <!---<span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Movimiento/Venta_controller/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Movimiento/Venta_controller/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de ventas </p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url( ). "assets/"; ?>#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
                <!---<span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Reportes/ReporteVenta_controller/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte de ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Movimiento/Venta_controller/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reporte de cotización </p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url( ). "assets/"; ?>#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Administrador   
                <i class="fas fa-angle-left right"></i>
                <!---<span class="badge badge-info right">6</span> -->
              </p>
            </a> 
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url( ); ?>Administrador/Permisos_controller/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permisos</p>
                </a>
              
              
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>