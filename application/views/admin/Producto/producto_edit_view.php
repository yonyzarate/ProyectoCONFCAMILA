<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- formulario para agregar nuevo usuario -->
    <div class="content-header">
      <h1>
          Producto
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

                            <form action="<?php echo base_url();?>Mantenimiento/Producto_controller/update" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="IdProducto" value="<?php echo $producto->IdProducto?>" >
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("nombre"))? 'has-danger':'';?>">
                                            <label class="form-control-label"for="nombre"> Nombre</label>
                                            <input type="text" class="form-control form-control-danger" id="nombre" name="nombre"
                                             value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$producto->Nombre?>">
                                            <?php echo form_error("nombre","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("numserie"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="numserie"> Numero Serie</label>
                                            <input type="text" class="form-control form-control-danger" id="numserie" name="numserie" 
                                            value="<?php echo !empty(form_error("numserie"))? set_value("numserie"):$producto->NroSerie?>">
                                            <?php echo form_error("numserie","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("codigo"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="codigo"> Codigo</label>
                                            <input type="text" class="form-control form-control-danger" id="codigo" name="codigo" 
                                            value="<?php echo !empty(form_error("codigo"))? set_value("codigo"):$producto->Codigo?>">
                                            <?php echo form_error("codigo","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Codigo de barra</label>
                                            <input type="text" class="form-control" id="cbarra" name="cbarra" value="<?php echo $producto->CodigoBarra?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("stock"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="stock"> Stock</label>
                                            <input type="text" class="form-control" id="stock" name="stock" 
                                            value="<?php echo !empty(form_error("stock"))? set_value("stock"):$producto->Stock?>">
                                            <?php echo form_error("stock","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?php echo base_url()?>uploads/imagenes/producto/<?php echo $producto->Imagen;?>" width="70px" height="70px" alt="">
                                        </div>
                                 
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Imagen</label>
                                            <input type="file" class="form-control" id="imagen" name="imagen" value="<?php echo $producto->Imagen?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("preciocompra"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="preciocompra"> Precio de Compra</label>
                                            <input type="text" class="form-control form-control-danger" id="preciocompra" name="preciocompra" 
                                            value="<?php echo !empty(form_error("preciocompra"))? set_value("preciocompra"):$producto->PrecioCompra?>">
                                            <?php echo form_error("preciocompra","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("precioventa"))? 'has-danger':'';?>">
                                            <label  class="form-control-label"for="precioventa"> Precio de venta </label>
                                            <input type="text" class="form-control form-control-danger" id="precioventa" name="precioventa" 
                                            value="<?php echo !empty(form_error("precioventa"))? set_value("precioventa"):$producto->PrecioVenta?>">
                                            <?php echo form_error("precioventa","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("preciooferta"))? 'has-danger':'';?>">
                                            <label class="form-control-label" for="preciooferta"> Precio de oferta</label>
                                            <input type="text" class="form-control form-control-danger" id="preciooferta" name="preciooferta" 
                                            value="<?php echo !empty(form_error("preciooferta"))? set_value("preciooferta"):$producto->PrecioOferta?>">
                                            <?php echo form_error("preciooferta","<span class='form-control-feedback' >","</span>");?>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Nacionalidad</label>
                                            <select class="form-control" name="nacionalidad" id="nacionalidad">
                                               <?php foreach($nacionalidad as $nacionalidad): ?>
                                                   <option value="<?php echo $nacionalidad->IdNacionalidad;?>"<?php echo $nacionalidad->IdNacionalidad ==
                                                   $producto->IdNacionalidad? "selected":"";?>
                                                   ><?php echo $nacionalidad->Nombre;?></option> 
                                               <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Color</label>
                                                 
                                            <select class="form-control" name="color" id="color">
                                                <?php foreach($color as $color): ?>
                                                    <option value="<?php echo $color->IdColor;?>"<?php echo $color->IdColor ==
                                                    $producto->IdColor? "selected":"";?>
                                                    ><?php echo $color->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Marca</label>
                                            <select class="form-control" name="marca" id="marca">
                                                <?php foreach($marca as $marca): ?>
                                                    <option value="<?php echo $marca->IdMarca;?>"<?php echo $marca->IdMarca ==
                                                    $producto->IdMarca? "selected":"";?>
                                                    ><?php echo $marca->Nombre;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="Nombre"> Tipo de Producto</label>   
                                             <select class="form-control" name="tipoproducto" id="tipoproducto">
                                                 <?php foreach($tipoproducto as $tipoproducto): ?>
                                                     <option value="<?php echo $tipoproducto->IdTipoProducto;?>"<?php echo $tipoproducto->IdTipoProducto ==
                                                     $producto->IdTipoProducto? "selected":"";?>
                                                     ><?php echo $tipoproducto->Nombre;?></option> 
                                                 <?php endforeach;?>                                        
                                             </select>
                                        </div>
                                 
                                        <div class="form-group col-md-4">
                                           <label for="Nombre"> Proveedor</label>   
                                            <select class="form-control" name="proveedor" id="proveedor">
                                                <?php foreach($proveedor as $proveedor): ?>
                                                    <option value="<?php echo $proveedor->IdProveedor;?>"<?php echo $proveedor->IdProveedor ==
                                                    $producto->IdProveedor? "selected":"";?>
                                                    ><?php echo $proveedor->NombreEmpresa;?></option> 
                                                <?php endforeach;?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="form-group col-md-4">
                                            <label for="nombre"> Descripcion</label>
                                            <textarea class="form-control"   id="descripcion" name="descripcion" style="resize: both;" ><?php echo $producto->Descripcion?></textarea>
                                        </div>
                                        <div class="form-group col-md-4 <?php echo !empty(form_error("caracteristicas"))? 'has-danger':'';?>">
                                            <label  class="form-control-label" for="caracteristicas"> Caracteristicas</label>
                                            <textarea class="form-control form-control-danger" rows="8"  id="caracteristicas" name="caracteristicas" style="resize: both;"><?php echo !empty(form_error("caracteristicas"))? set_value("caracteristicas"):$producto->Caracteristicas?></textarea>
                                            <?php echo form_error("caracteristicas","<span class='form-control-feedback' >","</span>");?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-success btn-flat"><span class="fas fa-save"></span>Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>