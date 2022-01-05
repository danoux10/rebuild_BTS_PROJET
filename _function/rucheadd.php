<?php
	@$valid_ruche = $_POST['valid_ruche'];
	@$ruche_value = htmlspecialchars($_POST['lora_id']);
	@$ruche_name = htmlspecialchars($_POST['ruche_name']);
	function addRuche(){
		global $bdd,$valid_ruche,$ruche_value,$ruche_name;
		$message = array();
		if(isset($valid_ruche)){
			$ruche_add = $bdd->prepare('insert into ruche set ruche_value=?, ruche_name=?');
			$ruche_add->execute([$ruche_value,$ruche_name]);
			$message['ruche'] ="La ruche $ruche_name bien été ajouter";
			return $message['ruche'];
		}
	}
	
