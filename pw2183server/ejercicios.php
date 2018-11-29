<?php/*
	//Codigo dificil de leer
	$variable = 10;
	for ($i=0; $i < ; $i++) { 
		//echo depura programas, lo manda a la consola y a la pantalla, es un comando de consola pertene al SO
		//print es la manera de mandar a imprimir a la pantalla
		//php puro (Hola PHP <br>)
?>
	Hola PHP <br>
<?php
	}
*/?>


<?php
//Segundo ejemplo de conexion a un servidor y BD
$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$password = "";
$basedatos = "pw09";

$conexion = mysqli_connect($servidor,$usuario,$password,$basedatos);
$sql = "select ncontrol,nombre,apellido,edad from alumnos";
$resultado = mysqli_query($conexion,$sql);
$arregloDatos = array();
if(mysqli_num_rows($resultado) > 0){
	while($registro = mysqli_fetch_array($resultado)){
		$arregloDatos[] = $registro;

	}
}

print json_encode($arregloDatos);
?>