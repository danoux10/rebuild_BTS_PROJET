<?php
	for ($i=0;$i<10; $i++){
		$float = rand(0,9)/10;
		$temperature = rand(30,35);
		$temp= $temperature+$float;
		echo $temperature.'+'.$float.'='.$temp.'<br>';
	}
	
	echo (rand(0,1000));