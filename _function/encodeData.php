<?php
	session_start();
	include_once '../_config/bdd.php';
	header('Content-Type: application/json');
	$rqData= $bdd->query("select * from ruche_data where data_id=3");
	$dataView = array();
	foreach ($rqData as $val){
		$dataView[]=$val;
	}
	
	echo json_encode($dataView);