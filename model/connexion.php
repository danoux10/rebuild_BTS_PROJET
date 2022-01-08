<?php
	include_once '../controller/header.php';
?>
<title>Connexion</title>
</head>

<body class="bg-black text-white">
<?php include_once '../controller/navbar.php'; ?>
<form action="" method="post">
	email:<input type="mail" name="email" class="text-black" value="<?php echo @$_SESSION['email']; ?>" required><br>
	password: <input type="password" name="password" class="text-black" required><br>
	<input type="submit" value="connnexion" name="connexion"><br>
</form>
<?php include_once '../controller/footer.php';?>
</body>

<div id="connexion_content">
        <form action="" method="post" id="form_connexion">
            <div>
                <img src="../img/bee.svg" alt=""n class="img_connexion">
                <h2>Connexion</h2>
            </div>
            <div class="connexion_info">
                <label for="email_connexion">Email</label>
                <input type="text" name="">
            </div>
            <div class="connexion_info">
                <label for="password_connexion">Password</label>
                <input type="password" name="">
            </div>
            <button type="submit" name="">Connexion</button>
        </form>
    </div>