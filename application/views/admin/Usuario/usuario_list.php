<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Usuarios
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
                        <a href="<?php echo base_url();?>Mantenimiento/Usuario_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agrega Usuario</a>
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
                                    <th>Nombre</th>
                                    <th>Personal</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($usuario) ): ?>
                                    <?php foreach ($usuario as $usuario): ?>
                                    
                                        <tr>
                                            <td><?php echo $usuario->IdUsuario;?></td>
                                            <td><?php echo $usuario->NombreUsuario;?></td>
                                            <td><?php echo $usuario->Personal;?></td>
                                            <td><?php echo $usuario->Estado;?></td>
                                            <td>
                                                <div class="btn-gruop">
                                                  
                                                    <!--<a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>-->
                                                    <?php if($permisos->Actualizar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Usuario_controller/edit/<?php echo $usuario->IdUsuario;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                    <?php endif;?>
                                                    <?php if($permisos->Eliminar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Usuario_controller/delete/<?php echo $usuario->IdUsuario;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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