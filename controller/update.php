<div id="update_content" class="form_style">
	<form action="" method="post" id="form_update" class="form_content">
		<div class="">
			<img src="../img/bee-evil.svg" alt="" class="img_update">
			<h2>Update</h2>
		</div>
		
		<div class="content">
			<div class="user_info">
				<label for="nom_update">nom</label>
				<input type="text" name="lastname" id="nom_update">
			</div>
			<div class="user_info">
				<label for="prenom_update">prenom</label>
				<input type="text" name="firstname" id="prenom_update">
			</div>
		</div>
		<div class="user_info email">
			<label for="email_update">Email</label>
			<input type="mail" name="email" id="email_update">
			<?php echo selectStatus(); ?>
		</div>
		<div class="content">
			<div class="user_info">
				<label for="password_update">Password</label>
				<input type="password" name="password" id="password_update">
			</div>
			<div class="user_info">
				<label for="verif_password_update">Vérif Password</label>
				<input type="password" name="verif_password" id="verif_password_update">
			</div>
		</div>
		<button type="submit" name="add_user">Update</button>
	</form>
</div>