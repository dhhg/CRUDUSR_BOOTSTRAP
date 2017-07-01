$(document).ready(function() {
	$('#Usuarios').DataTable( {
		"bDefenderRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"nvoUsuarios.php",
			"type":"POST"
		},
		"columns":[
			{"data":"id"},
			{"data":"Nick"},
			{"data":"Nombre"},
			{"data":"Estado"},
			{"data":"Acciones"},
			]
	});
});