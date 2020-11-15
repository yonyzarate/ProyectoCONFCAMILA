<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Proveedor
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
                        <form action="<?php echo base_url();?>Mantenimiento/Proveedor_controller/update" method="POST">
                            <input type="hidden" value="<?php echo $proveedor->IdProveedor; ?>" name="IdProveedor" >
                            <div class="form-group">
                                <label for="nombre"> Nombre de la empresa</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $proveedor->NombreEmpresa ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre"> Representante legal</label>
                                <input type="text" class="form-control" id="representante" name="representante" value="<?php echo $proveedor->RepresentanteLegal ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre"> Nit</label>
                                <input type="text" class="form-control" id="nit" name="nit" value="<?php echo $proveedor->Nit ?>">
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