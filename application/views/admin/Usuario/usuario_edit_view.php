<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Usuarios
          <small>Actualizar</small>
      </h1> 
    </div>
    <div class="card-body login-card-body ">
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div>
                               <p><?php echo $this->session->flashdata("error") ?></p>
                            </div>

                        <?php endif;?>

                        <form action="<?php echo base_url();?>Mantenimiento/Usuario_controller/update" method="POST">
                            <input type="hidden" name="IdUsuario" value="<?php echo $usuario->IdUsuario?>" >
                            <div class="form-group col-md-4">
                                       <label for="personall"> Personal</label>
                                   
                                        <select class="form-control" name="personall" id="personall" disabled="disabled">
                                            <?php foreach($personal as $personall): ?>
                                                <option value="<?php echo $personall->IdPersonal;?>"<?php echo $personall->IdPersonal ==
                                                $usuario->IdPersonal? "selected":"";?>
                                                ><?php echo $personall->NombreCompleto;?></option> 
                                            <?php endforeach;?>                                        
                                        </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombre"> Nombre Usuario</label>
                                <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" 
                                 value="<?php echo $usuario->NombreUsuario ?>"> 
                            </div>
                           
                             
                    
                            <div class="form-group">
                               <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
  </div>