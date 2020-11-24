<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Subcategoria
          <small>Actualizar</small>
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

                        <form action="<?php echo base_url();?>Mantenimiento/Subcategoria_controller/update" method="POST">
                            <input type="hidden" name="IdSubcategoria" value="<?php echo $subcategoria->IdSubcategoria?>" >
                            <div class="form-group col-md-4">
                                       <label for="categoria"> Categoria:</label>
                                   
                                        <select class="form-control" name="categoria" id="categoria" >
                                            <?php foreach($categoria as $categoria): ?>
                                                <option value="<?php echo $categoria->IdCategoria;?>"<?php echo $categoria->IdCategoria ==
                                                $subcategoria->IdCategoria? "selected":"";?>
                                                ><?php echo $categoria->Nombre;?></option> 
                                            <?php endforeach;?>                                        
                                        </select>
                            </div>
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="form-group col-md-4 <?php echo !empty(form_error("nombresub"))? 'has-danger':'';?>">
                                        <label class="form-control-label" for="nombresub"> Nombre Subcategoria:</label>
                                        <input type="text" class="form-control form-control-danger" id="nombresub" name="nombresub" 
                                        value="<?php echo !empty(form_error("nombresub"))? set_value("nombresub"): $subcategoria->Nombre ;?>">
                                        <?php echo form_error("nombresub","<span class='form-control-feedback' >","</span>");?>
                                    </div>
                                    <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
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