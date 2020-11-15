<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Personal
          <small>Nuevo</small>
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

                            <form action="<?php echo base_url();?>Mantenimiento/Personal_controller/store" method="POST">
                                <div class="form-group">
                                    <p>Los campos con <span  style="color: #ff0505; ">*</span> son obligatorios.</p>
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                            <label class="form-control-label"  for="nombre"> Nombre:</label>
                                            <input type="text" title="Ingrese el nombre. " class="form-control form-control-danger" id="nombre" name="nombre"
                                            value="<?php echo set_value("nombre"); ?>">
                                            <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("apellidop"))? 'has-danger':'';?>">
                                            <label class="form-control-label"  for="apellidop"> Apellido Paterno:</label>
                                            <input type="text" title="Ingrese apellido paterno."class="form-control form-control-danger" id="apellidop" name="apellidop"
                                            value="<?php echo set_value("apellidop"); ?>">
                                            <?php echo form_error("apellidop","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Apellido Materno:</label>
                                            <input type="text" title="Ingrese apellido materno." class="form-control" id="apellidom" name="apellidom">
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("direccion"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="direccion"> Dirección:</label>
                                            <input type="text" title="Ingrese la dirección." class="form-control form-control-danger" id="direccion" name="direccion" 
                                            value="<?php echo set_value("direccion"); ?>">
                                            <?php echo form_error("direccion","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("telefono"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="telefono"> Telefono:</label>
                                            <input type="text" title="Ingrese el telefono" class="form-control form-control-danger" id="telefono" name="telefono"
                                            value="<?php echo set_value("telefono"); ?>">
                                            <?php echo form_error("telefono","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("gmail"))? 'has-danger':'';?>">
                                            <label class="form-control-label"  for="gmail"> Gmail:</label>
                                            <input type="text" title="Ingrese el correo electronico"class="form-control form-control-danger" id="gmail" name="gmail"
                                            value="<?php echo set_value("gmail"); ?>">
                                            <?php echo form_error("gmail","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("ci"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="ci"> Cedula Identidad:</label>
                                            <input type="text" title="Ingrese la cedula de identidad " class="form-control form-control-danger" id="ci" name="ci"
                                            value="<?php echo set_value("ci"); ?>">
                                            <?php echo form_error("ci","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("fechanacimiento"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="fechanacimiento"> Fecha Nacimiento:</label>
                                            <input type="date"  title="Ingrese la fecha de nacimiento"class="form-control form-control-danger" id="fechanacimiento" name="fechanacimiento"
                                            value="<?php echo set_value("fechanacimiento"); ?>">
                                            <?php echo form_error("fechanacimiento","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("fecharegistro"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="fecharegistro"> Fecha Registro:</label>
                                            <input type="date" class="form-control form-control-danger" id="fecharegistro" name="fecharegistro" value="<?php echo date('Y-m-d')?>" 
                                            value="<?php echo set_value("fecharegistro"); ?>">
                                            <?php echo form_error("fecharegistro","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4"> 
                                                <label for="Nombre"> Sexo:</label>
                                                <select class="form-control" title="Seleccone el sexo" name="sexo" id="sexo">
                                                    <?php foreach($sexo as $sexo): ?>
                                                        <option value="<?php echo $sexo->IdSexo;?>"
                                                        ><?php echo $sexo->Nombre;?></option> 
                                                    <?php endforeach;?>                                        
                                                </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Roles"> Roles:</label>
                                            <select class="form-control" title="Seleccione el rol" name="roles" id="roles">
                                                <?php foreach($rol as $roles): ?>
                                                    <option value="<?php echo $roles->IdRol;?>"
                                                    ><?php echo $roles->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="profsion"> Profesión:</label>  
                                            <select class="form-control" name="profesion" title="Seleccione la profesión"id="profesion">
                                                <?php foreach($profesion as $profesionn): ?>
                                                    <option value="<?php echo $profesionn->IdProfesion;?>"
                                                    ><?php echo $profesionn->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
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