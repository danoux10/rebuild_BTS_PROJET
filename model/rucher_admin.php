<?php
		$errors = array();
		//LINK view ruche
		//ANCHOR selection view
		@$viewBtn = $_POST['view_ruche'];
		if(isset($viewBtn)){
				$dateStart= $_POST['firstDate'];
				$dateEnd= $_POST['lastDate'];
				$hoursStart= $_POST['hoursStart'];
				$hoursEnd= $_POST['hoursEnd'];
				$_SESSION['first']=$dateStart;
				$_SESSION['last']=$dateEnd;
				$_SESSION['start']=$hoursStart;
				$_SESSION['end']=$hoursEnd;
				if(empty($_POST['radioRuche'])){
						echo "<script >alert('selectionner une Ruche'); </script>";
				}else{
						$ruche = $_POST['radioRuche'];
						$_SESSION['ruche']=$ruche;
						$rucheN = $bdd->query("select * from ruche where ruche_value='$ruche'");
						$result = $bdd->query("select * from ruche_data where data_id='$ruche' and date_data between '$dateStart' and '$dateEnd' and time_data between '$hoursStart' and '$hoursEnd' order by date_data,time_data asc");
						if ($dateStart==$dateEnd){
								foreach ($result as $data){
										$temps[]=$data['temperature_data'];
										$humi[]=$data['humi_data'];
										$poids[]=$data['poids_data'];
										$dateRuche[]=substr($data['time_data'],0,5);
								}
								$_SESSION['download'] = "<a href='../_function/csv.php' class='view_rucheBtn'>download data</a>";
						}
						if ($dateStart != $dateEnd){
								foreach ($result as $data){
										$dateUk = $data['date_data'];
										$years=substr($dateUk,0,4);
										$month=substr($dateUk,5,2);
										$day=substr($dateUk,8,2);
										$dateFr = $day.'/'.$month.'/'.$years;
										$temps[]=$data['temperature_data'];
										$humi[]=$data['humi_data'];
										$poids[]=$data['poids_data'];
										$dateRuche[]=$dateFr;
								}
								$_SESSION['download'] = "<a href='../_function/csv.php' class='view_rucheBtn'>download data</a>";
						}
						foreach ($rucheN as $item){
								$ruche_name = 'ruche: '.$item['ruche_name'];
						}
						$_SESSION['ruche_name']=$ruche_name;
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
