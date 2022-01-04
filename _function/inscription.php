<body style="background: black;color: white">

<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=rucher;charset=utf8', 'root', '');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	session_start();
    @$add_user = $_POST['add_user'];
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
		        $_SESSION['errorMe']='Choisir un status';
	        }else{
                $_SESSION['errorMe']='';
                //cryot password
		        $cryptPass = password_hash($password, PASSWORD_BCRYPT);
    	        $userAdd = $bdd ->prepare('INSERT INTO users SET firstname= ?,lastname= ?,mail= ?,password= ?,status_reference= ?');
		        $userAdd ->execute([$firstname,$lastname,$email,$cryptPass,$status]);
            }
        }else{
            $_SESSION['errorMe'] = 'Mot de passe non identique';
        }
    }
?>
<form action="" method="post">
    fistname:<input type="text" name="firstname" value="<?php echo @$firstname; ?>" required><br>
    lastname:<input type="text" name="lastname" value="<?php echo @$lastname; ?>" required><br>
    email:<input type="email" name="email" value="<?php echo @$email; ?>" required><br>
    password:<input type="password" name="password" required><br>
    verif_password:<input type="password" name="verif_password" required><br>
    <select name="status" id="">
        <option value="0">status</option>
        <option value="1">admin</option>
    </select>
    <input type="submit" value="valid" name="add_user"><br>
</form>
<?php
    echo $_SESSION['errorMe'];
?>
</body>
