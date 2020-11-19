<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Cataegoria
          <small>Editar</small>
      </h1>
    </div>
    <div class="content bg-white m-1 pb-2">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div>
                               <p><?php echo $this->session->flashdata("error") ?></p>
                            </div>

                        <?php endif;?>
                        <form action="<?php echo base_url();?>Mantenimiento/Categoria_controller/update" method="POST">
                            <input type="hidden" value="<?php echo $categoria->IdCategoria; ?>" name="IdCategoria" >
                            <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                <label class="form-control-label" for="nombre"> Nombre:</label>
                                <input type="text" class="form-control form-control-danger"  title="Editar el nombre de la categoria." name="nombre" 
                                value="<?php echo !empty(form_error("nombre"))? set_value("nombre"): $categoria->Nombre ;?>">
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