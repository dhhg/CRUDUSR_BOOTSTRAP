$(document).ready(function() {

	$(document).on('click','.btn-primary', function(){
		var idUsr = $(this).attr('id');
		var parametro = '[id='+idUsr+']';
		$(this).popover.('show');
		$(this).popover.('hide');
		/*$(idUsr).popover($('#InfoDetalle').html('hola'),html:true).click(function(){
					$(this).popover('show');
		});*/
			
	});
		

	$(document).on('click','.btn-info',function(event){
				var idUsr = $(this).attr("id");				
				$.ajax({
					url:"BuscarUsuario.php",
					method:"GET",
					data:{idUsr:idUsr},
					dataType:"json",
					success:function(data){
						
						/*id y valor del campo
						  ejemplo <input type='text' id='nick' value=''>

						  $('#nick').val(data.name);
						  */
						$('#tbId_Act').attr('value',data[0].id);  //procedimiento para ingresar valor a objetos ocultos
						$('#tbNick_Act').val(data[0].nick);
						$('#tbNombres_Act').val(data[0].nombre);
						$('#tbAp_Paterno_Act').val(data[0].ap_paterno);
						$('#tbAp_Materno_Act').val(data[0].ap_materno);
						$('#tbEmail_Act').val(data[0].email);
						$('#tbPwd_Act').val(data[0].pwd);

					}
				})
				.done(function(){
					

				})
				.fail(function(jqXHR, textStatus, errorThrown){
					if (jqXHR.status === 0) {

					    alert('Not connect: Verify Network.');

					  } else if (jqXHR.status == 404) {

					    alert('Requested page not found [404]');

					  } else if (jqXHR.status == 500) {

					    alert('Internal Server Error [500].');

					  } else if (textStatus === 'parsererror') {

					    alert('Requested JSON parse failed.');

					  } else if (textStatus === 'timeout') {

					    alert('Time out error.');

					  } else if (textStatus === 'abort') {

					    alert('Ajax request aborted.');

					  } else {

					    alert('Uncaught Error: ' + jqXHR.responseText);

					  }
				})
			});

	$('#Usuarios').DataTable( {
		"bDefenderRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"nvoUsuario.php",
			"type":"POST",

		},
		"columns":[
			{"data":"id"},
			{"data":"Nick"},
			{"data":"Nombre"},
			{"data":"Estado"},
			{"data":"Acciones"}
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select>'+
		    	'<option value="5">5</option>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});



