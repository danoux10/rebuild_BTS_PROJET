<!doctype html>
<html lang=fr>
<?php
	include_once '../controller/header.php';
	require_once '../_function/view.php';
	require_once '../_function/select.php';
?>
<link rel="stylesheet" href="../style/coustom.css">
<title>Gestion Ruche</title>
</head>
<body>
<?php include_once '../controller/navbar.php';?>
<div class="left">
    <div class="graph">
        <canvas id="graph_content"></canvas>
    </div>
    <form action="" method="post" class="gestion_rucher">
        <table class="select_rucher">
            <thead>
                <th>Nom rucher</th>
                <th>Localisation</th>
                <th>Select</th>
            </thead>
            <?php echo selectTableRucher(); ?>
        </table>
        <table class="select_ruche">
            <thead>
                <th>Nom</th>
                <th>Valeur</th>
                <th>Rucher</th>
                <th>Select</th>
            </thead>
            <?php echo selectTableRuche();?>
        </table>
    </form>
</div>
<div class="right">
    <form action="" method="post" class="form_ruche">
        <div class="btn-ruche">
            <buttob type="sumbit" name="add_ruche" class="ajouter">Ajouter ruche</buttob>
            <buttob type="sumbit" name="upadate_ruche" class="modifier">Update ruche</buttob>
            <buttob type="sumbit" name="add_rucher" class="ajouter">Ajouter rucher</buttob>
            <buttob type="sumbit" name="update_rucher" class="modifier">Updata rucher</buttob>
        </div>
        <div >
            <?php echo selectLocation();?>
            <button class="" id="adlin_rucher">Gestion rucher</button>
        </div>
    </form>
    <form class="content_view">
        <table class="select_single">
            <thead>
            <th>Nom</th>
            <th>Valeur</th>
            <th>Rucher</th>
            <th>Select</th>
            </thead>
			    <?php echo selectTableSingle();?>
        </table>
    </form>
    <table class="view_rucher">
        <thead>
        <th>Nom rucher</th>
        <th>Localisation</th>
        <th>Localisation</th>
        </thead>
        <?php echo selectTableRucher(); ?>
    </table>
</div>
</body>
</html>