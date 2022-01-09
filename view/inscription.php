<html>
<?php
  include_once '../controller/header.php';
  require_once '../_function/select.php';
?>
</head>
<body>
    <div id="inscription_content" class="form_style">
      <form action="" method="post" id="form_inscription" class="">
          <div class="">
              <img src="../img/beehive.svg" alt="" class="img_inscription">
              <h2>Inscription</h2>
          </div>
          
          <div class="content">
              <div class="user_info">
                  <label for="nom_inscription">nom</label>
                  <input type="text" name="lastname" id="nom_inscription">
              </div>
              <div class="user_info">
                  <label for="prenom_inscription">prenom</label>
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
          <button type="submit" name="add_user">inscription</button>
      </form>
        <?php include_once '../_function/inscription.php';?>
    </div>
</body>
</html>