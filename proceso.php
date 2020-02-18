<?php 
require_once('clases.php');
include('index.php');

echo '<br><br><br><br><center>';

$cliente=$_POST['cliente'];
$granja=$_POST['granja'];
$metros=$_POST['metros'];
$servicio=$_POST['servicio'];

$obj= new fumigar($cliente, $granja, $metros, $servicio);
$obj->__toString();
$obj->generarFecha();

switch ($servicio) {
	case 'Contra Malas Hierbas':
		$obj->MalasHierbas($metros);
		break;

	case 'Contra Langostas':
		$obj->Langostas($metros);
		break;
	
	case 'Fumigacion General':
		$obj->General($metros);
		break;

	default:
		# code...
		break;
}

echo '</center>';
