<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Personal
          <small>Editar</small>
      </h1>
    </div>
    <div class="card-body login-card-body " >
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

                            <form action="<?php echo base_url();?>Mantenimiento/Personal_controller/update" method="POST">
                                <input type="hidden" name="IdPersonal" value="<?php echo $personal->IdPersonal?>" >
                                <div class="form-group">
                                     <div class="row mb-2">    
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="nombre"> Nombre</label>
                                            <input type="text" class="form-control form-control-danger" id="nombre" name="nombre" 
                                            value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$personal->Nombre ?>">
                                            <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("apellidop"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="apellidop"> Apellido Paterno</label>
                                            <input type="text" class="form-control form-control-danger" id="apellidop" name="apellidop" 
                                            value="<?php echo !empty(form_error("apellidop"))? set_value("apellidop"):$personal->ApellidoPaterno ?>">
                                            <?php echo form_error("apellidop","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 ">
                                            <label for="nombre"> Apellido Materno</label>
                                            <input type="text" class="form-control" id="apellidom" name="apellidom" value="<?php echo $personal->ApellidoMaterno ?>">
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("direccion"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="direccion"> Dirección</label>
                                            <input type="text" class="form-control form-control-danger" id="direccion" name="direccion"
                                             value="<?php echo !empty(form_error("direccion"))? set_value("direccion"):$personal->Direccion ?>">
                                            <?php echo form_error("direccion","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("telefono"))? 'has-danger':'';?>">
                                            <label class="form-control-label"for="telefono"> Telefono</label>
                                            <input type="text" class="form-control form-control-danger" id="telefono" name="telefono"
                                             value="<?php echo !empty(form_error("telefono"))? set_value("telefono"):$personal->Telefono ?>">
                                            <?php echo form_error("telefono","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("gmail"))? 'has-danger':'';?>">
                                            <label class="form-control-label"for="gmail"> Gmail</label>
                                            <input type="text" class="form-control form-control-danger" id="gmail" name="gmail"
                                             value="<?php echo !empty(form_error("gmail"))? set_value("gmail"):$personal->Gmail ?>">
                                            <?php echo form_error("gmail","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("ci"))? 'has-danger':'';?>">
                                            <label class="form-control-label"for="ci"> Cedula Identidad</label>
                                            <input type="text" class="form-control form-control-danger" id="ci" name="ci" 
                                            value="<?php echo !empty(form_error("ci"))? set_value("ci"):$personal->CedulaIdentidad ?>">
                                            <?php echo form_error("ci","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Fecha Nacimiento</label>
                                            <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="<?php echo $personal->FechaNacimiento ?>">
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group"> 
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Fecha Registro</label>
                                            <input type="date" class="form-control" id="fecharegistro" name="fecharegistro" value="<?php echo $personal->FechaRegistro?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="read">Sexo:</label><br>
                                            <label class="radio-inline" style="padding-right : 14px">
                                                <input type="radio" name="sexo" value="Hombre" <?php echo $personal->Sexo == 'Hombre' ? "checked":"";?>>Hombre
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="sexo" value="Mujer" <?php echo $personal->Sexo == 'Mujer' ? "checked":"";?>>Mujer
                                            </label>
                                    </div>
                                 </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="profesion"> Profesion</label>
                                            <select class="form-control" name="profesion" id="profesion">
                                                <?php foreach($profesion as $profesion): ?>
                                                    <?php if ( $profesion->IdProfesion == $personal->IdProfesion):?>
                                                    <option value="<?php echo $profesion->IdProfesion ?>" selected>
                                                    <?php echo $profesion->Nombre;?></option> 
                                                    <?php else:?>
                                                        <option value="<?php echo $profesion->IdProfesion ?>">
                                                        <?php echo $profesion->Nombre;?></option> 
                                                    <?php endif;?>
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="personall"> Rol</label>        
                                            <select class="form-control" name="roles" id="roles">
                                                <?php foreach($rol as $roles): ?>
                                                    <option value="<?php echo $roles->IdRol;?>"<?php echo $roles->IdRol ==
                                                    $personal->IdRol? "selected":"";?>
                                                    ><?php echo $roles->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                     </div>
                                </div>
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