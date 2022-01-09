<?php
	@$connexion = $_POST['connexion'];
	
	if (isset($connexion)){
		$email = htmlspecialchars($_POST['email']);
		$_SESSION['email']= $email;
		$password = htmlspecialchars($_POST['password']);
		echo $email.'-//-'.$password.'<br>';
		$querryData = $bdd->query("select * from users where mail='$email'");
		foreach ($querryData as $data) {
			$_SESSION['status'] = $data['status_reference'];
			$_SESSION['username'] = $data['lastname'] . '  ' . $data['firstname'];
			$pass = $data['password'];
			//verif password
			if (password_verify($password,$pass)){
//			header('location:home.php');
				echo 'connexion reussie';
			}else{
				echo'mot de passe faux';
			}
		}
	}
?>