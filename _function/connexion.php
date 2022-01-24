<?php
	@$connexion = $_POST['connexion'];
	@$user = $_POST['user_btn'];
	@$admin = $_POST['admin_btn'];
	
	//ANCHOR connexion
	if (isset($connexion)){
		$email = htmlspecialchars($_POST['email']);
		$_SESSION['email']= $email;
		$password = htmlspecialchars($_POST['password']);
		$querryData = $bdd->query("select * from users where mail='$email'");
		foreach ($querryData as $data) {
			$_SESSION['status'] = $data['status_reference'];
			$_SESSION['username'] = $data['lastname'] . '  ' . $data['firstname'];
			$pass = $data['password'];
			//verif password
			if (password_verify($password,$pass)){
			header('location:rucher.php');
			}else{
				echo "<script>alert('Mot de passe faux')</script>";
			}
		}
	}
	
	//ANCHOR user connexion
	if (isset($user)){
		$email = 'user@gmail.com';
		$_SESSION['email']= $email;
		$password = 'user';
		$querryData = $bdd->query("select * from users where mail='$email'");
		foreach ($querryData as $data) {
			$_SESSION['status'] = $data['status_reference'];
			$_SESSION['username'] = $data['lastname'] . '  ' . $data['firstname'];
			$pass = $data['password'];
			//verif password
			if (password_verify($password,$pass)){
			header('location:rucher.php');
			}else{
				echo "<script>alert('Mot de passe faux')</script>";
			}
		}
	}
	
	//ANCHOR admin connexion
	if (isset($admin)){
		$email = 'admin@gmail.com';
		$_SESSION['email']= $email;
		$password = 'admin';
		$querryData = $bdd->query("select * from users where mail='$email'");
		foreach ($querryData as $data) {
			$_SESSION['status'] = $data['status_reference'];
			$_SESSION['username'] = $data['lastname'] . '  ' . $data['firstname'];
			$pass = $data['password'];
			//verif password
			if (password_verify($password,$pass)){
			header('location:rucher.php');
			}else{
				echo "<script>alert('Mot de passe faux')</script>";
			}
		}
	}
?>