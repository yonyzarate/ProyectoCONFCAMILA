<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Empresa
          <small>Listado</small>
      </h1>
    </div>
    <div class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if($permisos->Insertar==1):?>
                        <a href="<?php echo base_url();?>Mantenimiento/Empresa_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Empresa</a>
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
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Gmail</th>
                                    <th>Nit</th>
                                    <th>Logo</th>
                                   
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($empresa) ): ?>
                                    <?php foreach ($empresa as $empresa): ?>
                                    
                                        <tr>
                                            <td><?php echo $empresa->IdEmpresa;?></td>
                                            <td><?php echo $empresa->Nombre;?></td>
                                            <td><?php echo $empresa->Direccion;?></td>
                                            <td><?php echo $empresa->Telefono;?></td>
                                            <td><?php echo $empresa->Gmail;?></td>
                                            <td><?php echo $empresa->Nit;?></td>
                                            <td>
                                                <img src="<?php echo base_url()?>uploads/imagenes/<?php echo $empresa->Logo;?>" width="70px" height="70px" alt="">
                                               
                                            </td>
                                            
                                            <td>
                                                <div class="btn-gruop">
                                                  
                                                    <!--<a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>-->
                                                    <?php if($permisos->Actualizar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Empresa_controller/edit/<?php echo $empresa->IdEmpresa;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                    <?php endif;?>
                                                    <?php if($permisos->Eliminar==1):?>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Empresa_controller/delete/<?php echo $empresa->IdEmpresa;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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