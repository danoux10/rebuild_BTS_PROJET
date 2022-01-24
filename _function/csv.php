"date";"heure";"poids:KG";"temperature:°C";"humidite:%"
<?php
		session_start();
		//variable selection
		$ruche=$_SESSION['ruche'];
		$rucheName=$_SESSION['ruche_name'];
		$dateStart=$_SESSION['first'];
		$dateEnd=$_SESSION['last'];
		$hoursStart=$_SESSION['start'];
		$hoursEnd=$_SESSION['end'];
		//variable name
		$extention='.csv';
		$name ='ruche:'.$rucheName.'_du_'.$dateStart.'_au_'.$dateEnd.'_de_'.$hoursStart.'_a_'.$hoursStart.''.$extention ;
		include '../_config/bdd.php';
		//encode file on csv
		header('Content-Type: text/csv;');
		//choose name of file
		header("Content-Disposition: attachement; filename=$name");
		
		//query for select data
		$result = $bdd->query("select * from ruche_data where data_id='$ruche' and date_data between '$dateStart' and '$dateEnd' and time_data between '$hoursStart' and '$hoursEnd' order by date_data,time_data asc");
		
		//print value
		foreach ($result as $data){
			$temperature = $data['temperature_data'];
			$humi = $data['humi_data'];
			$poids = $data['poids_data'];
			$jours = date("d-m-Y",strtotime($data['date_data']));
			$heure = date("H:i",strtotime($data['time_data']));
			echo $jours.';'.$heure.';'.$poids.';'.$temperature.';'.$humi."\n";
		}