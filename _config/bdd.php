<?php
	try {
		$bdd = new PDO('mysql:host=mysql-dany.alwaysdata.net;dbname=dany_rucher;charset=utf8', 'dany', 'Danoux10');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>