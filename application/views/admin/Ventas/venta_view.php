
<div class="row mb-2">
    <div class="col-xs-12 text-center" style="width: 781px;">
    <div class="row mb-2">
	    <div class="col-xs-6">
            <b><img src="<?php echo base_url()?>uploads/imagenes/logo_ofial_tecsa.png" width="150px" height="100px" alt=""></b><br>
        </div>
        <div class="col-xs-6" style="padding-left: 100px;">
            <h2>Tecsa</h2>
		    <b>Nit:</b>12448335<br>
		    <b>Telefono:</b>3344493 <br>
            <b>Direccion</b>Av. Santos dumont 4to anillo<br>
        </div>
    </div>
    </div>
</div> <br>

 <div class="col-xs-12" style="width: 781px;">
 <div class="row mb-2">
	<div class="col-xs-6">	
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $ventas->Nombre; ?> <br>
		<b>Nit:</b> <?php echo $ventas->Nit; ?><br>
		<b>Telefono:</b> <?php echo $ventas->Telefono; ?> <br>
		<b>Direccion</b> <?php echo $ventas->Direccion; ?><br>
	</div>	
	<div class="col-xs-6" style="padding-left: 350px;">	
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b> <?php echo $ventas->Comprobante; ?><br>
		<b>Nro de Comprobante:</b> <?php echo $ventas->NroComprobante; ?><br>
        <b>Fecha</b> <?php echo $ventas->Fecha; ?>
    </div>	
 </div>
</div>
<br>
<div class="row mb-2">
	<div class="col-xs-12" style="width: 781px;">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($detalle as $detalle):?>
				    <tr>
				    	<td><?php echo $detalle->Codigo; ?></td>
				    	<td><?php echo $detalle->Nombre; ?></td>
				    	<td><?php echo $detalle->Precio; ?></td>
				    	<td><?php echo $detalle->Cantidad; ?></td>
				    	<td><?php echo $detalle->Importe; ?></td>
				    </tr>
                <?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $ventas->SubTotal; ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>IGV:</strong></td>
					<td><?php echo $ventas->Iva; ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $ventas->Descuento; ?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $ventas->Total; ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>