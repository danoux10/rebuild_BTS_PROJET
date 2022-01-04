    <?php
        include_once '../controller/header.php';
        include_once '../view/user_admin.php';
    ?>

    <title>Admin User</title>
</head>
<body class="bg-black text-white">
<?php include_once '../controller/navbar.php';?>

<form action="" method="post">
    fistname:<input class="text-black" type="text" name="firstname" value="<?php echo @$firstname; ?>" required><br>
    lastname:<input class="text-black" type="text" name="lastname" value="<?php echo @$lastname; ?>" required><br>
    email:<input class="text-black" type="email" name="email" value="<?php echo @$email; ?>" required><br>
    password:<input class="text-black" type="password" name="password" required><br>
    verif_password:<input class="text-black" type="password" name="verif_password" required><br>
    <select name="status" id="" class="text-black">
        <option value="0">status</option>
        <option value="1">admin</option>
    </select>
    <input type="submit" value="valid" name="add_user" class="border-white cursor-pointer border"><br>
</form>
<?php    include_once '../controller/footer.php'; ?>
</body>
</html>