<style>
	*{
			background: black;
			color: white;
	}
</style>
<?php
	include_once '../_config/bdd.php';
	$rucheData = $bdd->query('select * from ruche');
	
	foreach ($rucheData as $data){
		$id = $data['ruche_id'];
		$name = $data['ruche_name'];
		$value = $data['ruche_value'];
		echo $id.'/-/'.$value.'/-/'.$name.'<br>';
	}