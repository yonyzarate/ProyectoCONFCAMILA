<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Cliente Natural
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
                            <form action="<?php echo base_url();?>Mantenimiento/Natural_controller/store" method="POST">
                            <div class="form-group">
                            <p>Los campos con <span  style="color: #ff0505; ">*</span> son obligatorios.</p>
                                <div class="row mb-2">
                                    <div class="form-group col-md-4"> 
                                        <label for="Nombre"> Tipo de cliente:</label>
                                        <select class="form-control" name="tdcliente" id="tdcliente">
                                            <?php foreach($tipocliente as $tipocliente): ?>
                                                <option value="<?php echo $tipocliente->IdTipoCliente;?>"
                                                ><?php echo $tipocliente->Nombre;?></option> 
                                            <?php endforeach;?>                                        
                                        </select>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                    </div>
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>" >
                                        <label class="form-control-label" for="nombre"> Nombre:</label>
                                        <input type="text" class="form-control form-control-danger" id="nombre" name="nombre"
                                        value="<?php echo set_value("nombre"); ?>">
                                        <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4" >
                                        <label for="nombre"> Dirección:</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion">
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                    </div>
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("telefono"))? 'has-danger':'';?>" >
                                        <label class="form-control-label"for="telefono"> Telefono:</label>
                                        <input type="text" class="form-control form-control-danger" id="telefono" name="telefono" 
                                        value="<?php echo set_value("telefono"); ?>">
                                        <?php echo form_error("telefono","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("nit"))? 'has-danger':'';?>" >
                                        <label class="form-control-label" for="nit"> Nit:</label>
                                        <input type="text" class="form-control form-control-danger" id="nit" name="nit"
                                        value="<?php echo set_value("nit"); ?>">
                                        <?php echo form_error("nit","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                    </div>
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("gmail"))? 'has-danger':'';?>" >
                                        <label class="form-control-label" for="gmail"> Gmail:</label>
                                        <input type="text" class="form-control form-control-danger" id="gmail" name="gmail"
                                        value="<?php echo set_value("gmail"); ?>">
                                        <?php echo form_error("gmail","<span class='form-control-feedback' >","</span>");?>
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