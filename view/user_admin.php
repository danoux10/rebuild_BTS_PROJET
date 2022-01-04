<?php
	//include function
	include_once '../_function/inscription.php';
	
	//selection user code
	include_once '../_function/user_gestion.php';
	
	//add status
	@$addStatus= $_POST['submit_status'];
	if(isset($addStatus)){
		$statusName = htmlspecialchars($_POST['status_name']);
		$statusAdd = $bdd->prepare("insert into status set status_name=?");
		$statusAdd -> execute([$statusName]);
	}
	
?>