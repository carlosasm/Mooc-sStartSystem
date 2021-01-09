<?php
require_once 'public/scripts.php'; 
include_once 'public/headerAdmin.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Productos
					</div>
					<div class="card-body">
						<hr>
						<div>
							<table class="table table-hover" id="example">
								<thead style="background-color: #dc3545;color: white; font-weight: bold;">
									<tr>
										<th>ID</th>
										<th>Item</th>
										<th>Descripcion</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach ($vars['listado'] as $item){
								?>
								<tr>
									<td><?php echo $item['_id']; ?></td>
									<td><?php echo $item['name']; ?></td>
									<td><?php echo $item['desc']; ?></td>

									<td>
										<span class=" btn-sm"  >
											<button class="btn fa fa-pencil-square-o" onclick="$('#action').text('Editar Producto')" data-toggle="modal" data-target="#myModal"></button>
										</span>
									</td>
								</tr>
								<?php
									}
								?>

								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer text-muted">
						By Mooc´s Systems

					</div>
				</div>
			</div>
		</div>
	</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content rounded-2">

      <!-- Modal Header -->
		<div class="modal-header">
			<h4 id="action" class="modal-title">Producto</h4>
		</div>

	  <!-- Modal body -->
		<div class="modal-body">
			<section class="form-register">
				<input class="input" type="text" name="code" id="code" placeholder="Codigo producto">
				<input class="input" type="text" name="quantity" id="quantity" placeholder="Cantidad producto">
				<input class="input" type="text" name="desc" id="desc" placeholder="Descripcion">
				<input class="input" type="text" name="price" id="price" placeholder="Precio costo">
				<input class="input" type="text" name="price_sell" id="price_sell" placeholder="Precio venta">
				<input class="input" type="text" name="ganancias" id="ganancias" placeholder="Ganancias">
				<div>
					<input class="btn btn-insert" 	type="submit" value="Guardar">
					<input class="btn btn-cancel" type="submit" value="Cancelar" data-dismiss="modal">
				</div>
				
			</section>
		</div>

     

    </div>
  </div>
</div>


</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});


</script>
	
<?php

include_once 'public/footer.php';

?>