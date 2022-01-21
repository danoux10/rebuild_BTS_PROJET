<?php
		$errors = array();
		//LINK view ruche
		//var declaration
		
//LINK admin ruche
	//TODO if update ruche or rucher echo error
	//var declaration
		//add-btn
 @$add_ruche= $_POST['add_ruche'];
 @$add_rucher= $_POST['add_rucher'];
		//update-btn
		@$update_ruche=$_POST['update_ruche'];
		@$update_rucher=$_POST['update_rucher'];
	//
//	//ANCHOR add ruche
	if (isset($update_ruche) || isset($update_rucher)){
			$errors['nonDisponible']="fonction indisponible pour le moment";
	}
	
	if (isset($add_ruche)){
			$ruche_value=htmlspecialchars($_POST['ruche_value']);
			$ruche_name=htmlspecialchars($_POST['ruche_name']);
			$ruche_add = $bdd->prepare('insert into ruche set ruche_value=?, ruche_name=?');
			$ruche_add->execute([$ruche_value,$ruche_name]);
			echo "<script >alert('ruche ajouter'); </script>";
	}
	
	if (isset($add_rucher)){
			$rucher_name =htmlspecialchars($_POST['rucher_name']);
			$location =htmlspecialchars($_POST['location']);
			$rucher_add = $bdd->prepare('insert into rucher_data set rucher_name=?,rucher_location=?' );
			$rucher_add->execute([$rucher_name,$location]);
			echo "<script >alert('rucher ajouter'); </script>";
			
	}
	
?>
