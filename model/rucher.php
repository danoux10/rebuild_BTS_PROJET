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
<?php
    echo addRucher();
	echo addRuche();
	echo "<br>";
	echo viewRuche();
 ?>
<?php
    include_once '../controller/footer.php';
?>