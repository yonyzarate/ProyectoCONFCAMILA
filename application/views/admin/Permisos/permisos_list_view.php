<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Permisos
          <small>Listado</small>
      </h1>
    </div>
    <div class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                      <?php if($permiso->Insertar==1):?>
                        <a href="<?php echo base_url();?>Administrador/Permisos_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Permisos</a>
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
                                    <th>Menu</th>
                                    <th>Rol</th>
                                    <th>Leer</th>
                                    <th>Insertar</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($permisos) ): ?>
                                    <?php foreach ($permisos as $permisos): ?>
                                    
                                        <tr>
                                            <td><?php echo $permisos->IdPermiso;?></td>
                                            <td><?php echo $permisos->Menu;?></td>
                                            <td><?php echo $permisos->Rol;?></td>
                                            <td>
                                                <?php if($permisos->Leer==0):?>
                                                    <span   class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span   class="fa fa-check"></span>
                                                    <?php endif;?>
                                            </td>
                                            <td>
                                                <?php if($permisos->Insertar==0):?>
                                                    <span   class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span   class="fa fa-check"></span>
                                                    <?php endif;?>
                                            </td>
                                            <td>
                                                <?php if($permisos->Actualizar==0):?>
                                                    <span   class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span   class="fa fa-check"></span>
                                                    <?php endif;?>
                                            </td>
                                            <td>
                                                <?php if($permisos->Eliminar==0):?>
                                                    <span   class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span   class="fa fa-check"></span>
                                                    <?php endif;?>
                                            </td>
                                            <td>
                                                <div class="btn-gruop">
                                                  
                                                    <!--<a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>-->
                                                    <?php if($permiso->Actualizar==1):?>
                                                    <a href="<?php echo base_url();?>Administrador/Permisos_controller/edit/<?php echo $permisos->IdPermiso;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                    <?php endif;?>
                                                    <?php if($permiso->Eliminar==1):?>
                                                    <a href="<?php echo base_url();?>Administrador/Permisos_controller/delete/<?php echo $permisos->IdPermiso;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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
    </div>
    
  </div>