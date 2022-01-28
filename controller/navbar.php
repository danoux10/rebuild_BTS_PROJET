<?php
    @$connect_lvl= $_SESSION['status'];
?>
<header id="navbar">
        <nav>
            <ul>
                <?php if($connect_lvl==0){?>
                    <li><a href="home.php">Acceuil</a></li>
                    <li id="connexion_view"><span class="connexion">Connexion</span></li>
                <?php }?>
                <?php if($connect_lvl >=2){?>
                    <li><a href="rucher.php">Observer ruche</a></li>
                <?php }?>
                <?php if($connect_lvl==1){?>
                    <li><a href="rucher.php">Gestion & Observation ruches</a></li>
                    <li><a href="user.php">Gestion utilisateur</a></li>
                <?php }?>
                <?php if($connect_lvl!=0) {?>
                    <li><a href="deco.php">Deconnexion</a></li>
                <?php }?>
            </ul>
        </nav>
</header>