<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Empresa
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
                        <form action="<?php echo base_url();?>Mantenimiento/Empresa_controller/update" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $empresa->IdEmpresa; ?>" name="IdEmpresa" >
                            <div class="form-group">
                                <label for="nombre"> Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $empresa->Nombre ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre"> Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $empresa->Direccion ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre"> Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $empresa->Telefono ?>">
                            </div>
                            <div class="form-group"> 
                                <label for="nombre"> Gmail</label>
                                <input type="text" class="form-control" id="gmail" name="gmail" value="<?php echo $empresa->Gmail ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre"> Nit</label>
                                <input type="text" class="form-control" id="nit" name="nit" value="<?php echo $empresa->Nit ?>">
                            </div>
                            <div class="form-group">
                                <img src="<?php echo base_url()?>uploads/imagenes/<?php echo $empresa->Logo;?>" width="70px" height="70px" alt="">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="Imagen"> Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" value="<?php echo $empresa->Logo ?>" >
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