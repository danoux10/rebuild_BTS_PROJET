<style>
    canvas{
        background: #000;
    }
</style>
<?php
	$rucheBase = new PDO('mysql:host=localhost;dbname=rucher;charset=utf8', 'root', '');
	$selectData = $rucheBase->query("select * from ruche_data where data_id='3' order by date_data ASC");
	
	//	$temp = array();
	//	$humi = array();
	//	$poids = array();
	//	$dateRuche = array();
	foreach ($selectData as $data){
		$temperature = $data['temperature_data'];
		$humiditer = $data['humi_data'];
		$poid = $data['poids_data'];
		$jours = date("d-m-Y",strtotime($data['date_data']));
//		echo $temperature.'/---/'.$humiditer.'/---/'.$poid.'/---/'.$jours.'<br>';
		$temps[]=$temperature;
		$humi[]=$humiditer;
		$poids[]=$poid;
		$dateRuche[]=$jours;
	}
?>
<link rel="stylesheet" href="style.css">
<canvas id="myChart"></canvas>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php print_r(json_encode($dateRuche)) ?>,
            datasets: [{
                label:'temperature',
                data: <?php print_r(json_encode($temps)) ?>,
                borderColor: '#880000',
                borderWidth: 2,
            },{
                label: 'humiditer',
                data: <?php print_r(json_encode($humi)) ?>,
                borderColor: '#000088',
                borderWidth: 2,
            },{
                label: 'poids',
                data: <?php print_r(json_encode($poids)) ?>,
                borderColor: '#008800',
                borderWidth: 2,
            }]
        },
        options: {
            scales: {
                x: {
                    ticks: {
                        color: '#ffffff'
                    },
                },
                y: {
                    ticks:{
                        color : '#ffffff'
                    },
                },

            },
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: 'white'
                    }
                }
            }
        }
    })
</script>


