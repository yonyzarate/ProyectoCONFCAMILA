<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Talla
          <small>Nuevo</small>
      </h1>
    </div>
    <div class="content bg-white mt-2">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div>
                               <p><?php echo $this->session->flashdata("error") ?></p>
                            </div>

                        <?php endif;?>
                        <form action="<?php echo base_url();?>Mantenimiento/Talla_controller/store" method="POST">
                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                <label class="form-control-label" for="nombre"> Nombre:</label>
                                <input type="text" class="form-control form-control-danger" id="nombre" style="text-transform: lowercase;" title="Coloque un nombre de una talla." name="nombre" value="<?php echo set_value("nombre"); ?>">
                                <?php echo form_error("nombre","<span class='help-block' style='color:red;'>","</span>");?>
                            </div>
                           <div class="form-group">
                               <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
  </div>