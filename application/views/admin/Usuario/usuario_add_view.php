<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Usuarios
          <small>Nuevo</small>
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

                            <form action="<?php echo base_url();?>Mantenimiento/Usuario_controller/store" method="POST">
                            <div class="form-group">
                                <p>Los campos con <span  style="color: #ff0505; ">*</span> son obligatorios.</p>
                                <div class="row mb-2">  
                                    <div class="form-group col-md-4">
                                        <label for="personall"> Personal:</label>
                                        <select class="form-control" name="personall" id="personall">
                                            <?php foreach($personal as $personall): ?>
                                                <option value="<?php echo $personall->IdPersonal;?>"
                                                ><?php echo $personall->NombreCompleto;?></option> 
                                            <?php endforeach;?>                                        
                                        </select>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("nombreusuario"))? 'has-danger':'';?>">
                                        <label class="form-control-label" for="nombreusuario"> Nombre Usuario:</label>
                                        <input type="text" class="form-control form-control-danger" id="nombreusuario" name="nombreusuario" 
                                        value="<?php echo set_value("nombreusuario"); ?>">
                                        <?php echo form_error("nombreusuario","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("password"))? 'has-danger':'';?>">
                                        <label  class="form-control-label"for="password"> Password:</label>
                                        <input type="text" class="form-control form-control-danger" id="password" name="password"
                                        value="<?php echo set_value("password"); ?>">
                                        <?php echo form_error("password","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p> <strong>Nota:</strong> La contraseña de debe contener entre 8 y 15 caracteres y debe llevar por lo menos un digito, una letra mayúscula y un símbolo.</p>
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