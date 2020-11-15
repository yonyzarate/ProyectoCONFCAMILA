<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Marcas
          <small>Editar</small>
      </h1>
    </div>
    <div class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div>
                               <p><?php echo $this->session->flashdata("error") ?></p>
                            </div>

                        <?php endif;?>
                        <form action="<?php echo base_url();?>Mantenimiento/Marca/update" method="POST">
                            <input type="hidden" value="<?php echo $marca->IdMarca; ?>" name="IdMarca" >
                            <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                <label class="form-control-label" for="nombre"> Nombre</label>
                                <input type="text" class="form-control form-control-danger"  title="Editar el nombre de la marca." name="nombre" 
                                value="<?php echo !empty(form_error("nombre"))? set_value("nombre"): $marca->Nombre ;?>">
                                <?php echo form_error("nombre","<span class='help-block'style='color:red;'>","</span>");?>
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