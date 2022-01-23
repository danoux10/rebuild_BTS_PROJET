<?php
		$errors = array();
		//LINK view ruche
		//ANCHOR selection view
		@$viewBtn = $_POST['view_ruche'];
		
		if(isset($viewBtn)){
				$firstdate= $_POST['firstDate'];
				$lastdate= $_POST['lastDate'];
				$hoursStart= $_POST['hoursStart'];
				$hoursEnd= $_POST['hoursEnd'];
				if(empty($_POST['radioRuche'])){
						echo "<script >alert('selectionner une Ruche'); </script>";
				}else{
						$_SESSION['ruche']=$_POST['radioRuche'];
						$_SESSION['first']=$firstdate;
						$_SESSION['last']=$lastdate;
						$_SESSION['start']=$hoursStart;
						$_SESSION['end']=$hoursEnd;
				}
		}
//LINK admin ruche
	//ANCHOR add ruche
	@$add_ruche= $_POST['add_ruche'];
	if (isset($add_ruche)){
			$ruche_value=htmlspecialchars($_POST['ruche_value']);
			$ruche_name=htmlspecialchars($_POST['ruche_name']);
			$ruche_add = $bdd->prepare('insert into ruche set ruche_value=?, ruche_name=?');
			$ruche_add->execute([$ruche_value,$ruche_name]);
			echo "<script >alert('ruche ajouter'); </script>";
	}
	
	//ANCHOR add rucher
	@$add_rucher= $_POST['add_rucher'];
	if (isset($add_rucher)){
			$rucher_name =htmlspecialchars($_POST['rucher_name']);
			$location =htmlspecialchars($_POST['location']);
			$rucher_add = $bdd->prepare('insert into rucher_data set rucher_name=?,rucher_location=?' );
			$rucher_add->execute([$rucher_name,$location]);
			echo "<script >alert('rucher ajouter'); </script>";
	}
	
	//ANCHOR ruche in rucher
	@$rucheInRucher = $_POST['ruche_rucher'];
	if(isset($rucheInRucher)){
			@$rucheSelect = $_POST['checkRuche'];
			@$rucherSelect = $_POST['rucher'];
			if($rucheSelect==NULL){
					$errors['selectRuche']="choisir les ruches a ajouter";
			}
			if($rucherSelect==NULL){
					$errors['selectRucher']="choisir un rucher";
			}
			if($rucheSelect!=NULL && $rucherSelect!=NULL){
					foreach ($rucheSelect as $item){
							$test = $item;
							$upRuche = $bdd->prepare("update ruche set rucher_value=?,rucher_affect=1 where ruche_id=?");
							$upRuche->execute([$rucherSelect,$test]);
					}
					$errors['rucheInRucher']="les ruches ont bien été ajoutér au rucher";
			}
	}
?>
