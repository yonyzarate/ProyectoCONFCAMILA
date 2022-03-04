<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Producto CONF
          <small>Nuevo</small>
      </h1>
    </div>
    <div class="card-body login-card-body " >
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

                            <form action="<?php echo base_url();?>Mantenimiento/Producto1_controller/store" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <p>Los campos con <span  style="color: #ff0505; ">*</span> son obligatorios.</p>
                                  <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="nombre">Nombre:</label>
                                            <input type="text" class="form-control form-control-danger" id="nombre" name="nombre" 
                                            title="Ingrese un nombre del producto." value="<?php echo set_value("nombre"); ?>" >
                                            <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("codigo"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="codigo">Codigo:</label>
                                            <input type="text" class="form-control form-control-danger" id="codigo" name="codigo" 
                                            title="Ingrese el codigo del producto."  value="<?php echo set_value("codigo"); ?>">
                                            <?php echo form_error("codigo","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-2">        
                                        <div class="form-group col-md-4  <?php echo !empty(form_error("stock"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="stock"> Stock:</label>
                                            <input type="text"title="Ingrese las unidades del producto." class="form-control form-control-danger" id="stock" name="stock" value="<?php echo set_value("stock"); ?>">
                                            <?php echo form_error("stock","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                            <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Imagen:</label>
                                            <div class="custom-file mb-3">
                                              <input type="file" class="custom-file-input" id="customFile" name="imagen">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <!-- <input type="file" title="Escoge una imagen para el producto."class="form-control" id="imagen" name="imagen"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("precioventa"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="precioventa"> Precio de venta: </label>
                                            <input type="text" title="Ingrese el precio de venta del producto." class="form-control form-control-danger" id="precioventa" name="precioventa"
                                            value="<?php echo set_value("precioventa"); ?>">
                                            <?php echo form_error("precioventa","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                            <sup><h4>*</h4></sup>
                                        </div>        
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("preciooferta"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="preciooferta"> Precio de oferta:</label>
                                            <input type="text" title="Ingrese el precio de oferta del producto." class="form-control" id="preciooferta" name="preciooferta"
                                            value="<?php echo set_value("preciooferta"); ?>">
                                            <?php echo form_error("preciooferta","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                            <sup><h4>*</h4></sup>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Color:</label>        
                                            <select class="form-control"  title="Seleccione el color."name="color" id="color">
                                                <?php foreach($color as $color): ?>
                                                    <option value="<?php echo $color->IdColor;?>"
                                                    ><?php echo $color->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Talla:</label>
                                            <select class="form-control" title="Seleccione la talla del producto." name="talla" id="talla">
                                                <?php foreach($talla as $talla): ?>
                                                    <option value="<?php echo $talla->IdTalla;?>"
                                                    ><?php echo $talla->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Categoria:</label>
                                            <select class="form-control"  name="categoria" id="categoria">
                                                     <option value="">Selecionar Categoria</option>
                                                 <?php foreach($categoria as $categoria): ?>
                                                    
                                                     <option value="<?php echo $categoria->IdCategoria;?>"
                                                     ><?php echo $categoria->Nombre;?></option> 
                                                 <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4>*</h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Subcategoria:</label>
                                            <select class="form-control" name="subcategoria" id="subcategoria" >
                                                
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Descripción:</label>
                                            <!-- <input type="textarea" class="form-control" id="nombre" name="nombre"> -->
                                            <textarea class="form-control" title="Ingrese una descripción ." placeholder="Enter ..." id="descripcion" name="descripcion"></textarea>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-success btn-flat"><span class="fas fa-save"></span> Guardar</button>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    
</div>