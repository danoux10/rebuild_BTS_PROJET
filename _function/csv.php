<!doctype html>
<html lang="fr">
<style>
	*{
        background: #000;
        color: white;
	}
</style>
<form action="" method="post">
    nombre'nom' de ruche : de <input type="text" name="minRuche" autocomplete="off"><br>
    value carde : de <input type="text" name="minCard" autocomplete="off"><br>
    max : <input type="text" name="max" autocomplete="off">
    <br>
    <input type="submit" name="ruche_auto">
</form>

<form action="" method="post">
    temperature min <input type="text" name="minTemp" value="30" autocomplete="off">  max <input type="text" value="35" name="maxTemp" autocomplete="off"><br>
    humiditer min <input type="text" name="minHumi" autocomplete="off" value="50">  max <input type="text" value="70" name="maxHumi" autocomplete="off"><br>
    poids min <input type="text" name="minKg" autocomplete="off" value="30">  max <input value="50" type="text" name="maxKg" autocomplete="off"><br>
    cards value min <input type="text" name="Cardmin" autocomplete="off">  max <input type="text" name="Cardmax" autocomplete="off"><br>
    date min <input type="date" name="minDate" autocomplete="off" value="2021-01-01">  max <input type="date" name="maxDate" autocomplete="off" value="2021-12-31"><br>
    hours min <input type="time" name="minHour" autocomplete="off" value="00:00">  max <input type="time" name="maxHour" autocomplete="off" value="23:59"><br>
    max : <input type="text" name="max" autocomplete="off"><br>
    <input type="submit" name="add_data">
</form>
<?php
//	for ($i=0;$i<10; $i++){
//		$float = rand(0,9)/10;
//		$temperature = rand(30,35);
//		$temp= $temperature+$float;
//		echo $temperature.'+'.$float.'='.$temp.'<br>';
//	}
//
//	echo (rand(0,1000));
	
	include_once '../_config/bdd.php';
	
	if (isset($_POST['ruche_auto'])){
		$Name = $_POST['minRuche'];
		$Card = $_POST['minCard'];
		$max = $_POST['max'];
		$rucher_id = 0;
		for ($min = 0; $min<$max; $min++){
            $Name++;
            $Card--;
            $val = 0;
			$insert_ruche=$bdd->prepare('insert into ruche set ruche_value=?,ruche_name=?,rucher_affect=?');
			$insert_ruche->execute([$Card,$Name,$val]);
		}
        echo 'ruche ajouter<br>';
	}
    
    if(isset($_POST['add_data'])){
	    $minTemp= $_POST['minTemp'];
	    $maxTemp = $_POST['maxTemp'];
	    $minHumi = $_POST['minHumi'];
	    $maxHumi = $_POST['maxHumi'];
	    $maxKg = $_POST['maxKg'];
	    $minKg = $_POST['minKg'];
	    $maxDate = strtotime($_POST['maxDate']);
	    $minDate = strtotime($_POST['minDate']);
	    $maxhour = strtotime($_POST['maxHour']);
	    $minhour = strtotime($_POST['minHour']);
        $maxCard = $_POST['Cardmax'];
	    $minCard = $_POST['Cardmin'];
	    $max = $_POST['max'];
        for ($min=0;$min<$max;$min++){
            $virgule = rand(0,10)/10;
            $temp=rand($minTemp,$maxTemp)+$virgule;
            $humi=rand($minHumi,$maxHumi)+$virgule;
            $Kg=rand($minKg,$maxKg)+$virgule;
            $date=date('Y-m-d',rand($minDate,$maxDate));
            $heure=date('H:i',rand($minhour,$maxhour));
            $card = rand($minCard,$maxCard);
	        $insert_data=$bdd->prepare('insert into ruche_data set temperature_data=?,humi_data=?,poids_data=?,date_data=?,time_data=?,data_id=?');
	        $insert_data->execute([$temp,$humi,$Kg,$date,$heure,$card]);
        }
        echo 'donner ajouter<br>';
    }