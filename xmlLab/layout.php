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
  <div id='page-wrap' height = "1000px">
	<header class='main' id='h1'>

		<?php if(isset($username) &&($username!="")){?>
			<span class="right" style="display:none;"><a href="registrar.php">Registrarse</a></span>
			<span class="right" style="display:none;"><a href="login.php">Login</a></span>
			<span class="right" ><a href="layout.php" id = "url" >Logout</a></span>
		<?php } 
		else { ?>
			<span class="right"><a href="registrar.php">Registrarse</a></span>
			<span class="right"><a href="login.php">Login</a></span>
			<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<?php } ?>
		
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	   <nav class='main' id='n1' role='navigation'>
	   <?php 
	   if(isset($username) &&($username!="")){?>
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
    	<img src="images/quiz.jpg" alt="Foto Quiz" style="width:700px;height:495px;">
        </div>

    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('#url').click(function(){
			alert("Agur!")});
	});
</script>
