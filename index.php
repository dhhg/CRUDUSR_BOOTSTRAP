<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi Obra~:::Usuarios:::~</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/lenguajeusuario.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"').tooltip();
		});
	</script>

</head>
<body>
	
	<div class="container-fluid">
		<!-- titulo y boton de nuevo usuario-->
		<div class="row">
			<div class="col-md-8 col-sm-12 " style="text-align: center;">
				<h1>
					Nuevo Usuario 
					<a href="php/usuairos.php" class=" btn btn-success pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp; Nuevo Usuario
					</a>
				</h1>

			</div>
		</div>
	
		<!--tabla de datos de usuarios-->
		<div class="row">
			<div id="contenido">	
						
				<div class="col-md-8 col-sm-12 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Usuarios</h3>
					</div>	
				</div>	
					<table id="Usuarios" class="table table-striped table-bordered" cellpadding="0" width="100%">
						<thead>
							<th width="10%">id</th>
							<th width="20%">nick</th>
							<th width="55%">Nombre</th>
							<th width="15%">Acciones</th>
						</thead>
						<tbody>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td align="center">
								<table cellpadding="0" width="100%" border=0 align="center">
									<tr>
										<td>
											<a href="php/usuairos.php" class=" btn btn-danger btn-sm pull-right menu"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a>
										</td>
										<td>
											<a tabindex="0" role="button" href="#" class=" btn btn-primary btn-sm pull-right menu" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>
										</td>
									</tr>														
								</table>
							</td>
						</tbody>
						<tfoot>
						<tr>
							<th width="10%">id</th>
							<th width="20%">nick</th>
							<th width="55%">Nombre</th>
							<th width="15%">Acciones</th>
						</tr>
						</tfoot>	
					</table>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>