function Insertar()
	{
		var nick =$('#tbNick').val();
		var nombres =$('#tbNombres').val();
		var ap_paterno =$('#tbAp_Paterno').val();
		var ap_materno =$('#tbAp_Materno').val();
		var email =$('#tbEmail').val();
		var pwd =$('#tbPwd').val();
		$.ajax({
			type:"POST",
			url:"nvo_Usuario.php",
			data:"nick="+nick+"&nombre="+nombres+"&appaterno="+ap_paterno+"&apmaterno="+ap_materno+"&email="+email+"&pwd="+pwd,

		})
		.done(function()
		{
			alert("Ok");
			document.getElementById('tbNick').value= "";
			document.getElementById('tbNombres').value= "";
			document.getElementById('tbAp_Paterno').value= "";
			document.getElementById('tbAp_Materno').value= "";
			document.getElementById('tbEmail').value= "";
			document.getElementById('tbPwd').value= "";
		})
		.fail(function()
		{
			alert("Error");
			document.getElementById('tbNick').value= "";
			document.getElementById('tbNombres').value= "";
			document.getElementById('tbAp_Paterno').value= "";
			document.getElementById('tbAp_Materno').value= "";
			document.getElementById('tbEmail').value= "";
			document.getElementById('tbPwd').value= "";
		})
		.always(function()
		{
			var tabla = $('#Usuarios').DataTable({
				retrieve: true,
				ajax:"data.json"
			});

			tabla.ajax.reload(null,false);
		}
		)
	}