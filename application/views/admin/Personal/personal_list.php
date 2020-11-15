<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Personal
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
                        <a href="<?php echo base_url();?>Mantenimiento/Personal_controller/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Personal</a>
                        <?php endif;?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre Completo</th>
                                    <th>Sexo</th>
                                    <th>Profesion</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty ($personal) ): ?>
                                    <?php foreach ($personal as $personal): ?>
                                    
                                        <tr>
                                            <td><?php echo $personal->IdPersonal;?></td>
                                            <td><?php echo $personal->Nombre;?></td>
                                            <td><?php echo $personal->Sexo;?></td>
                                            <td><?php echo $personal->Profesion;?></td>
                                            <td><?php echo $personal->Rol;?></td>
                                            <td><?php echo $personal->Estado;?></td>
                                            <?php $datapersonal= $personal->IdPersonal."*". 
                                                                 $personal->Nombre."*".
                                                                 $personal->Direccion."*".
                                                                 $personal->Telefono."*".
                                                                 $personal->Gmail."*".
                                                                 $personal->CedulaIdentidad."*".
                                                                 $personal->FechaNacimiento."*".
                                                                 $personal->FechaRegistro."*".
                                                                 $personal->Sexo."*".
                                                                 $personal->Profesion."*".
                                                                 $personal->Rol."*".
                                                                 $personal->Estado;?> 

                                            <td>
                                                <div class="btn-gruop">
                                                    <button type="button" class="btn btn-info btn-view-personal" data-toggle="modal" data-target="
                                                    #modal-default" value="<?php echo $datapersonal;?>"><span class="fa fa-search"> </span> </button>
                                                    <?php if($permisos->Actualizar==1):?>
                                                  <a href="<?php echo base_url();?>Mantenimiento/Personal_controller/edit/<?php echo $personal->IdPersonal;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span>Editar</a>
                                                  <?php endif;?>
                                                    <?php if($permisos->Eliminar==1):?>
                                                  <a href="<?php echo base_url();?>Mantenimiento/Personal_controller/delete/<?php echo $personal->IdPersonal;?>" class="btn btn-danger btn-remove"><span class="fa fa-trash-alt"></span>Eliminar</a>
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
              <h4 class="modal-title">Informacion del personal</h4>
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