<?php
	if(isset( $_GET['email'])){
	$username = $_GET['email'];
	}
?>
<head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Ver Datos</title>
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
      	<span class="right"><a href="layout.php" id="url">Logout</a></span>
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
		<table border=1> <tr> <th> Autor </th> <th> Pregunta </th>
        <th> RespCorrecta </th> </tr>

<?php

$xml = simplexml_load_file("preguntas.xml");
foreach ($xml->children() as $pregunta){
    echo '<tr ><td>' . $pregunta['author'] .
    '</td> <td>' . $pregunta->itemBody->p .
    '</td> <td>'. $pregunta->correctResponse->value .
    '</td> </tr>';
}
echo '</table> </div> </section> </body>';

?>
<script>
	$('#url').click(function(){
	alert("Agur!")});
</script>
