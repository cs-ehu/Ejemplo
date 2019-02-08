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
		<span class="right" ><a href="layout.php" id = "url" >Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	   <nav class='main' id='n1' role='navigation'>
			<span><a href='layout.php?email=<?php echo $username; ?>'>Inicio</a></span>
			<span><a href='preguntas.php?email=<?php echo $username; ?>'>Insertar Pregunta</a></span>
			<span><a href='verDatos.php?email=<?php echo $username; ?>'>Ver preguntas</a></span>
			<span><a href='creditos.php?email=<?php echo $username; ?>'>Creditos</a></span>
	   </nav>

    <section class="main" id="s1">
        <div>
</html>
<script>
	$(document).ready(function(){
		$('#url').click(function(){
			alert("Agur!")});
	});
</script>
<?php
//phpinfo();
include "ParametrosDB0.php";
$mysqli = mysqli_connect($server, $user, $pass, $basededatos);
if (!$mysqli)
{
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}

$correo = $_POST['nombreDirCorreo'];
$pregunta = $_POST['nombrePregunta'];
$respuesta =$_POST['nombreRespCorrecta'];
$respuestaInc1= $_POST['nombreRespIncorrecta1'];
$respuestaInc2= $_POST['nombreRespIncorrecta2'];
$respuestaInc3= $_POST['nombreRespIncorrecta3'];
$complejidad=$_POST['nombreComplejidad'];
$tema= $_POST['nombreTema'];

// Validamos desde el lado del servidor que no haya campos obligatorios vacios,
// asi como tambien el correo y la complejidad.
if ($correo != "" && $pregunta != "" && $respuesta !="" && $respuestaInc1 != "" && $respuestaInc2 != ""
&& $respuestaInc3 != "" && $complejidad != "" && $tema!= ""){

	if (!preg_match("/^([a-zA-Z_.+-])+[0-9]{3}\@ikasle.ehu.eus+$/",$correo)) {
		$correoError = "El correo no cumple el formato requerido";
		die ( $correoError . mysqli_connect_error());
	}
	if (!preg_match("/^[0-5]$/",$complejidad)) {
		$complejidadError = "La complejidad debe estar entre 0 y 5";
		die ( $complejidadError . mysqli_connect_error());
	}
}
else{
	 die ( "Algun campo obligatorio vacio" . mysqli_connect_error());
}

$sql="INSERT INTO preguntas(Direccion, Pregunta, RespCorrecta, RespIncorrecta1,
RespIncorrecta2, RespIncorrecta3, Complejidad, Tema) VALUES
('$_POST[nombreDirCorreo]','$_POST[nombrePregunta]','$_POST[nombreRespCorrecta]',
'$_POST[nombreRespIncorrecta1]', '$_POST[nombreRespIncorrecta2]','$_POST[nombreRespIncorrecta3]'
,'$_POST[nombreComplejidad]','$_POST[nombreTema]')";

if (!mysqli_query($mysqli ,$sql))
{
die('Error en el almacenamiento de la pregunta: ' . mysqli_error($mysqli));
}

echo "<strong>Pregunta almacenada correctamente.</strong>";

// Almacenar tambien en el XML

if (file_exists('preguntas.xml')) {
    $xml = simplexml_load_file('preguntas.xml');
}
else {
    exit('Error abriendo preguntas.xml.');
}
$item = $xml->addChild ('assessmentItem');
$item-> addAttribute ('subject', $tema);
$item-> addAttribute ('author', $correo);

$body = $item->addChild('itemBody');
$body->addChild('p', $pregunta);

$correct = $item->addChild('correctResponse');
$correct->addChild('value',$respuesta);

$incorrect = $item->addChild('incorrectResponses');
$incorrect->addChild('value',$respuestaInc1);
$incorrect->addChild('value',$respuestaInc2);
$incorrect->addChild('value',$respuestaInc3);

if (!$xml->asXML('preguntas.xml'))
{
	die('Error en el almacenamiento del XML');
}
else {
	echo "<strong>pregunta almacenada en el XML correctamente.</strong>";
}
//print_r($xml);
?>
<html>
<p> <a href='verDatos.php?email=<?php echo $username; ?>'> Ver preguntas </a>
<p> <a href='verPreguntasXML.php?email=<?php echo $username; ?>'> Ver preguntas XML </a>
</html>
<?php
mysqli_close($mysqli);
echo '</div> </section> </div> </body> </html>'
?>
