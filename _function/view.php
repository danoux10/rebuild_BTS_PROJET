<?php
	include_once '../_config/bdd.php';
	$statusData = $bdd->query('select * from status');
	$userData = $bdd->query('select * from users inner join status on users.status_reference=status.status_id ');
	$rucheData = $bdd->query('select * from ruche');
	
	function viewStatus(){
		global $statusData;
		$table_status ="<tbody>";
		foreach ($statusData as $data){
			$name = $data['status_name'];
            //table generateur
			$table_status .="<tr>";
			$table_status .="<td> $name </td>";
			$table_status .="</tr>";
		}
		$table_status .="</tbody>";
		return $table_status;
	}
	
function viewUsers(){
		global $userData;
		$table_user = "<tbody>";
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
			$table_user .="</tr>";
		}
		$table_user .="</tbody>";
		return$table_user;
}

function viewRuche(){
	global $rucheData;
    $table_ruche="<tbody>";
    foreach ($rucheData as $data){
		$name = $data['ruche_name'];
		$value = $data['ruche_value'];
		$table_ruche .="<tr>";
		$table_ruche .="<td> $name </td>";
		$table_ruche .="<td> $value </td>";
		$table_ruche .="</tr>";
	}
	$table_ruche.="</tbody>";
    return $table_ruche;
}

function viewRucher(){
    global $bdd;
		$rucherData = $bdd->query('select * from rucher_data');
    $table_rucher = "<tbody>";
    foreach ($rucherData as $data){
        $location = $data['rucher_location'];
        $name = $data['rucher_name'];
        // table generateur
        $table_rucher .="<tr>";
        $table_rucher .="<td>$name</td>";
        $table_rucher .="<td>$location</td>";
        $table_rucher .="</tr>";
    }
    $table_rucher .= "</tbody>";
	return $table_rucher;
}

