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
        <form action="" method="post" class="form_ruche">
            <div class="btn_content">
                <div class="btn_ruche">
                    <span id="ajout_ruche" class="ajouter button_custum">Ajouter ruche</span>
                    <span id="ajout_rucher" class="ajouter button_custum">Ajouter rucher</span>
                    <button type="sumbit" name="ruche_rucher" class="modifier button_custum">Mettre ruche dans rucher</button>
                </div>
                <div class="other_btn">
<!--                    TODO si tu as le temps -->
<!--					--><?php //echo selectLocation(); ?>
<!--                    <button class="button_custum" id="admin_rucher">Gestion rucher</button>-->
                </div>
            </div>
            <div class="table_content">
                <table class="select_ruche">
                    <caption>Ruche</caption>
                    <thead>
                    <th>Nom</th>
                    <th>Select</th>
                    </thead>
					<?php echo selectTableRuche(); ?>
                </table>
                <table class="view_rucher">
                    <caption>Rucher</caption>
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
<div id="ruche_form_content">
    <!--LINK form add ruche-->
    <form id="add_ruche" action="rucher.php" class="add_form" method="post">
        <fieldset class="form_part">
            <legend>
                <img alt="ruche_add_icon" src="../img/rucheAdd.svg">
                <h3>Ajouter Ruche</h3>
            </legend>
            <span class="form_content">
              <label for="rucheName_add">Nom Ruche</label>
              <input id="rucheName_add" name="ruche_name" autocomplete="off" type="text" required>
            </span>
            <span class="form_content">
              <label for="rucheValue_add">Valeur Ruche</label>
              <input id="rucheValue_add" name="ruche_value" autocomplete="off" type="text" required>
            </span>
            <span>
                <button class="add_btn" name="add_ruche" type="submit">Ajouter Ruche</button>
                <span id="cancel_ruche">Annuler</span>
            </span>
        </fieldset>
    </form>
    <!--LINK form add rucher-->
    <form id="add_rucher" class="add_form"  method="post">
        <fieldset class="form_part">
            <legend>
                <img alt="rucher_add_icon" src="../img/rucherAdd.svg">
                <h3>Ajouter Rucher</h3>
            </legend>
            <span class="form_content">
              <label for="rucherName_add">Nom Rucher</label>
              <input id="rucherName_add" name="rucher_name" autocomplete="off" type="text" required>
            </span>
            <span class="form_content">
              <label for="rucherLocation_add">Localisation Rucher</label>
              <input id="rucherLocation_add" name="location" autocomplete="off" type="text" required>
            </span>
            <span>
                <button class="add_btn" name="add_rucher" type="submit">Ajouter Rucher</button>
                <span id="cancel_rucher">Annuler</span>
            </span>
        </fieldset>
    </form>
</div>
<?php
    include_once '../model/rucher_admin.php';
?>
<script src="../script/show_graph.js"></script>
<script src="../script/ruche_show.js"></script>
</body>
</html>