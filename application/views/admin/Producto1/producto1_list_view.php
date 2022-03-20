<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Producto
          <small>Listado</small>
      </h1>
    </div> 
    <div class="card-body login-card-body " >
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if($permisos->Insertar==1):?>
                        <a href="<?php echo base_url();?>Mantenimiento/Producto1_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar</a>
                        <?php endif;?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                    <th>Talla</th>
                                   
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($producto) ): ?>
                                    <?php foreach ($producto as $producto): ?>
                                    
                                        <tr>
                                            <td><?php echo $producto->IdProducto;?></td>
                                            <td><?php echo $producto->Nombre;?></td>
                                            <td>
                                                <img src="<?php echo base_url()?>uploads/imagenes/producto/<?php echo $producto->Imagen;?>" width="70px" height="70px" alt="">
                                               
                                            </td>
                                            <td><?php echo $producto->Stock;?></td>
                                            <td><?php echo $producto->PrecioVenta;?></td>
                                            <td><?php echo $producto->Talla;?></td>
                                            <?php $dataproducto= $producto->IdProducto."*". 
                                                              $producto->Nombre."*".
                                                              $producto->Imagen."*".
                                                              $producto->Codigo."*".
                                                              $producto->Descripcion."*".
                                                              $producto->Stock."*".
                                                              $producto->PrecioVenta."*".
                                                              $producto->PrecioOferta."*".
                                                              $producto->Marca."*".
                                                              $producto->Color."*".
                                                              $producto->Talla."*".
                                                            //   $producto->Categoria."*".
                                                              $producto->Subcategoria;?>
                                            
                                            <td>
                                                <div class="btn-gruop">
                                                    <button type="button" class="btn btn-info btn-view-producto1" data-toggle="modal" data-target="
                                                    #modal-default" value="<?php echo $dataproducto;?>"><span class="fa fa-search"> </span> </button>
                                                    <?php if($permisos->Actualizar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Producto1_controller/edit/<?php echo $producto->IdProducto;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>
                                                    <?php endif;?>
                                                    <?php if($permisos->Eliminar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Producto1_controller/delete/<?php echo $producto->IdProducto;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span></a>
                                                    <?php endif;?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
  </div>

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Informacion del producto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->