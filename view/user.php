<!doctype html>
<html lang=fr>
<?php
	include_once '../controller/header.php';
	require_once '../_function/view.php';
	require_once '../_function/select.php';
	?>
<link rel="stylesheet" href="../style/coustom.css">
<title>Gestion Utilisateur</title>
</head>
<?php include_once '../controller/navbar.php';?>
<div class="admin top">
    <form action="" method="post" class="view_user">
        <table class="scroll user_table">
            <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Status</th>
                <th>Sct</th>
            </tr>
            </thead>
          <?php echo selectTableUser(); ?>
        </table>
    </form>
    <form action="" method="post" class="user_form">
        <div class="user_btn">
            <span class="button_custum" id="view_addUser">Ajouter Utilisateur</span>
            <button class="button_custum" name="update_user" id="view_update">Modifier Utilisateur</button>
            <button class="button_custum" name="delete_user" id="view_delete">Suprimer Utilisateur</button>
        </div>
        <div class="other_btn">
            <table class="sroll status_view">
                <thead>
                    <tr>
                        <th>Status Name</th>
                    </tr>
                </thead>
                <?php echo viewStatus(); ?>
            </table>
            <span id="view_status" class="button_custum">Ajouter Status</span>
        </div>
    </form>
    <div id="update_content">
        <form action="" method="post" id="form_update" class="form_content">
            <div class="head_form">
                <img src="../img/bee-evil.svg" alt="" class="img_update">
                <h2>Update</h2>
            </div>
            <div class="big">
                <div class="content">
                    <div class="user_info">
                        <label for="nom_update">Nom</label>
                        <input type="text" name="lastname" id="nom_update">
                    </div>
                    <div class="user_info">
                        <label for="prenom_update">Prenom</label>
                        <input type="text" name="firstname" id="prenom_update">
                    </div>
                    
                    <div class="user_info email">
                        <label for="email_update">Email</label>
                        <input type="mail" name="email" id="email_update">
                        <?php echo selectStatus(); ?>
                    </div>
                    
                    <div class="user_info">
                        <label for="password_update">Password</label>
                        <input type="password" name="password" id="password_update">
                    </div>
                    <div class="user_info">
                        <label for="verif_password_update">Vérif Password</label>
                        <input type="password" name="verif_password" id="verif_password_update">
                    </div>
                </div>
                <div class="btn_update">
                    <button type="submit" name="update_user" class="submit">Update</button>
                    <button type="submit" name="cancel_update" class="cancel_btn">Annuler</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="inscription_content" class="form_style">
    <form action="user.php" method="post" id="form_inscription" class="form_content">
        <div class="">
            <img src="../img/beehive.svg" alt="" class="img_inscription">
            <h2>Inscription</h2>
        </div>
        <div class="content">
            <div class="user_info">
                <label for="nom_inscription">Nom</label>
                <input type="text" name="lastname" id="nom_inscription">
            </div>
            <div class="user_info">
                <label for="prenom_inscription">Prenom</label>
                <input type="text" name="firstname" id="prenom_inscription">
            </div>
        </div>
        <div class="user_info email">
            <label for="email_inscription">Email</label>
            <input type="mail" name="email" id="email_inscription">
			    <?php echo selectStatus(); ?>
        </div>
        <div class="content">
            <div class="user_info">
                    <label for="password_inscription">Password</label>
                    <input type="password" name="password" id="password_inscription">
                </div>
                <div class="user_info">
                    <label for="verif_password_inscription">Vérif Password</label>
                    <input type="password" name="verif_password" id="verif_password_inscription">
                </div>
            </div>
            <button type="submit" name="add_user">Inscription</button>
            <span id="cancel_addUser" class="cancel_btn">Annuler</span>
    </form>
    </div>
</div>
<div class="form_style" id="status_content">
    <form action="user.php" method="post">
        <div class="user_info">
            <label for="status_name">Nom status</label>
            <input type="text" name="status_name" id="status_name">
        </div>
        <button type="submit" name="add_status" class="submit">Ajouter status</button>
        <span id="status_cancel" class="cancel_btn">Annuler</span>
    </form>
</div>
<?php include_once '../model/inscription.php';?>
<script src="../script/show_inscription.js"></script>
<?php
    include_once '../controller/footer.php';
?>
</body>
</html>