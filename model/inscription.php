<?php
		include_once '../_function/form.php';
    @$add_user = $_POST['add_user'];
		@$update_user = $_POST['update_user'];
    @$delete_user = $_POST['delete_user'];
    @$add_status = $_POST['add_status'];
		$errors = array();
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
            $errors['password'] = 'Mot de passe non identique';
        }
				@$_SESSION['password']= $password;
		    $_SESSION['firstname'] = $firstname;
				$_SESSION['lastname'] = $lastname;
				$_SESSION['email'] = $email;
    }
	
		if(isset($delete_user)){
			include '../controller/supprim.php';
		}
		
		if(isset($update_user_user)){
		}
		
		//ANCHOR status
		if(isset($add_status)){
			$name = htmlspecialchars($_POST['status_name']);
			if(empty($name)){
				$errors['statusAdd']='veuillez remplir le champ';
			}else{
				$insert=$bdd->prepare("insert into status set status_name=?");
				$insert->execute([$name]);
			}
		}
?>
