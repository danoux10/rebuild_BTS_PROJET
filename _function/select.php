<?php
	include_once '../_config/bdd.php';
	$statusData = $bdd->query('select * from status');
	$rucheData = $bdd->query('select * from ruche');
	$rucherData = $bdd->query('select * from rucher_data');
	$locationData = $bdd->query('select distinct(rucher_location) from rucher_data');
	//select status
	function selectStatus(){
		global $statusData;
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
	
	function selectRuche(){
		global $rucheData;
		$select_ruche = "<select name='ruche_value' class='text-black'>";
		$select_ruche .="<option value='0'>ruche</option>";
		foreach ($rucheData as $data){
			$name = $data['ruche_name'];
			$id = $data['ruche_id'];
			$select_ruche .="<option value='$id'>ruche $name</option>";
		}
		$select_ruche .="</select>";
		return $select_ruche;
	}

	function selectRucher(){
		global $rucherData;
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
		global $rucherData;
		$table_rucher = "<table>";
		$table_rucher .= "<tbody>";
		foreach ($rucherData as $data){
			$location = $data['rucher_location'];
			$name = $data['rucher_name'];
			$id = $data['rucher_id'];
			// table generateur
			$table_rucher .="<tr>";
			$table_rucher .="<td>$name</td>";
			$table_rucher .="<td>$location</td>";
			$table_rucher .="<td><input type='radio' name='rucher' value='$id'></td>";
			$table_rucher .="</tr>";
		}
		$table_rucher .= "</tbody>";
		$table_rucher .= "</table>";
		return $table_rucher;
	}
	
	function selectTableRuche(){
		global $rucheData;
		$table_ruche="<table>";
		$table_ruche.="<tbody>";
		foreach ($rucheData as $data){
			$name = $data['ruche_name'];
			$id = $data['ruche_id'];
			$rucher = $data['rucher_value'];
			$value = $data['ruche_value'];
			$table_ruche .="<tr>";
			$table_ruche .="<td> $name </td>";
			$table_ruche .="<td> $value </td>";
			$table_ruche .="<td> $rucher </td>";
			$table_ruche .="<td> <input type='checkbox' name='checkRuche' value='$id'> </td>";
			$table_ruche .="</tr>";
		}
		$table_ruche.="</tbody>";
		$table_ruche.="<table>";
		return $table_ruche;
	}
