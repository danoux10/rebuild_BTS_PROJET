<?php
	include_once '../_config/bdd.php';
	$statusData = $bdd->query('select * from status');
	$userData = $bdd->query('select * from users inner join status on users.status_reference=status.status_id ');
	
	function viewStatus(){
		global $statusData;
		$table_status="<table>";
		$table_status .="<tbody>";
		foreach ($statusData as $data){
			$name = $data['status_name'];
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