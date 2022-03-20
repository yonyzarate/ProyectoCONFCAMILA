
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Dashboard 
                <small>Panel Control </small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?php echo $cantClientes;?></h3>

                                <p>Clientes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="<?php echo base_url();?>Mantenimiento/Natural_controller" class="small-box-footer">Ver Clientes <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo $cantProductos;?></h3>

                                <p>Productos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="<?php echo base_url();?>Mantenimiento/Producto1_controller" class="small-box-footer">Ver Productos <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo $cantUsuarios;?></h3>

                                <p>Usuarios</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?php echo base_url( ); ?>Mantenimiento/Usuario_controller" class="small-box-footer">Ver Usuarios <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?php echo $cantVentas; ?></h3>

                                <p>Ventas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="<?php echo base_url();?>Movimiento/Venta_controller/" class="small-box-footer">Ver Ventas <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="box-title">Grafico estadistico</h3>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="btm-group" role="group" aria-label="grupo de botones" lang="es">
                                    <button role="button" id="btnventas" class="btn btn-primary">Grafico de ventas</button>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                    <select name="year" id="year" class="form-control">
                                        <?php foreach($years as $year):?>
                                            <option value="<?php echo $year->year;?>"><?php echo $year->year;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            <!-- /.box-header -->
                            
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div id="grafico" style="min-width: 310px; height: 400px;margin: 0 auto"></div>
                                    </div>
                                </div>
                                <!-- /.row -->  
                            </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Grafico de ventas</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-2">
                                    <select name="year1" id="year1" class="form-control">
                                        <?php foreach($years as $year):?>
                                            <option value="<?php echo $year->year;?>"><?php echo $year->year;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div id="container-modal" style="min-width: 320px; height: 400px; margin: 0 auto;"> </div>
                </div>
            </div>
        </div>
    </div>
