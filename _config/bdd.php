<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=rucher;charset=utf8', 'root', 'password');
//  $bdd= new PDO('mysql:host=mysql-barbedany.alwaysdata.net;dbname=barbedany_ecf;charset=utf8', 'barbedany', 'Doudou10');
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>