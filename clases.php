<?php 

interface Trabajos 
{
	public function MalasHierbas($metros);
	public function Langostas($metros);
	public function General($metros);
}

/**
 * 
 */
class fumigar implements Trabajos
{
	public $cliente;
	public $granja;
	public $metros;
	public $servicio;

	public function __construct($cliente, $granja, $metros, $servicio)
	{
		$this->cliente = $cliente;
		$this->granja = $granja;
		$this->metros = $metros;
		$this->servicio = $servicio;
	}

	public function __toString()
	{
		echo 'Nombre del Cliente : '.$this->cliente.'<br>'.'Nombre de la Granja : '.$this->granja.'<br>'.'Metros Cuadrados : '.$this->metros.'<br>'.'Servicio Requerido : '.$this->servicio;
	}

	public function generarFecha()
	{
		//ESTE METODO ARROJA UNA HORA INCORRECTA, NO OLVIDES ARREGLARLO GALAN ///YA ESTA ARREGLADO GUAPO!!!.
		echo '<br> Fecha : '.date("d/m/Y").' Hora : '.date("H:i:s");
	}

	public function MalasHierbas($metros)
	{
		$monto = 50000;
		if ($metros > 300) {
			$descuento = ($monto*10)/100;
			$total = $monto-$descuento;
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Contra Malas Hierbas con un monto a pagar de : '.$monto.'<br> Ya que posee una granja superior a los 300 metros cuadrados se le hace un descuento del 10% para un total de : '.$total;
		}else{
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Contra Malas Hierbas con un monto a pagar de : '.$monto;
		}
	}

	public function Langostas($metros)
	{
		$monto = 70000;
		if ($metros > 300) {
			$descuento = ($monto*10)/100;
			$total = $monto-$descuento;
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Contra Libelulas con un monto a pagar de : '.$monto.'<br> Ya que posee una granja superior a los 300 metros cuadrados se le hace un descuento del 10% para un total de : '.$total;
		}else{
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Contra Libelulas con un monto a pagar de : '.$monto;
		}
	}

	public function General($metros)
	{
		$monto = 100000;
		if ($metros > 300) {
			$descuento = ($monto*10)/100;
			$total = $monto-$descuento;
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Fumigacion General con un monto a pagar de : '.$monto.'<br> Ya que posee una granja superior a los 300 metros cuadrados se le hace un descuento del 10% para un total de : '.$total;
		}else{
			echo '<br><br> El Cliente : '.$this->cliente.' eligio el servicio Fumigacion General con un monto a pagar de : '.$monto;
		}
	}
}