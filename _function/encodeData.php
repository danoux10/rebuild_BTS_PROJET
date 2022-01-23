<?php
  session_start();
  include '../_config/bdd.php';
  @$dateStart=$_SESSION['first'];
  @$dateEnd=$_SESSION['last'];
  @$hoursStart=$_SESSION['start'];
  @$hoursEnd=$_SESSION['end'];
  @$ruche = $_SESSION['ruche'];
  
  $rqData = $bdd->query("select * from ruche_data where data_id='$ruche' and date_data between '$dateStart' and '$dateEnd' and time_data between '$hoursStart' and '$hoursEnd'");
  $viewdata=array();
  foreach ($rqData as $data){
      $viewdata[] = $data;
  }

echo json_encode($viewdata);