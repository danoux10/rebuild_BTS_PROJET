<?php
	@$valid_ruche = $_POST['valid_ruche'];
	@$ruche_value = htmlspecialchars($_POST['lora_id']);
	@$ruche_name = htmlspecialchars($_POST['ruche_name']);
	function addRuche(){
		global $bdd,$valid_ruche,$ruche_value,$ruche_name;
		$message = array();
			$ruche_add = $bdd->prepare('insert into ruche set ruche_value=?, ruche_name=?');
			$ruche_add->execute([$ruche_value,$ruche_name]);
			$message['ruche'] ="La ruche $ruche_name bien été ajouter";
			return $message['ruche'];
	}
	
	@$valid_rucher = $_POST['valid_rucher'];
	@$location = htmlspecialchars($_POST['location']);
	@$rucher_name = htmlspecialchars($_POST['name_rucher']);
	@$ruche_select = $_POST['ruche_value'];
	function addRucher(){
		global $bdd,$location,$rucher_name;
				$rucher_add = $bdd->prepare('insert into rucher_data set rucher_name=?,rucher_location=?' );
				$rucher_add->execute([$rucher_name,$location]);
				$message ="le rucher $rucher_name qui à pour emplacment $location avec la ruche $ruche_select";
		return $message();
	}
	
