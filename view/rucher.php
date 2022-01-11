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
<body id="rucher_admin">
<?php include_once '../controller/navbar.php';?>
<div id="rucher_content">
    <div class="left">
        <form action="" method="post" class="view_ruche">
            <!--btn select view-->
            <div class="btn_ruche">
                <button type="submit" name="view_ruche">View Ruche</button>
            </div>
            
            <!-- view and select-->
            <div class="view&select">
                <div class="graph">
                    <canvas id="graph_content"></canvas>
                    <table>
                        <thead>
                        <tr>
                            <th>titre 1</th>
                            <th>titre 2</th>
                            <th>titre 3</th>
                            <th>titre 4</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <table class="select_ruche">
                    <thead>
                    <th>Nom</th>
                    <th>Valeur</th>
                    <th>Rucher</th>
                    <th>Select</th>
                    </thead>
                  <?php echo selectTableRuche();?>
                </table>
            </div>
        </form>
    </div>
    <div class="right">
        <form action="" method="post" class="form_ruche">
            <div class="btn_content">
                <div class="btn_ruche">
                    <span  id="ajout_ruche" class="ajouter button_custum">Ajouter ruche</span>
                    <buttob type="sumbit" name="upadate_ruche" class="modifier button_custum">Update ruche</buttob>
                    <span id="ajout_rucher" class="ajouter button_custum">Ajouter rucher</span>
                    <buttob type="sumbit" name="update_rucher" class="modifier button_custum">Updata rucher</buttob>
                </div>
                <div class="other_btn">
			            <?php echo selectLocation();?>
                    <button class="button_custum" id="admin_rucher">Gestion rucher</button>
                </div>
            </div>
            <div class="table_content">
                <table class="select_single">
                    <thead>
                    <th>Nom</th>
                    <th>Valeur</th>
                    <th>Rucher</th>
                    <th>Select</th>
                    </thead>
			            <?php echo selectTableSingle();?>
                </table>
                <table class="view_rucher">
                    <thead>
                    <th>Nom rucher</th>
                    <th>Localisation</th>
                    <th>Localisation</th>
                    </thead>
			            <?php echo selectTableRucher(); ?>
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>