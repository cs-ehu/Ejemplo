<?php
	include "ParametrosDB0.php";

	$mysqli = mysqli_connect($server, $user, $pass, $basededatos);
	if (!$mysqli) {
		die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
	}
	if(isset( $_POST['Email']) && isset( $_POST['Contrasena'])){
	$username = $_POST['Email'];
	$contrasena = $_POST['Contrasena'];

	$usuarios = mysqli_query($mysqli,"SELECT * FROM usuarios
	WHERE Direccion = '$username' and Contrasena = '$contrasena'");
	$cont = mysqli_num_rows($usuarios); //Se verifica el total de filas devueltas
	mysqli_close($mysqli); //cierra la conexion
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
		<?php if(isset($cont) &&($cont==1)){?>
		<span class="right" style="display:none;"><a href="registrar.php">Registrarse</a></span>
      	<span class="right" style="display:none;"><a href="login.php">Login</a></span>
		<span class="right" ><a href="layout.php" id = "url" >Logout</a></span>
		<?php }
		else {?>
		<span class="right" ><a href="registrar.php">Registrarse</a></span>
      	<span class="right" ><a href="login.php">Login</a></span>
      	<span class="right" style="display:none;" ><a href="/logout">Logout</a></span>
		<?php } ?>
		<h2>Quiz: Juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<?php if(isset($cont) &&($cont==1)){?>
			<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
			<span><a href='preguntas.php?email=<?php echo $username; ?>'>Insertar Pregunta</a></span>
			<span><a href='verDatos.php?email=<?php echo $username; ?>'>Ver preguntas</a></span>
			<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
		<?php }
		else { ?>
			<span><a href='layout.php'>Inicio</a></spam>
			<span><a href='creditos.php'>Creditos</a></spam>
		<?php } ?>
	</nav>

    <section class="main" id="s1">
    <div>
        <form id='login' name='login' action='login.php' method = 'post'>
        	<p>Email <strong>(*)</strong>:</p>
        	<input id="Email" style="width:300px" type="text" name="Email" autocomplete="off" placeholder="Ej: tom001@ikasle.ehu.eus"/>

        	<p>Contrasena <strong>(*)</strong></p>
        	<input id="Contrasena" style="width:300px" type="password" name="Contrasena" autocomplete="off"/>

			<br><br>
            <input type ="submit" id="botonEnviar" value ="Enviar"></input>
        </form>
    </div>
	<?php if(isset( $_POST['Email']) && isset( $_POST['Contrasena'])){?>
		<?php if($cont==1){?>
				<script>alert('Bienvenido al Sistema: "<?php echo $username; ?>" ')</script>
				<p>Login correcto</p><a href='preguntas.php?email=<?php echo $username; ?>'>Puede insertar preguntas</a>
		<?php }
		else { ?>
			<p>Parametros de login incorrectos</p><a href='login.php'>Puede intentarlo de nuevo</a>
	   <?php }?>
   <?php }?>
    </section>
    <footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
    </body>
</html>
<script>
	$(document).ready(function(){
		$('#url').click(function(){
			alert("Agur!")});
	});
</script>
