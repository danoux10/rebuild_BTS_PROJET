<?php
	include_once '../_config/bdd.php';
	$rucheData = $bdd->query('select * from ruche');
	$userData = $bdd->query('select * from users inner join status on users.status_reference=status.status_id ');
	$locationData = $bdd->query('select distinct(rucher_location) from rucher_data');
	@$rucheSelect = $_SESSION['ruche'];
	//select status
	function selectStatus(){
		global $bdd;
		$statusData = $bdd->query('select * from status');
		$select_status = "<select name='status' class='text-black'>";
		$select_status .="<option value='0'>Status</option>";
		foreach ($statusData as $data){
			$StatusName = $data['status_name'];
			$statusId = $data['status_id'];
			$select_status .="<option value='$statusId'>$StatusName</option>";
		}
		$select_status .="</select>";
		return $select_status;
	}
	
	function selectTableUser(){
		global $userData;
		foreach ($userData as $data){
			$lastname = $data['lastname'] ;
			$firstname = $data['firstname'];
			$email= $data['mail'];
			$status= $data['status_name'];
			$id= $data['user_id'];
			//table generateur
			$table_user .="<span class='user'>";
			$table_user .="<p>$lastname</p>";
			$table_user .="<p>$firstname</p>";
			$table_user .="<p>$email</p>";
			$table_user .="<p>$status</p>";
			$table_user .="<input type='radio' name='selected_user' value='$id'>";
			$table_user .="</span>";
		}
		return$table_user;
	}
	
	function selectRuche(){
		global $bdd;
		$rucheData = $bdd->query('select * from ruche');
		$select_ruche = "<select name='ruche_value' class='text-black'>";
		$select_ruche .="<option value='0'>ruche</option>";
		foreach ($rucheData as $data){
			$name = $data['ruche_name'];
			$id = $data['ruche_value'];
			$select_ruche .="<option value='$id'>ruche $name</option>";
		}
		$select_ruche .="</select>";
		return $select_ruche;
	}

	function selectRucher(){
		global $bdd;
		$rucherData = $bdd->query('select * from rucher_data');
		$select_rucher = "<select name='rucher_value' class='text-black'>";
		$select_rucher .="<option value='0'>rucher</option>";
		foreach ($rucherData as $data){
			$name = $data['rucher_name'];
			$id = $data['rucher_id'];
			$location = $data['rucher_location'];
			$select_rucher .="<option value='$id'>$name à $location</option>";
		}
		$select_rucher .="</select>";
		return $select_rucher;
	}
    
    function selectLocation(){
        global $locationData;
	    $select_location = "<select name='location_value' class='text-black'>";
	    $select_location .="<option value='0'>location</option>";
	    foreach ($locationData as $data){
		    $location = $data['rucher_location'];
		    $select_location .="<option value='$location'>$location</option>";
	    }
	    $select_location .="</select>";
	    return $select_location;
    }

		//select table
	function selectTableRucher(){
		global $bdd;
		$rucherData = $bdd->query('select * from rucher_data');
		$table_rucher ="<div class='rucher_body scroll'>";
		foreach ($rucherData as $data){
			$location = $data['rucher_location'];
			$name = $data['rucher_name'];
			$id = $data['rucher_id'];
			// table generateur
			$table_rucher .="<span class='rucher'>";
			$table_rucher .="<p>$name</p>";
			$table_rucher .="<p>$location</p>";
			$table_rucher .="<input type='radio' name='rucher' value='$id'>";
			$table_rucher .="</span>";
		}
		$table_rucher .="</div>";
			return $table_rucher;
	}
	
	function selectTableRuche(){
		global $bdd;
		$rucheData = $bdd->query('select * from ruche where rucher_affect=0');
			$table_ruche ="<div class='ruche_content scroll'>";
		foreach ($rucheData as $data){
			$name = $data['ruche_name'];
			$id = $data['ruche_id'];
			$table_ruche .="<span class='ruche_multi'>";
			$table_ruche .="<p> $name </p>";
			$table_ruche .="<input type='checkbox' name='checkRuche[]' value='$id'>";
			$table_ruche .="</span>";
		}
			$table_ruche .="</div>";
			return $table_ruche;
	}

	function selectTableSingle(){
		global $bdd,$rucheSelect;
		$rucheData = $bdd->query('select * from ruche inner join rucher_data on rucher_data.rucher_id=ruche.rucher_value');
			$table_ruche = "<div class='scroll'>";
			foreach ($rucheData as $data){
			$name = $data['ruche_name'];
			$id = $data['ruche_id'];
			$rucher = $data['rucher_name'];
			if($rucheSelect == $id){
					$table_ruche .="<span for='$id'>";
					$table_ruche .="<p> $name </p>";
					$table_ruche .="<p> $rucher </p>";
					$table_ruche .="<input type='radio' name='radioRuche' checked value='$id'>";
					$table_ruche .="</span>";
			}else{
					$table_ruche .="<span class='single_ruche'>";
					$table_ruche .="<p> $name </p>";
					$table_ruche .="<p> $rucher </p>";
					$table_ruche .="<input type='radio' name='radioRuche' value='$id'>";
					$table_ruche .="</span>";
			}
		}
		$table_ruche .="</div>";
		return $table_ruche;
	}

