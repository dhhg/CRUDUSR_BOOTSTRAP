function Actualizar()
{
		$('#Actualizar').on('click', function () {
    		var $btn = $(this).button('Actulizar');
		    
			var nick =$('#tbNick_Act').val();
			var nombres =$('#tbNombres_Act').val();
			var ap_paterno =$('#tbAp_Paterno_Act').val();
			var ap_materno =$('#tbAp_Materno_Act').val();
			var email =$('#tbEmail_Act').val();
			var pwd =$('#tbPwd_Act').val();
			var id=$('#tbId_Act').val();

			$.ajax({
				type:"GET",
				url:"ActUsuario.php",
				data:"id="+id+"&nick="+nick+"&nombre="+nombres+"&ap_paterno="+ap_paterno+"&ap_materno="+ap_materno+"&email="+email+"&pwd="+pwd,

			})
			.done(function()
			{
				document.getElementById('tbNick_Act').value= "";
				document.getElementById('tbNombres_Act').value= "";
				document.getElementById('tbAp_Paterno_Act').value= "";
				document.getElementById('tbAp_Materno_Act').value= "";
				document.getElementById('tbEmail_Act').value= "";
				document.getElementById('tbPwd_Act').value= "";
				document.getElementById('tbId_Act').value= "";
			})
			.fail(function()
			{
				document.getElementById('tbNick_Act').value= "";
				document.getElementById('tbNombres_Act').value= "";
				document.getElementById('tbAp_Paterno_Act').value= "";
				document.getElementById('tbAp_Materno_Act').value= "";
				document.getElementById('tbEmail_Act').value= "";
				document.getElementById('tbPwd_Act').value= "";
				document.getElementById('tbId_Act').value= "";
			})
			.always(function()
			{
				var tabla = $('#Usuarios').DataTable({
					retrieve: true,
					ajax:"data.json"
				});

				tabla.ajax.reload(null,false);
			})

			$btn.button('reset');
		  });


}