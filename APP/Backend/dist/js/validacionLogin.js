$(document).on("ready",inicio);

function inicio()
{
	$("#error").hide();
	$("#btnvalidar").click(validar);
	
/*	Descomentar para validar inLive
	$("#user").keyup(validar);
	$("#pass").keyup(validar);
*/
}

function validar()
{
	var usuario = document.getElementById("user").value;
	var password = document.getElementById("pass").value;
	if(usuario ==	null || usuario.length == 0 || /^\s+$/.test(usuario) || password ==	null || password.length == 0 || /^\s+$/.test(password))
	{
		$("#error").empty();
		$("#error").append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>").show();
		$("#error").hide();

		if(usuario ==	null || usuario.length == 0 || /^\s+$/.test(usuario))
		{
			$("#user").parent().attr("class","form-group has-feedback has-error");
			$("#error").append("<i class='icon fa fa-ban'></i>Debe ingresar un usuario<br>").show();
		}
		else{
				$("#user").parent().attr("class","form-group has-feedback has-success");
			}

		if(password ==	null || password.length == 0 || /^\s+$/.test(password))
		{
			$("#pass").parent().attr("class","form-group has-feedback has-error");
			$("#error").append("<i class='icon fa fa-ban'></i>Debe ingresar su contraseña").show();
		}
		else 
		{
				$("#pass").parent().attr("class","form-group has-feedback has-success");

		}

		/* 	Bloque para validar numeros (ejemplo)
			if(isNaN(password))
			{
				alert("Solo se aceptan cantidades numéricas");
				return false;
			}
		*/	
		return false;
	}
	else if(usuario != "" && password != "")
	{
		$("#error").empty();
		$("#error").append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>").show();
		$("#error").hide();	
			$.ajax({
			type: 'POST',
			url: 'server_conn.php',
			data: 'user=' + $('#user').val() + '&pass=' + $('#pass').val(),
			success:function(msj){
				if ( msj == 1 ){
					$("#pass").parent().attr("class","form-group has-feedback has-success");
					$("#user").parent().attr("class","form-group has-feedback has-success");
					 window.location="indexadministrador.html";
				}
				else{
					$("#error").append("<i class='icon fa fa-ban'></i>Usuario Inválido: <br>"+msj).show();
					$("#user").parent().attr("class","form-group has-feedback has-error");
					$("#pass").parent().attr("class","form-group has-feedback has-error");
				}
			},
			error:function(){
				$("#error").append("<i class='icon fa fa-ban'></i>Ha ocurrido un error en la conexión con la Base de Datos.").show();		
			}
			});	
	
	}
	return false;	
}
