<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Categoria
          <small>Listado</small>
      </h1>
    </div>
    <div class="content bg-white pt-3">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($permisos->Insertar==1):?> 
                        <a href="<?php echo base_url();?>Mantenimiento/Categoria_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Categoria</a>
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
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($categoria) ): ?>
                                    <?php foreach ($categoria as $categoria): ?>
                                    
                                        <tr>
                                            <td><?php echo $categoria->IdCategoria;?></td>
                                            <td><?php echo $categoria->Nombre;?></td>
                                            <td>
                                                <div class="btn-gruop">
                                                  
                                                    <!--<a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>-->
                                                    <?php if($permisos->Actualizar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Categoria_controller/edit/<?php echo $categoria->IdCategoria;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                    <?php endif;?>
                                                    <?php if($permisos->Eliminar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Categoria_controller/delete/<?php echo $categoria->IdCategoria;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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