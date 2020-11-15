<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Tipo de pago
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
                        <form action="<?php echo base_url();?>Mantenimiento/TipoPago_controller/update" method="POST">
                            <input type="hidden" value="<?php echo $tipopago->IdTipopago; ?>" name="IdTipopago" >
                            <div class="form-group">
                                <label for="nombre"> Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $tipopago->Nombre ?>">
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