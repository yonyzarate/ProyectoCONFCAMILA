<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h1>
          Profesión
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
                        <form action="<?php echo base_url();?>Mantenimiento/Profesion_controller/store" method="POST">
                            <div class="form-group col-md-4" >
                                <label for="nombre"> Nombre</label>
                                <input id="age" title="Coloque el nombre de la profesión." type="text" class="form-control"  name="nombre">
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