<!doctype html>
<html lang=fr>
<?php
	include_once '../controller/header.php';
	require_once '../_function/view.php';
	?>
<link rel="stylesheet" href="../style/coustom.css">
<title>Gestion Utilisateur</title>
</head>
<body>
<?php include_once '../controller/navbar.php';?>
<form action="" method="post" class="view_user">
    <table class="scroll user_table">
        <thead>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Select</th>
        </tr>
        </thead>
      <?php echo viewUsers(); ?>
    </table>
</form>
<form action="" method="post" class="user_form">
    <div class="user_btn">
        <button id="view_add">Ajouter Utilisateur</button>
        <button id="view_update">Modifier Utilisateur</button>
        <button id="view_delete">Suprimer Utilisateur</button>
    </div>
    <?php include_once 'view/supprim.php';?>
    <div class="other_btn">
        <button id="view_status">Ajouter Status</button>
        <table class="sroll status_view">
            <thead>
                <tr>Status Name</tr>
            </thead>
            <?php echo viewStatus(); ?>
        </table>
    </div>
</form>
</body>
</html>