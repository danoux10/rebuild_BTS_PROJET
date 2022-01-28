<!doctype html>
<html lang=fr>
<?php
	include_once '../controller/header.php';
	require_once '../_function/view.php';
	require_once '../_function/select.php';
    if($_SESSION['status']!=1){
        header('location:home.php');
    }
?>
<link rel="stylesheet" href="../alpha/coustom.css">
<title>Gestion Utilisateur</title>
</head>
<?php
		include_once '../controller/navbar.php';?>
<div class="admin top">
    <form action="user.php" method="post" class="view_user">
       <div class="scroll select_user">
           <span>
               <p>Prenom</p>
               <p>Nom</p>
               <p>Email</p>
               <p>Status</p>
               <p>Sct</p>
           </span>
            <?php echo selectTableUser(); ?>
        </div>
        <button class="button_custum" name="update_user" id="view_update">Modifier Utilisateur</button>
        <div id="delete_alert" class="">
            <div class="delete_content">
                <p>Etes vous sur de vouloir supprimer l'Utilisateur</p>
                <div class="tor_button">
                    <button type="submit" name="delete_confirm" id="confirm_delete" title="action irréversible">Oui</button>
                    <button type="submit" name="delete_cancel" id="cancel_delete">non</button>
                </div>
            </div>
        </div>
    </form>
    <form action="" method="post" class="user_form">
        <div class="user_btn">
            <span class="button_custum" id="view_addUser">Ajouter Utilisateur</span>
            <span class="button_custum"  id="view_delete">Suprimer Utilisateur</span>
        </div>
        <div class="other_btn">
            <table class="scroll status_view">
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
        <form action="user.php" method="post" id="form_update" class="form_content">
            <div class="head_form">
                <img src="../img/bee-evil.svg" alt="" class="img_update">
                <h2>Update</h2>
            </div>
            <div class="big">
                <div class="content">
                    <div class="user_info">
                        <label for="nom_update">Nom</label>
                        <input type="text" name="lastname" value="<?php echo @$_SESSION['firstname'] ?>" id="nom_update">
                    </div>
                    <div class="user_info">
                        <label for="prenom_update">Prenom</label>
                        <input type="text" name="firstname" id="prenom_update" value="<?php echo @$_SESSION['lastname']?>">
                    </div>
                    <div class="user_info email">
                        <label for="email_update">Email</label>
                        <input type="mail" name="email" id="email_update" value="<?php echo @$_SESSION['email']; ?>">
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
                    <button type="submit" name="confirm_update_U" class="submit">Update</button>
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