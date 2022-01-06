<?php
	include_once '../_config/bdd.php';
	$statusData = $bdd->query('select * from status');
	$userData = $bdd->query('select * from users inner join status on users.status_reference=status.status_id ');
	$rucheData = $bdd->query('select * from ruche');
	$rucherData = $bdd->query('select * from rucher_data');
	
	function viewStatus(){
		global $statusData;
		$table_status="<table>";
		$table_status .="<tbody>";
		foreach ($statusData as $data){
			$name = $data['status_name'];
            //table generateur
			$table_status .="<tr>";
			$table_status .="<td> $name </td>";
			$table_status .="</tr>";
		}
		$table_status .="</tbody>";
		$table_status .="</table>";
		return $table_status;
	}
	
function viewUsers(){
		global $userData;
		$table_user= "<table>";
		$table_user .= "<tbody>";
		foreach ($userData as  $data){
			$name = $data['firstname'].'  '.$data['lastname'];
			$mail = $data['mail'];
			$userStatus = $data['status_name'];
			$userId = $data['user_id'];
            //table generateur
			$table_user .="<tr>";
			$table_user .="<td> $name </td>";
			$table_user .="<td> $mail </td>";
			$table_user .="<td> $userStatus </td>";
			$table_user .="<td> <input type='radio' name='select_user' value='$userId'>$mail </td>";
			$table_user .="</tr>";
		}
		$table_user .="</tbody>";
		$table_user .="</table>";
		return$table_user;
}

function viewRuche(){
	global $rucheData;
    $table_ruche="<table>";
    $table_ruche.="<tbody>";
    foreach ($rucheData as $data){
		$name = $data['ruche_name'];
		$value = $data['ruche_value'];
		$table_ruche .="<tr>";
		$table_ruche .="<td> $name </td>";
		$table_ruche .="<td> $value </td>";
		$table_ruche .="</tr>";
	}
	$table_ruche.="</tbody>";
	$table_ruche.="<table>";
    return $table_ruche;
}

function viewRucher(){
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
        $table_rucher .="</tr>";
    }
    $table_rucher .= "</tbody>";
	$table_rucher .= "</table>";
	return $table_rucher;
}
