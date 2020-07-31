<?php 

?>

<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="inicio.php?action=home">Administrador</a>
            </li>
            <li class="breadcrumb-item">Lista de usuarios de usuario</li>
        </ol>

        <div class="row">
        	<div class="col-md-12">
        		<table id="cosa" class="display">
				    <thead>
				        <tr>
				            <th>Column 1</th>
				            <th>Column 2</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td>Row 1 Data 1</td>
				            <td>Row 1 Data 2</td>
				        </tr>
				        <tr>
				            <td>Row 2 Data 1</td>
				            <td>Row 2 Data 2</td>
				        </tr>
				    </tbody>
				</table>
        	</div>
        </div>


	</div>
</div>

<script type="text/javascript">
	

	$(document).ready( function () {
	    $('#cosa').DataTable();
	});

</script>