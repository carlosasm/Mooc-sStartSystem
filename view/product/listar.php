<?php
	require_once 'public/scripts.php';
	include_once 'public/headerAdmin.php';
?>
	<!--!!!!!!!!!!!!!!!!!!! Tabla con el contenido recuperado del fetch al API!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Productos
					</div>
					<span>
						<button id="add" type="submit" class="btn fa fa-plus" onclick="$('#action').text('Agregar Producto')" data-toggle="modal" data-target="#myModal">
							Agregar producto
						</button>
					</span>
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
									<td id="idTable"><?php echo $item['id']; ?></td>
									<td><?php echo $item['name']; ?></td>
									<td><?php echo $item['description']; ?></td>

									<td>
										<span class=" btn-sm"  >
											<button id="updateBtn"class="btn fa fa-pencil-square-o" onclick="$('#action').text('Editar Producto')" data-toggle="modal" data-target="#myModal"></button>
										</span>
										<span class=" btn-sm "  >
											<button id="deleteBtn" class="btn btn-danger fa fa-trash" onclick="$('#idDel').val('<?php echo $item['id']; ?>')" data-toggle="modal" data-target="#modalDelete"></button>
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

	<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Sección de Modals!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

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
				<input class="input" type="text" name="id" id="id" placeholder="ID">
				<input class="input" type="text" name="name" id="name" placeholder="ID">
				<input class="input" type="text" name="code" id="code" placeholder="Codigo producto">
				<input class="input" type="text" name="quantity" id="quantity" placeholder="Cantidad producto">
				<input class="input" type="text" name="desc" id="desc" placeholder="Descripcion">
				<input class="input" type="text" name="price" id="price" placeholder="Precio costo">
				<input class="input" type="text" name="price_sell" id="price_sell" placeholder="Precio venta">
				<input class="input" type="text" name="ganancias" id="ganancias" placeholder="Ganancias">
				<div>
					<input class="btn btn-insert" onclick="insertProduct()"	type="submit" value="Guardar">
					<input class="btn btn-cancel" type="submit" value="Cancelar" data-dismiss="modal">
					<input class="btn btn-insert" onclick="updateProduct()" type="submit" value="UPD" data-dismiss="modal">

				</div>
				
			</section>
		</div>

     

    </div>
  </div>
</div>

<div class="modal" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content rounded-2">

      <!-- Modal Header -->
		<div class="modal-header">
			<h4 id="action" class="modal-title">Eliminar Producto</h4>
		</div>

	  <!-- Modal body -->
		<div class="modal-body">
					

			<section class="form-register">
				<span>
				<input class="input" type="text" name="id" id="idDel" placeholder="ID">
					<h4>
						¿Está seguro que desea eliminar el producto?
					</h4>
					<span>
						<button id="confirm" type="button" onclick="deleteProduct($('#idDel').val())" class="btn btn-danger  fa fa-check-circle">
						</button>
					</span>
				</span>
				</div>
				
			</section>
		</div>
    </div>
  </div>
</div>

<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Seccion de Scripts para funcionalidades!!!!!!!!!!!!!!!!!!!!!!!!-->
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});


</script>
	
<?php

include_once 'public/footer.php';

?>