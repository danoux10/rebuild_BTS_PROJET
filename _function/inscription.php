<?php
    @$add_user = $_POST['add_user'];
		$errors = array();
    if (isset($add_user)){
        // variable dzclartion;
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
?>
