<?php
/**
* Static interface check for ip 103.122.90.18
*
*
* **/
	require('Router.php');
	$API = new RouterosAPI();
	$data = new StdClass();
	$ip = $_GET['ip'];
	$user = $_GET['user'];
	$pass = $_GET['pass'];
	if ($API->connect($ip,$user,$pass)) {
		$arrID = $API->comm(
				"/interface/print",
				array()
			);
		$API->disconnect();
		var_dump($arrID);
		echo "<br>";
	} else {
			$data->estado = 0;
	}
	
?>