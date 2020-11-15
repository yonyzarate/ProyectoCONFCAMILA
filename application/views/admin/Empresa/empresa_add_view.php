<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Empresa
          <small>Nuevo</small>
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
                        <form action="<?php echo base_url();?>Mantenimiento/Empresa_controller/store" method="POST" enctype="multipart/form-data">
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Gmail</label>
                                <input type="text" class="form-control" id="gmail" name="gmail">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Nit</label>
                                <input type="text" class="form-control" id="nit" name="nit">
                            </div>
                            <div class="form-group col-md-4" >
                                <label for="Imagen"> Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo"  >
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