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