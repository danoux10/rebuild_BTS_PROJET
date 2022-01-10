<!doctype html>
<html lang=fr>
<?php
    include_once '../controller/header.php';
?>
<link rel="stylesheet" href="../style/coustom.css">
<title>Accueil</title>
</head>
<body>
<?php include_once '../controller/navbar.php';?>
<!--home page no connect-->
    <div id="connexion_content" class="form_style">
        <form action="" method="post" id="form_connexion">
            <h2>Connexion</h2>
            <div class="user_info">
                <label for="email_connexion">Email</label>
                <input type="mail" name="email">
            </div>
            <div class="user_info top">
                <label for="password_connexion">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    </div>
    <!-- image -->
    <div id="home_contener">
       <img src="../img/ruche.svg" alt="" id="image_home">
    </div>
<?php
  include_once '../controller/footer.php';
  include_once '../_function/connexion.php';
?>
</body>
</html>