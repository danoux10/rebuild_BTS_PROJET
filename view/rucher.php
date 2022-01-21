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
<?php include_once '../controller/navbar.php'; ?>
<div id="rucher_content">
    <div class="left">
        <form action="" method="post" class="view_ruche" hidden>
            <!--btn select view-->
            <div class="btn_ruche">
                <div class="dataSelect dateSelect">
                    <span>
                        <label for="firstDate">Date Début :</label>
                        <input type="date" name="fistDate" id="firstDate">
                    </span>
                    <span>
                        <label for="lastDate">Date Fin :</label>
                        <input type="date" name="lastDate" id="firstDate">
                    </span>
                </div>
                <div class="dataSelect">
                    <span>
                        <label for="hoursStart">Heure Début :</label>
                        <input type="time" name="hoursStart" id="hoursStart">
                    </span>
                    <span>
                        <label for="hoursEnd">Heure Fin :</label>
                        <input type="time" name="hoursEnd" id="hoursEnd">
                    </span>
                </div>
                <div class="dataSelect choose">
                    <button type="submit" name="view_ruche" class="view_rucheBtn">View Ruche</button>
                </div>
            </div>

            <!-- view and select-->
            <div class="view&select">
                <div class="graph">
                    <canvas id="graph_content"></canvas>
                </div>
                <div class="table&select">
                    <table class="select_single">
                        <thead>
                        <th>Nom</th>
                        <th>Rucher</th>
                        <th>Select</th>
                        </thead>
						<?php echo selectTableSingle(); ?>
                    </table>
                </div>
            </div>
        </form>
    </div>
    <div class="right">
        <form action="" method="post" class="form_ruche ">
            <div class="btn_content">
                <div class="btn_ruche">
                    <span id="ajout_ruche" class="ajouter button_custum">Ajouter ruche</span>
                    <buttob type="sumbit" name="upadate_ruche" class="modifier button_custum">Update ruche</buttob>
                    <span id="ajout_rucher" class="ajouter button_custum">Ajouter rucher</span>
                    <buttob type="sumbit" name="update_rucher" class="modifier button_custum">Updata rucher</buttob>
                </div>
                <div class="other_btn">
					<?php echo selectLocation(); ?>
                    <button class="button_custum" id="admin_rucher">Gestion rucher</button>
                </div>
            </div>
            <div class="table_content">
                <table class="select_ruche">
                    <thead>
                    <th>Nom</th>
                    <th>Rucher</th>
                    <th>Select</th>
                    </thead>
					<?php echo selectTableRuche(); ?>
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
<?php
    include_once '../controller/form_rucher.php';
    include_once '../model/rucher_admin.php';
?>
<script src="../script/show_graph.js"></script>
<script src="../script/ruche_show.js"></script>
</body>
</html>