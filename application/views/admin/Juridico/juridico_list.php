<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Cliente Juridico
          <small>Listado</small>
      </h1>
    </div>
    <div class="card-body login-card-body ">
        <section class="content">
            <div class="box box-solid">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                        <?php if($permisos->Insertar==1):?>
                            <a href="<?php echo base_url();?>Mantenimiento/Juridico_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar</a>
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
                                        <th>Razo Social</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Nit</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty ($juridico) ): ?>
                                        <?php foreach ($juridico as $juridico): ?>
                                        
                                            <tr>
                                                <td><?php echo $juridico->IdCliente;?></td>
                                                <td><?php echo $juridico->Nombre;?></td>
                                                <td><?php echo $juridico->Direccion;?></td>
                                                <td><?php echo $juridico->Telefono;?></td>
                                                <td><?php echo $juridico->Nit;?></td>
                                                <td><?php echo $juridico->Estado;?></td>
                                                <td>
                                                    <div class="btn-gruop">

                                                        <!--<a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>-->
                                                        <?php if($permisos->Actualizar==1):?>
                                                        <a href="<?php echo base_url();?>Mantenimiento/Juridico_controller/edit/<?php echo $juridico->IdCliente;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                        <?php endif;?>
                                                        <?php if($permisos->Eliminar==1):?>
                                                        <a href="<?php echo base_url();?>Mantenimiento/Juridico_controller/delete/<?php echo $juridico->IdCliente;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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