<?php

include_once ('Sesion.php');
include_once ('Collector.php');

class SesionCollector extends Collector
{
	
	function showSesion() 	{
		$rows = self::$db->getRows("SELECT * FROM sesion ");
		$arraySesion = array();
		foreach ($rows as $c) {
			$aux = new Sesion($c{'id_sesion'}, $c{'usuario'}, $c{'pasw'});
			array_push($arraySesion, $aux);
		}
		return $arraySesion;
	}
	
	function insertSesion($usuario, $pasw) {
    $new_row = self::$db->getRow("Insert into sesion (usuario, pasw) values ('$usuario','$pasw')");
 	return 1;               
  }
	
	
}


?>
