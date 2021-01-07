

 <?php require_once 'public/scripts.php'; ?>

 
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
            <span class="btn btn-sm"  >
					<span class="fa fa-pencil-square-o"></span>
				</span>
            </td>
    </tr>
    <?php
        }
    ?>

    </tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
