<section>
    <a href="index.php">Accueil</a>
    <div class="lateral_cesure_footer"></div>
<?php

    if(isset($_SESSION['id']))
    {
    if($_SESSION['id']>0)
    {
    ?>	
    	
        <a href="cours.php">Cours</a>
        <div class="lateral_cesure_footer"></div>
        <a href="professeur.php">Professeur</a>
        <div class="lateral_cesure_footer"></div>
        <a href="calendrier.php">Calendrier</a>
        <div class="lateral_cesure_footer"></div>
        <a href="deconnexion.php">Se déconnecter</a>
    <?php
    }
    
    }
    else
    {
    ?>
        <a href="inscription.php">S'inscrire</a>
        <div class="lateral_cesure_footer"></div>
        <a href="connexion.php">Se connecter</a>
    <?php
    }
    ?>
</section>
