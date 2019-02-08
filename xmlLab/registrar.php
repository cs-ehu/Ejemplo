<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>

  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <div id='page-wrap' >
	<header class='main' id='h1'>
		<span class="right"><a href="registrar.php">Registrarse</a></span>
      	<span class="right"><a href="login.php">Login</a></span>
      	<span class="right" style="display:none;"><a href="layout.php">Logout</a></span>
		<h2>Quiz: Juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.php'>Inicio</a></spam>
		<span><a href='creditos.php'>Creditos</a></spam>
	</nav>

    <section class="main" id="s1">
    <div>
        <form id='fRegistro' name='fRegistro' action='registrar.php' enctype=multipart/form-data method = 'post'>
        	<p> Dirección de correo electronico <strong>(*)</strong></p>
        	<input id="dirCorreo" style="width:300px" type="text" name="DirCorreo" autocomplete="off" placeholder="Ej: tom001@ikasle.ehu.eus"/>

        	<p> Nombre y apellidos <strong>(*)</strong></p>
        	<input id="nombre" style="width:300px" type="text" name="Nombre" autocomplete="off" placeholder="Ej: Jose Vadillo"/>

        	<p>Contrasena <strong>(*)</strong></p>
        	<input id="contrasena" style="width:300px" type="password" name="Contrasena" autocomplete="off"/>

			<p>Repetir Contrasena <strong>(*)</strong></p>
        	<input id="contrasena2" style="width:300px" type="password" name="Contrasena2" autocomplete="off"/>
			<br><br>
            <input type="file" id='picture' name='picture' accept="image/*"></input>
			<br><br>
            <input type ="submit" id="botonEnviar" value ="Enviar Solicitud"></input>
			
						
			<?php
				//phpinfo();
				include "ParametrosDB0.php";
				$mysqli = mysqli_connect($server, $user, $pass, $basededatos);
				if (!$mysqli)
				{
				die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
				}

				if(isset( $_POST['DirCorreo']) && isset( $_POST['Nombre'])&& isset( $_POST['Contrasena'])){

					$correo = $_POST['DirCorreo'];
					$nombre = $_POST['Nombre'];
					$contrasena = $_POST['Contrasena'];
					$file_get = $_FILES['picture']['name'];
					$file_to_saved = "images/".$file_get;
					
					$usuarios = mysqli_query($mysqli,"SELECT * FROM usuarios
					WHERE Direccion = '$correo'");
					$cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
					
					if($cont >= 1){
						echo "<br><br>";
						die("Este usuario ya se enuentra registrado, ingrese otro correo");
					}


					// Validamos desde el lado del servidor que no haya campos obligatorios vacios,
					// asi como tambien el correo y la complejidad.
					if ($correo != "" && $nombre != "" && $contrasena !=""){

						if (!preg_match("/^([a-zA-Z_.+-])+[0-9]{3}\@ikasle.ehu.eus+$/",$correo)) {
						$correoError = "El correo no cumple el formato requerido";
						die ( $correoError . mysqli_connect_error());
						}
					}
					else{
						die ( "Algun campo obligatorio vacio" . mysqli_connect_error());
					}

					$sql="INSERT INTO usuarios(Direccion, Nombre, Contrasena, Imagen) VALUES
					('$_POST[DirCorreo]','$_POST[Nombre]','$_POST[Contrasena]','$file_to_saved')";
					if (!mysqli_query($mysqli ,$sql))
					{
						die('Error en el almacenamiento del registro: ' . mysqli_error($mysqli));
					}
					echo "<script> alert('Solicitud enviada correctamente.');</script>";
					echo "<br><br><strong>Registrado correctamente.</strong><br><br><a href='login.php'> ¿Quieres iniciar sesion?</a>";

				}
				mysqli_close($mysqli);
			?>
			
			
        </form>
    </div>
    </section>
    <footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
    </body>
    </html>

<script>
	$('#fRegistro').submit(function(e){
        // valida campos nulos
        var correo = $('#dirCorreo');
        var nombre = $('#nombre');
        var contrasena = $('#contrasena');
        var contrasena2 = $('#contrasena2');
        var mensaje = '';
		if(validarNulo(correo)||validarNulo(nombre)||validarNulo(contrasena) ||
        validarNulo(contrasena2)) {
			mensaje ="\nAlgun campo obligatorio vacio";
            alert(mensaje);
			return false;
        }

        // valida el correo con el formato correspondiente
        var correoRegex = /^([a-zA-Z_.+-])+[0-9]{3}\@ikasle.ehu.eus+$/;
        var correo = $("#dirCorreo");
        if (!validarRegex(correo,correoRegex,"Correo en formato erroneo" + mensaje)){
			return false;
		}
		else {
		    $('#dirCorreo').removeClass("error");
		}
		var nombre = $("#nombre");
		var nombreRegex = /^\b\w+\b(?:.*?\b\w+\b){1,}$/
        if (!validarRegex(nombre,nombreRegex,"El nombre debe poseer al menos dos palabras" + mensaje)){
			return false;
		}
        else {
		    $('#nombre').removeClass("error");
        }
        var password = $('#contrasena');
        var password2 = $('#contrasena2');
        if (password.val().length < 8) {
            alert('La contrasena debe tener al menos 8 caracteres!');
            return false;
        }
        else {
            password.removeClass("error");
        }
        if (password.val() != password2.val()) {
            alert('Las contrasenas ingresadas no coinciden');
            return false;
        }
        else {
            password2.removeClass("error");
        }
		return true;
	});

    function validarNulo(input){
        //Función para comprobar los campos de texto
        input.removeClass('error');
        if(input.val().length <= 0){
            errorCampo(input);
            return true;
        }
        else return false;
    }

    function validarRegex(unInput,expresion,mensaje){
        // funcion que recibe un input, una expresion regular y un mensaje,
        // y chequea que el input cumpla la expresion, en caso de que no sea
        // asi, lanza el mensaje de error introducido.
		if(!expresion.test(unInput.val())){
			alert(mensaje);
			errorCampo(unInput);
            return false;
		}
        return true;
    }

	function errorCampo(campoConError){
		campoConError.addClass('error');
	}

</script>

