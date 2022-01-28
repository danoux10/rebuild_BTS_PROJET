<!doctype html>
<html lang=fr>
<?php
		include_once '../controller/header.php';
		require_once '../_function/view.php';
		require_once '../_function/select.php';
		if($_SESSION['status'] == 0){
            header('location:home.php');
		}
?>
<link rel="stylesheet" href="../alpha/coustom.css">
<title>Gestion Ruche</title>
</head>
<body id="rucher_admin">
<?php include_once '../controller/navbar.php'; ?>
<nav id="showAndHide">
    <span id="graph_view"><p>View graph</p></span>
    <span id="rucher_view"><p>View Admin Rucher</p></span>
</nav>
<a  title="generateur de data" href="../_function/auto%20data.php" class="easter_egg" target="_blank">generateur de donner et ruche</a>
<div id="rucher_content">
<!--    LINK left-->
    <div class="left" id="view_content">
        <form action="" method="post" class="view_ruche">
            <!--btn select view-->
            <div class="btn_ruche">
                <div class="dataSelect dateSelect">
                    <span>
                        <label for="firstDate">Date Début :</label>
                        <input type="date" name="firstDate" id="firstDate" value="<?php echo @$_SESSION['first']; ?>" required>
                    </span>
                    <span>
                        <label for="lastDate">Date Fin :</label>
                        <input type="date" name="lastDate" id="firstDate" value="<?php echo @$_SESSION['last']; ?>" required>
                    </span>
                </div>
                <div class="dataSelect">
                    <span>
                        <label for="hoursStart">Heure Début :</label>
                        <input type="time" name="hoursStart" id="hoursStart" value="<?php echo @$_SESSION['start']; ?>" required>
                    </span>
                    <span>
                        <label for="hoursEnd">Heure Fin :</label>
                        <input type="time" name="hoursEnd" id="hoursEnd" value="<?php echo @$_SESSION['end']; ?>" required>
                    </span>
                </div>
                <div class="dataSelect choose">
                    <button type="submit" name="view_ruche" class="view_rucheBtn">View Ruche</button>
                    <?php echo @$_SESSION['download'];?>
                </div>
            </div>

            <!-- view and select-->
            <div class="view&select">
                <div class="graph">
                    <canvas id="graph_content"></canvas>
                </div>
                <div class="table&select">
                    <span>
                        <p>Nom</p>
                        <p>Rucher</p>
                        <p>Select</p>
                    </span>
                    <?php echo selectTableSingle(); ?>
                </div>
            </div>
        </form>
    </div>
<!--LINK right-->
    <div class="right" id="<?php if($_SESSION['status']!=1){echo 'invisible';} else{ echo 'admin_view';}?>">
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
                <div class="select_ruche">
                    <span>
                        <p>Nom</p>
                        <p>Select</p>
                    </span>
					<?php echo selectTableRuche(); ?>
                </div>
                <div class="view_rucher">
                    <span>
                        <p>Nom rucher</p>
                        <p>Localisation</p>
                        <p>Localisation</p>
                    </span>
                    <?php echo selectTableRucher(); ?>
                </div>
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
    <form id="add_rucher" class="add_form" method="post">
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
    include_once '../_function/graph.php';
?>
<script src="../script/show_graph.js"></script>
<script src="../script/ruche_show.js"></script>
<?php
    include_once '../controller/footer.php';
?>
</body>
</html>