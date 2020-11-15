<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Imagenes
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
                        <form action="<?php echo base_url();?>Mantenimiento/Imagen_controller/update" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $imagenes->IdImagen; ?>" name="IdImagen" >
                            <div class="form-group">
                                <label for="nombre"> Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $imagenes->Nombre ?>">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo base_url()?>uploads/imagenes/<?php echo $imagenes->Imagen;?>" width="70px" height="70px" alt="">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="Imagen"> Imagen</label>
                                <input type="file" class="form-control" id="Imagen" name="Imagen" value="<?php echo $imagenes->Imagen ?>" >
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