<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=rucher;charset=utf8', 'root', 'password');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>