
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Ventas
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <div class="card-body login-card-body " >
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row mb-2">
                    <div class="col-md-12"> 
                        
                        <form action="<?php echo base_url();?>movimiento/Venta_controller/store" method="POST" class="form-horizontal">
                            <div class="form-group"> 
                            <div class="row mb-2">
                                <div class="col-md-3" >
                                    <label for="">Comprobante:</label>
                                    <select name="comprobantes" id="comprobantes" class="form-control" required>
                                        <option value="">Seleccione...</option>
                                        <?php foreach($tipocomprobantes as $tipocomprobante):?> 
                                            <?php $datacomprobante = $tipocomprobante->IdTipo_comprobante."*".$tipocomprobante->Cantidad."*".
                                            $tipocomprobante->Iva."*".$tipocomprobante->Serie;?>
                                            <option value="<?php echo $datacomprobante;?>"><?php echo $tipocomprobante->Nombre?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <input type="hidden" id="idcomprobante" name="idcomprobante">
                                    <input type="hidden" id="iva">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Serie:</label>
                                    <input type="text" class="form-control" id="serie" name="serie" readonly>
                                </div>
                           
                                <div class="col-md-3">
                                    <label for="">N° Comprobante:</label>
                                    <input type="text" class="form-control" id="nrocomprobante" name="nrocomprobante" readonly>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="">Cliente:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente">
                                        <input type="text" class="form-control"  id="cliente" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div> 
                                <?php ini_set('date.timezone','America/La_Paz'); $fechaactual=date("Y-m-d H:i:s",time());?>
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="datetime" class="form-control" name="fecha"  value="<?php echo $fechaactual; ?>" required>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr> 
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                        <th>Stock Max.</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
 
                            <div class="form-group">
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <div class="input-group ">
                                        <span class="input-group-addon">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="subtotal" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">IVA:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="iva" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="descuento" id="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="Username" name="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                    </div>
                                    <div class="col-md-2" style="text-align:right">
                                                <label for="Nombre"> Tipo de pago:</label>
                                    </div>
                                    <div class="col-md-2">
                                                <select class="form-control" title="Seleccione el tipo de pago."  name="tipopago" id="tipopago">
                                                    <?php foreach($tipopago as $tipopago): ?>
                                                        <option value="<?php echo $tipopago->IdTipopago;?>"
                                                        ><?php echo $tipopago->Nombre;?></option> 
                                                    <?php endforeach;?>                                        
                                                </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content"style="width: 700px;">
            <div class="modal-header modal-lg" role="document">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body modal-lg" role="document">
            
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Tipo de cliente</th>
                            <th>Nit</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty ($cliente) ): ?>
                         <?php foreach ($cliente as $cliente): ?>
                         
                             <tr>
                                 <td><?php echo $cliente->IdCliente;?></td>
                                 <td><?php echo $cliente->Nombre;?></td>
                                 <td><?php echo $cliente->TipoCliente;?></td>
                                 <td><?php echo $cliente->Nit;?></td>
                                 <?php $datacliente = 
                                 $cliente->IdCliente."*".$cliente->Nombre."*".
                                 $cliente->Nombre."*".$cliente->Direccion."*".
                                 $cliente->Telefono."*".$cliente->Nit."*".$cliente->TipoCliente;?>
                                 <td>
                                 <button type="button" class="btn btn-success btn-check" 
                                 value="<?php echo $datacliente;?>"><span class="fa fa-check"></span></button>
                                 </td>
                             </tr>
                         <?php endforeach;?>
                    <?php endif;?>
                    </tbody>
                </table>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
