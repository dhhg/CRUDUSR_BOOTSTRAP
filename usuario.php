<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Usuarios</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="js/bootstrap.js"></script>-->
	
	<script type="text/javascript" src="js/ListaUsuarios.js"></script>
	<script type="text/javascript" src="js/usuarios/InsertarUsuario.js"></script>
	<script type="text/javascript" src="js/usuarios/ActualizarUsuario.js"></script>
	
	<style type="text/css">
		a
		{
			padding-right: 10px;
			padding-left: 10px;
			margin-right: : 10px;
			margin-left: 10px;
		}

		.miclase
		{
			display: none;
		}

	</style>


</head>

<body>
	<div class="container-fluid col-xl-12 col-md-10 col-sm-1" id="Cuerpo">
		<!--titulo y boton de nuevo-->
		<div class="row">
			<div class="col-md-12 col-md-offset-2" align="center" id="Titulo">
				<h1>Usuarios 
					<a href="#" class="btn btn-success pull-right menu" data-toggle="modal" data-target="#NvoUsuario">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
						&nbsp;Nuevo
					</a>
				</h1>
			</div>
		</div>
		<!-- fin de titulo y boton de nuevo-->
		<!-- modal nuevo usuario -->
		<div id="NvoUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="nuevoUsuario" aria-hidden="true">
			<div class="modal-dialog" role="formularionvo">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" arial-label="Cerrar" arial-hidden="true">
							<span arial-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="nuevoUsuario">Nuevo Usuario</h4>
					</div>
					<div class="modal-body">
						<form id="#frmUsuario">
							<div class="form-group">
								<label for"tbNick">Nick</label>
								<input id="tbNick" type="text" class="form-control" name="txtNick" placeholder="Nick">
							</div>
							<div class="form-group">
								<label for"tbNombres">Nombre(s)</label>
								<input id="tbNombres" type="text" class="form-control" name="txtNombres" placeholder="Nombre(s)">
							</div>
							<div class="form-group">
								<label for"tbAp_Paterno">Apellido Paterno</label>
								<input id="tbAp_Paterno" type="text" class="form-control" name="txtAp_Paterno" placeholder="Apellido Paterno">
							</div>
							<div class="form-group">
								<label for"tbAp_Materno">Apellido Materno</label>
								<input id="tbAp_Materno" type="text" class="form-control" name="txtAp_Materno" placeholder="Apellido Materno">
							</div>
							<div class="form-group">
								<label for"tbEmail">Email</label>
								<input id="tbEmail" type="Email" class="form-control" name="txtAp_Paterno" placeholder="Email">
							</div>
							<div class="form-group">
								<label for"tbPwd">Contraseña</label>
								<input id="tbPwd" type="password" class="form-control" name="txtPwd" placeholder="Contraseña">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" onclick="Insertar()" data-dismiss="modal">Registrar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
		<!-- fin de monal nuevo usuario-->
		<!-- inicio de modal de actualizacion-->
		<!-- modal Actualizar usuario -->
		<div id="ActUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="actualizarUsuario" aria-hidden="true">
			<div class="modal-dialog" role="formularionvo">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" arial-label="Cerrar" arial-hidden="true">
							<span arial-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="actualizarUsuario">Modificar Usuario</h4>
					</div>
					<div class="modal-body">
						<form id="#frmUsuario_Act">
							<div class="form-group">
								<label for"tbNick_Act">Nick</label>
								<input id="tbNick_Act" type="text" class="form-control" name="txtNick" placeholder="Nick">
							</div>
							<div class="form-group">
								<label for"tbNombres_Act">Nombre(s)</label>
								<input id="tbNombres_Act" type="text" class="form-control" name="txtNombres" placeholder="Nombre(s)">
							</div>
							<div class="form-group">
								<label for"tbAp_Paterno_Act">Apellido Paterno</label>
								<input id="tbAp_Paterno_Act" type="text" class="form-control" name="txtAp_Paterno" placeholder="Apellido Paterno">
							</div>
							<div class="form-group">
								<label for"tbAp_Materno_Act">Apellido Materno</label>
								<input id="tbAp_Materno_Act" type="text" class="form-control" name="txtAp_Materno" placeholder="Apellido Materno">
							</div>
							<div class="form-group">
								<label for"tbEmail_Act">Email</label>
								<input id="tbEmail_Act" type="Email" class="form-control" name="txtAp_Paterno" placeholder="Email">
							</div>
							<div class="form-group">
								<label for"tbPwd_Act">Contraseña</label>
								<input id="tbPwd_Act" type="password" class="form-control" name="txtPwd" placeholder="Contraseña">
								<input id="tbId_Act" type="hidden" class="form-control" name="txtId" placeholder="Id">								
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button id="#Actualizar" type="button" class="btn btn-success" onclick="Actualizar()" data-dismiss="modal" data-loading-text="Cargando..." autocomplete="off">
							Actualizar
						</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>

		<!--fin de modal de actulizacion-->
		
		<!--inicio de pop para indicar los detaller-->
		
		<div id="#InfoDetalle" class="miclase">
		</div>	

		<!--fin de pop para indcar los detalles-->

		<!-- panel-->
		<div class="row">
			<div id="Contenido">
				<div class="col-md-10 col-md-offset-2" id="Panel">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Lista de Usuarios</h3>
						</div>
					</div>
					<table id="Usuarios" class="table table-striped" cellpadding="0" width="100%">
						<thead>
							<th>Id</th>
							<th>Nick</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th width="15%">Acciones</th>
						</thead>
						<tbody>
						
						</tbody>
						<tfoot>
							<th>Id</th>
							<th>Nick</th>
							<th>Nombre</th>
							<th>Estado</th>	
							<th width="15%" >Acciones</th>						
						</tfoot>
					</table>				
				</div>
			</div>
		</div>
		<!-- fin de panel-->
	</div>




<!-- scritp de axjax-->

<script type="text/javascript" src="js/bootstrap.min.js"></script>

	
</body>
</html>