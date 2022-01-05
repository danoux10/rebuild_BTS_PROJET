 <?php
   include_once '../controller/header.php';
   require_once '../_function/rucheadd.php';
   require_once '../_function/view.php';
   
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
<form action="" method="post">
    
</form>
<?php
	echo addRuche();
	echo "<br>";
	echo viewRuche();
 ?>
<?php
    include_once '../controller/footer.php';
?>