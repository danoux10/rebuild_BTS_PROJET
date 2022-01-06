 <?php
   include_once '../controller/header.php';
   require_once '../_function/rucheadd.php';
   require_once '../_function/view.php';
   require_once '../_function/select.php';
   
 ?>
    <title>add ruche</title>
</head>
 <style>
     table{
         border: white;
     }
 </style>
<body style="background: black;color: white">
<?php include_once '../controller/navbar.php';?>
<form action="" method="post">
    ruche value <input type="text" name="lora_id" required><br>
	ruche name <input type="text" name="ruche_name" required><br>
	<input type="submit" name="valid_ruche"><br>
</form>
<br>
<form action="" method="post">
    emplacement : <input type="text" name="location">
    <br>
    nom: <input type="text" name="name_rucher">
    <br>
    <input type="submit" name="valid_rucher">
</form>
<br>
<form action="" method="post" >
  <div style="display: flex; align-items: center">
	  <?php
		  echo selectTableRucher();
	  ?>
	  <?php
		  echo selectTableRuche();
	  ?>
  </div>
    <input type="submit" name="ajouter_ruche" style="width: 100px;height: 40px">
</form>
<?php
	@$valid_ruche = $_POST['valid_ruche'];
	@$valid_rucher = $_POST['valid_rucher'];
    @$rucheIntoRucher = $_POST['ajouter_ruche'];
    if (isset($rucheIntoRucher)){
       $rucheSelect = $_POST['checkRuche'];
       var_dump($rucheSelect);echo '<br>';
        $rucherSelect = $_POST['rucher'];
        foreach ($rucheSelect as $data){
            $selectTest = $bdd->query("select * from ruche where ruche_id='$data'");
            foreach ($selectTest as $value){
	            $id=$value['ruche_id'];
                $updateRuche = $bdd->prepare("update ruche set rucher_value=? where ruche_id='$id'");
                $updateRuche->execute([$rucherSelect]);
            }
        }
        echo 'update fini';
    }
	
//	@$rucherSelect = $_POST['rucher'];
//	var_dump($rucherSelect);
//	echo '<br>';
//	var_dump($rucheSelect);
//	echo '<br>';
//	implode('',$_POST['rucher']);
//	echo '<br>';

//	if(isset($valid_rucher)){
//      echo addRucher();
//    }
//    if(isset($valid_ruche)){
//      echo addRuche();
//    }
//	echo viewRuche();
 ?>
<?php
    include_once '../controller/footer.php';
?>