<?php 
	if(isset( $_GET['email'])){
	$username = $_GET['email'];
	}
?>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Creditos</title>
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
  <div id='page-wrap' height = "1000px">
	<header class='main' id='h1'>
		<h1>Creditos</h1>
    </header>
	   <nav class='main' id='n1' role='navigation'>
	   <?php if(isset($username) &&($username!="")){?>
			<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
			<span><a href='preguntas.php?email=<?php echo $username; ?>'>Insertar Pregunta</a></span>
			<span><a href='verDatos.php?email=<?php echo $username; ?>'>Ver preguntas</a></span>
			<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
		<?php } 
		else { ?>
			<span><a href='layout.php'> Inicio</a></span>
		<?php } ?>
	   </nav>

    <section class="main" id="s1">

        <div>
            <p><img src="images/tomas.jpg" alt="Foto de Tomas" style="float:left;width:150px;height:150px;">
            <br><br><strong>Nombre y apellido:</strong> <em>Tomas Szemzo</em><br>
            <strong>Especialidad dentro del grado:</strong><em> Ingenieria de software</em><br>
            <strong>Localidad de residencia:</strong><em> Donosti</em></p>
        </div>
        <br><br>
        <div>
            <p><img src="images/fede.jpg" alt="Foto de Fede" style="float:left;width:150px;height:150px;">
            <br><strong>Nombre y apellido:</strong> <em>Federico Buroni</em><br>
            <strong>Especialidad dentro del grado:</strong><em> Ingenieria de software</em><br>
            <strong>Localidad de residencia:</strong><em> Donosti</em></p>
        </div>

    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/tszemzo/proyectoSW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
