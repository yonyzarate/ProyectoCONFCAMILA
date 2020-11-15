<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Cliente Natural
          <small>Editar</small>
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
                            <form action="<?php echo base_url();?>Mantenimiento/Natural_controller/update" method="POST">
                            <input type="hidden" value="<?php echo $cliente->IdCliente; ?>" name="IdCliente" >
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4">
                                        <label for="personall"> Tipo de cliente:</label>
                                        <select class="form-control" name="tdcliente" id="tdcliente">
                                            <?php foreach($tipocliente as $tipocliente): ?>
                                                <option value="<?php echo $tipocliente->IdTipoCliente;?>"<?php echo $tipocliente->IdTipoCliente ==
                                                $cliente->IdTipoCliente? "selected":"";?>
                                                ><?php echo $tipocliente->Nombre;?></option> 
                                            <?php endforeach;?>                                        
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4" >
                                        <label for="nombre"> Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente->Nombre; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">           
                                    <div class="form-group col-md-4" >
                                        <label for="nombre"> Direccion</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente->Direccion; ?>">
                                    </div>
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("telefono"))? 'has-danger':'';?>" >
                                        <label  class="form-control-label" for="telefono"> Telefono:</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" 
                                        value="<?php echo !empty(form_error("telefono"))? set_value("telefono"):$cliente->Telefono; ?>">
                                        <?php echo form_error("telefono","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("nit"))? 'has-danger':'';?>" >
                                        <label class="form-control-label" for="nit"> Nit:</label>
                                        <input type="text" class="form-control" id="nit" name="nit" 
                                        value="<?php echo !empty(form_error("nit"))? set_value("nit"):$cliente->Nit; ?>">
                                        <?php echo form_error("nit","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("gmail"))? 'has-danger':'';?>" >
                                        <label class="form-control-label" for="gmail"> Gmail:</label>
                                        <input type="text" class="form-control" id="gmail" name="gmail" 
                                        value="<?php echo !empty(form_error("gmail"))? set_value("gmail"):$cliente->Gmail; ?>">
                                        <?php echo form_error("gmail","<span class='form-control-feedback' >","</span>");?>
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