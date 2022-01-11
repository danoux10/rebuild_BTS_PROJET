<?php
	$userData = $bdd->query('select * from users inner join status on users.status_reference=status.status_id ');
	$table_user = "<tbody>";
		foreach ($userData as $data){
			$lastname = $data['lastname'] ;
			$firstname = $data['firstname'];
			$email= $data['mail'];
			$status= $data['status_name'];
			$id= $data['user_id'];
			//table generateur
			$table_user .="<tr>";
			$table_user .="<td>$lastname</td>";
			$table_user .="<td>$firstname</td>";
			$table_user .="<td>$email</td>";
			$table_user .="<td>$status</td>";
			$table_user .="<td class='selectCh'><input type='radio' name='selected_user' value='$id'></td>";
		}
		$table_user .= "</tbody>";
