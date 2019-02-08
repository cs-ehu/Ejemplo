<?php 
	if(isset( $_GET['email'])){
	$username = $_GET['email'];
	}
?>
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
		<span class="right" style="display:none;"><a href="registrar.php">Registrarse</a></span>
      	<span class="right" style="display:none;"><a href="login.php">Login</a></span>
      	<span class="right" ><a href="layout.php" id="url">Logout</a></span>
		<h2>Quiz: Juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
		<span><a href='preguntas.php?email=<?php echo $username; ?>'>Insertar Pregunta</a></span>
		<span><a href='verDatos.php?email=<?php echo $username; ?>'>Ver preguntas</a></span>
		<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
	</nav>

    <section class="main" id="s1">
    <div>
        <form id='fpreguntas' name='fpreguntas' action='InsertarPregunta.php?email=<?php echo $username; ?>' method = 'post'>
        	<p> Dirección de correo del autor de la pregunta <strong>(*)</strong></p>
        	<input id="dirCorreo" style="width:300px" type="text" name="nombreDirCorreo" autocomplete="off" value=<?php echo $username; ?> readonly />

        	<p> Enunciado de la pregunta <strong>(*)</strong></p>
        	<input id="pregunta" style="width:300px" type="text" name="nombrePregunta" autocomplete="off" placeholder="Ej: Elemento HTML"/>

        	<p>Respuesta correcta <strong>(*)</strong></p>
        	<input id="respCorrecta" style="width:300px" type="text" name="nombreRespCorrecta" autocomplete="off" placeholder="Ej: <TABLE>"/>

            <p>Respuesta incorrecta 1 <strong>(*)</strong></p>
        	<input id="respIncorrecta1" style="width:300px" type="text" name="nombreRespIncorrecta1" autocomplete="off" placeholder="Introducir una respuesta incorrecta"/>

            <p>Respuesta incorrecta 2 <strong>(*)</strong></p>
        	<input id="respIncorrecta2" style="width:300px" type="text" name="nombreRespIncorrecta2" autocomplete="off" placeholder="Introducir una respuesta incorrecta"/>

            <p>Respuesta incorrecta 3 <strong>(*)</strong></p>
        	<input id="respIncorrecta3" style="width:300px" type="text" name="nombreRespIncorrecta3" autocomplete="off" placeholder="Introducir una respuesta incorrecta"/>

            <p>Complejidad de la pregunta entre 0 y 5 <strong>(*)</strong></p>
        	<input id="complejidad" style="width:300px" type="text" name="nombreComplejidad" autocomplete="off" placeholder="Ej: 5"/>

            <p>Tema de la pregunta <strong>(*)</strong></p>
            <input id="tema" style="width:300px" type="text" name="nombreTema" autocomplete="off" placeholder="Ej: HTML"/>
			<br><br>
            <input type ="submit" id="botonEnviar" value ="Enviar">Enviar pregunta</input>
        </form>
	</div>
    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
    </div>
</body>
</html>
<script>
	$('#fpreguntas').submit(function(){
        // valida campos nulos
        var form = $('#fpreguntas');
		var mensaje = "";
		if(validarNulos(form)) {
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
        // valida la pregunta con el largo correspondiente
		var pregunta = $("#pregunta");
        var preguntaRegex = /^([a-zA-Z_.?+-¨ ¨]){10,}$/;
        if(!validarRegex(pregunta,preguntaRegex,"La pregunta debe tener al menos 10 caracteres!" + mensaje)) {
			return false;
		}
		else {
		    $('#pregunta').removeClass("error");
		}
        // valida la complejidad que debe estar en el intervalo [0-5]
        var complejidad = $("#complejidad");
        var complejidadRegex = /^[0-5]$/;
        if (!validarRegex(complejidad,complejidadRegex,"La complejidad debe estar entre 0 y 5!" + mensaje)){
		    errorCampo($('#complejidad'));
		    return false;
		}
		alert("Pregunta enviada correctamente.");
		return true;
	});

    function validarNulos(obj){
        //Función para comprobar los campos de texto
        algunoVacio = false;
        obj.find("input").each(function() {
            var $this = $(this);
            if( $this.val().length <= 0 )
			{
				algunoVacio = true;
				errorCampo($this);
			}
			else{
				($this).removeClass("error");
			}
        });
        return algunoVacio;
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
	
	$('#url').click(function(){
	alert("Agur!")});

</script>

