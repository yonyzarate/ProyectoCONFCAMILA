<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Producto CONF
          <small>Editar</small>
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

                            <form action="<?php echo base_url();?>Mantenimiento/Producto1_controller/update" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="IdProducto" value="<?php echo $producto->IdProducto?>"> 
                            <div class="form-group">
                                    <!-- <p>Los campos con <span  style="color: #ff0505; ">*</span> son obligatorios.</p> -->
                                  <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="nombre">Nombre:</label>
                                            <input type="text" class="form-control form-control-danger" id="nombre" name="nombre" 
                                            value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$producto->Nombre?>" >
                                            <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("codigo"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="codigo">Codigo:</label>
                                            <input type="text" class="form-control form-control-danger" id="codigo" name="codigo" 
                                            value="<?php echo !empty(form_error("codigo"))? set_value("codigo"):$producto->Codigo?>">
                                            <?php echo form_error("codigo","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-2">        
                                        <div class="form-group col-md-4  <?php echo !empty(form_error("stock"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="stock"> Stock:</label>
                                            <input type="text" class="form-control form-control-danger" id="stock" name="stock" 
                                            value="<?php echo !empty(form_error("stock"))? set_value("stock"):$producto->Stock?>">
                                            <?php echo form_error("stock","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?php echo base_url()?>uploads/imagenes/producto/<?php echo $producto->Imagen;?>" width="70px" height="70px" alt="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Imagen:</label>
                                            <div class="custom-file mb-3">
                                              <input type="file" class="custom-file-input" id="customFile" name="imagen"
                                              value="<?php echo $producto->Imagen?>">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div> <!-- <input type="file" title="Escoge una imagen para el producto."class="form-control" id="imagen" name="imagen"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("precioventa"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="precioventa"> Precio de venta: </label>
                                            <input type="text"  class="form-control form-control-danger" id="precioventa" name="precioventa"
                                            value="<?php echo !empty(form_error("precioventa"))? set_value("precioventa"):$producto->PrecioVenta?>">
                                            <?php echo form_error("precioventa","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                            <sup><h4></h4></sup>
                                        </div>        
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("preciooferta"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="preciooferta"> Precio de oferta:</label>
                                            <input type="text"  class="form-control" id="preciooferta" name="preciooferta"
                                            value="<?php echo !empty(form_error("preciooferta"))? set_value("preciooferta"):$producto->PrecioOferta?>">
                                            <?php echo form_error("preciooferta","<span class='form-control-feedback'>","</span>");?>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                            <sup><h4></h4></sup>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Color:</label>        
                                            <select class="form-control"  name="color" id="color">
                                                <?php foreach($color as $color): ?>
                                                    <option value="<?php echo $color->IdColor;?>"<?php echo $color->IdColor ==
                                                    $producto->IdColor? "selected":"";?>
                                                    ><?php echo $color->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Talla:</label>
                                            <select class="form-control"  name="talla" id="talla">
                                                <?php foreach($talla as $talla): ?>
                                                    <option value="<?php echo $talla->IdTalla;?>"<?php echo $talla->IdTalla ==
                                                    $producto->IdTalla? "selected":"";?>
                                                    ><?php echo $talla->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Marca:</label>        
                                            <select class="form-control"  name="marca" id="marca">
                                                <?php foreach($marca as $marca): ?>
                                                    <option value="<?php echo $marca->IdMarca;?>"<?php echo $marca->IdMarca ==
                                                    $producto->IdMarca? "selected":"";?>
                                                    ><?php echo $marca->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-1"style="padding-left: 0px; width: 7.5px; padding-right: 0px; right: 5px;top: 30px;color: #ff0505;">
                                         <sup><h4></h4></sup>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Descripción:</label>
                                            <textarea class="form-control"   id="descripcion" name="descripcion"
                                            ><?php echo !empty(form_error("caracteristicas"))?:$producto->Descripcion?></textarea>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <select class="form-control" name="subcategoria" id="subcategoria" style="visibility:hidden">
                                            <?php foreach($subcategoria as $subcategoria): ?>
                                                    <option value="<?php echo $subcategoria->IdSubcategoria;?>"<?php echo $subcategoria->IdSubcategoria ==
                                                    $producto->IdSubcategoria? "selected":"";?>
                                                    ><?php echo $subcategoria->Nombre;?></option> 
                                                <?php endforeach;?>     
                                            </select>
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