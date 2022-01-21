<div id="ruche_form_content">
    <!--LINK form add ruche-->
    <form id="add_ruche" class="add_form">
        <fieldset class="form_part">
            <legend>
                <img alt="ruche_add_icon" src="../img/rucheAdd.svg">
                <h3>Ajouter Ruche</h3>
            </legend>
            <span class="form_content">
              <label for="rucheName_add">Nom Ruche</label>
              <input id="rucheName_add" name="" type="text">
            </span>
            <span class="form_content">
              <label for="rucheValue_add">Valeur Ruche</label>
              <input id="rucheValue_add" name="" type="text">
            </span>
            <span>
                <button class="add_btn" name="">Ajouter Ruche</button>
                <button type="submit" name="cancel_update" class="cancel_btn">Annuler</button>
            </span>
        </fieldset>
    </form>
    <!--LINK form update ruche-->
    <form id="update_ruche" class="update_form" hidden>
        <fieldset class="form_Row">
            <legend>
                <img alt="ruche_add_icon" src="../img/rucheUpdate.svg">
                <h3>Update Ruche</h3>
            </legend>
            <div class="ruche_left">
                <span class="form_content">
                  <label for="rucheName_add">Nom Ruche</label>
                  <input id="rucheName_add" name="" type="text">
                </span>
                <span class="form_content">
                  <label for="rucheValue_add">Valeur Ruche</label>
                  <input id="rucheValue_add" name="" type="text">
                </span>
                <button class="update_btn" name="">Update Ruche</button>
            </div>
            <div class="ruche_right">
                <h4>Rucher : 4563</h4>
                <?php
                  require_once '../_function/select.php';
                  echo selectRucher();
                ?>
                <span class="form_content">
                    <button type="submit" name="" class="add_btn">Retirer rucher</button>
                    <button type="submit" name="" class="delete_btn">Retirer rucher</button>
                </span>
            </div>
        </fieldset>
    </form>
    <!--LINK form add rucher-->
    <form id="add_rucher" class="add_form">
        <fieldset class="form_part">
            <legend>
                <img alt="rucher_add_icon" src="../img/rucherAdd.svg">
                <h3>Ajouter Rucher</h3>
            </legend>
            <span class="form_content">
              <label for="rucherName_add">Nom Rucher</label>
              <input id="rucherName_add" name="" type="text">
            </span>
            <span class="form_content">
              <label for="rucherLocation_add">Localisation Rucher</label>
              <input id="rucherLocation_add" name="" type="text">
            </span>
            <span>
                <button class="add_btn" name="">Ajouter Rucher</button>
                <button type="submit" name="cancel_update" class="cancel_btn">Annuler</button>
            </span>
        </fieldset>
    </form>
    <!--LINK form update rucher-->
    <form id="update_rucher" class="update_form" hidden>
        <fieldset class="form_Row">
            <legend>
                <img alt="ruche_add_icon" src="../img/rucherUpdate.svg">
                <h3>Update rucher</h3>
            </legend>
            <div class="ruche_left">
                <span class="form_content">
                    <label for="rucherName_add">Nom Rucher</label>
                    <input id="rucherName_add" name="" type="text">
                </span>
                <span class="form_content">
                    <label for="rucherLocation_add">Localisation Rucher</label>
                    <input id="rucherLocation_add" name="" type="text">
                </span>
                <button class="add_btn" name="">Ajouter Rucher</button>
            </div>
            <div class="ruche_right">
                <table class="select_ruche">
                    <thead>
                    <th>Nom</th>
                    <th>Rucher</th>
                    <th>Select</th>
                    </thead>
                    <?php echo selectTableRuche(); ?>
                </table>
                <span class="form_content">
                    <button type="submit" name="" class="add_btn">Ajouter Ruche</button>
                </span>
            </div>
        </fieldset>
    </form>
</div>
