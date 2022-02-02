<?php
		@$add_user = $_POST['add_user'];
		@$update_user = $_POST['confirm_update_U'];
		@$cancelUpdate_user = $_POST['cancel_update'];
  @$confirm_delete = $_POST['delete_confirm'];
		@$delete_btn = $_POST['delete_btn'];
  @$add_status = $_POST['add_status'];
		@$select_user = $_POST['update_user'];
		@$cancel_delete= $_POST['delete_cancel'];
//		$errors = array();
    if (isset($add_user)){
        // variable dzclartion; bn,lm;
		    $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $verif_pass = htmlspecialchars($_POST['verif_password']);
        $status = htmlspecialchars($_POST['status']);
        //verif_pass == password
        if ($password == $verif_pass){
	        if($status == 0){
		        $errors['status']='Choisir un status';
	        }else{
						//cryot password
		        $cryptPass = password_hash($password, PASSWORD_BCRYPT);
										$userAdd = $bdd ->prepare('INSERT INTO users SET firstname= ?,lastname= ?,mail= ?,password= ?,status_reference= ?');
		        $userAdd ->execute([$firstname,$lastname,$email,$cryptPass,$status]);
            $email='';
            unset($password);
            $firstname='';
            $lastname='';
            }
        }else{
            $_SESSION['errors']['password'] = 'Mot de passe non identique';
        }
				@$_SESSION['password']= $password;
		    $_SESSION['firstname'] = $firstname;
				$_SESSION['lastname'] = $lastname;
				$_SESSION['email'] = $email;
    }
		
		//update user
		if(isset($select_user)){
			@$userId = $_POST['selected_user'];
			if ($userId == 0){
					$_SESSION['errors']['select_delete']='selectioner un utilisateur';
			}else {
				$_SESSION['userSelected'] = $userId;
			}
		}
		$_SESSION['firstname'] = "";
		$_SESSION['lastname'] = "";
		$_SESSION['email'] = "";
		@$userSelected = intval($_SESSION['userSelected']);
		@$selected_user = $bdd->query("select * from users where user_id='$userSelected'");
		foreach ($selected_user as $data){
			$_SESSION['firstname'] = $data['firstname'];
			$_SESSION['lastname'] = $data['lastname'];
			$_SESSION['email'] = $data['mail'];
		}
		
		if(isset($update_user)){
			$firstname = htmlspecialchars($_POST['firstname']);
			$lastname = htmlspecialchars($_POST['lastname']);
			$email = htmlspecialchars($_POST['email']);
			$status = intval($_POST['status']);
			if($status == 0){
				$errors['status']='Choisir un status';
			}else{
				if (htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['verif_password'])){
					$password = htmlspecialchars($_POST['password']);
					$cryptPass = password_hash($password, PASSWORD_BCRYPT);
					$update = $bdd->query("update users set firstname='$firstname', lastname='$lastname', mail='$email', password='$cryptPass', status_reference='$status' where user_id='$userSelected'");
					$message['update_user']='utilisateur mis a jours';
					unset($_SESSION['userSelected']);
				}
			}
		}
		
		if(isset($cancelUpdate_user)){
			unset($_SESSION['userSelected']);
		}
		
		//supprim user
		@$select = $_POST['selected_user'];
		if(isset($delete_btn)){
				if ($select == 0){
						$_SESSION['errors']['select_delete']='selectionner un utilisateur';
				}else{
						$_SESSION['show']=1;
						$_SESSION['selected']=$select;
						$selecte = $bdd->query("select * from users where user_id='$select'");
						foreach ($selecte as $data){
								$firstname = $data['firstname'];
								$lastname = $data['lastname'];
								$_SESSION['user']= $firstname.'  '.$lastname.'  ';
						}
				}
		}
		if(isset($confirm_delete)){
				echo "coucou";
				$_SESSION['show']=0;
				@$select = $_SESSION['selected'];
				$delete = $bdd->query("delete from users where user_id='$select'");
				unset($_SESSION['user']);
				unset($_SESSION['selected']);
		}
		if (isset($cancel_delete)){
				$_SESSION['show']=0;
				unset($_SESSION['user']);
				unset($_SESSION['selected']);
		}
		//ANCHOR status
		if(isset($add_status)){
			$name = htmlspecialchars($_POST['status_name']);
			if(empty($name)){
					$_SESSION['errors']['statusAdd']='veuillez remplir le champ';
			}else{
				$insert=$bdd->prepare("insert into status set status_name=?");
				$insert->execute([$name]);
			}
		}
?>
