
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Permisos
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>Administrador/Permisos_controller/store" method="POST">
                                                       
                            <div class="form-group">
                                <label for="rol">Roles:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->IdRol;?>"><?php echo $rol->Nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="menu">Menus:</label>
                                <select name="menu" id="menu" class="form-control">
                                    <?php foreach($menu as $menu):?>
                                        <option value="<?php echo $menu->IdMenu;?>"><?php echo $menu->Nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="read">Leer:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="leer" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="leer" value="0" >No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Agregar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="insertar" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="insertar" value="0" >No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Editar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="actualizar" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="actualizar" value="0" >No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Eliminar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="eliminar" value="1" checked="checked">Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="eliminar" value="0" >No
                                </label>
                            </div>
                             <div class="form-group">
                                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Guardar</button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
