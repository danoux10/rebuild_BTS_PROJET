    <?php
        include_once '../controller/header.php';
        include_once '../_function/inscription.php';
    ?>
    <title>Admin User</title>
</head>
<body style="background: black;color: white">
<?php include_once '../controller/navbar.php';?>

<?php
  foreach ($errors as $message){
    echo $message;
  }
  echo $_SESSION['password'];
  ?>
<form action="" method="post">
    fistname:<input class="" type="text" name="firstname" value="<?php echo @$_SESSION['fistname']; ?>" ><br>
    lastname:<input class="" type="text" name="lastname" value="<?php echo @$_SESSION['lastname']; ?>" ><br>
    email:<input class="" type="email" name="email" value="<?php echo @$_SESSION['email']; ?>" ><br>
    password:<input class="" type="password" value="<?php echo $_SESSION['password']; ?>" name="password" ><br>
    verif_password:<input class="" type="password" value="<?php echo $_SESSION['password']; ?>" name="verif_password"><br>
    <?php
	    require_once '../_function/select.php';
	    echo selectStatus();
    ?>
    <input type="submit" value="valid" name="add_user" class="border-white cursor-pointer border"><br>
</form>
<form action="" method="post">
    <br>status add <br>
    status name: <input type="text" name="status_name" class="text-black">
    <input type="submit" name="submit_status" value="ajouter" class="border border-white" required>
</form>
<?php
	require_once '../_function/view.php';
	echo viewStatus();
	echo viewUsers();
?>
<?php    include_once '../controller/footer.php'; ?>
</body>
</html>