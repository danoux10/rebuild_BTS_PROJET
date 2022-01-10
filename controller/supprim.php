<form action="user.php " method="post" id="delete_alert" class="">
	<div class="delete_content">
		<p>Etes vous sur de vouloir supprimer Utilisateur <?php //echo $username ?></p>
		<div class="tor_button">
			<button type="submit" name="delete_confirm" id="confirm_delete" title="action irréversible">Oui</button>
			<button type="submit" name="delete_cancel" id="cancel_delete">non</button>
		</div>
	</div>
</form>
