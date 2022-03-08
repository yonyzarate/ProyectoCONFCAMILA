<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1> 
          Ventas 
          <small>Listado</small>
      </h1>
    </div>
    <div class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if($permisos->Insertar==1):?>
                        <a href="<?php echo base_url();?>Movimiento/Venta_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar venta</a>
                        <?php endif;?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th> 
                                    <th>Cliente</th>
                                    <th>Comprobante</th>
                                    <th>N° Comprovante</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($ventas)): ?>
                                    <?php foreach($ventas as $venta):?>
                                        <tr>
                                            <td><?php echo $venta->IdVenta;?></td>
                                            <td><?php echo $venta->Nombre;?></td>
                                            <td><?php echo $venta->Comprobante;?></td>
                                            <td><?php echo $venta->NroComprobante;?></td>
                                            <td><?php echo $venta->Fecha;?></td>
                                            <td><?php echo $venta->Total;?></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-view-venta" value="<?php echo $venta->IdVenta;?>"
                                                 data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span></button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
  </div>
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Información de la venta</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span>Imprimir</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



  