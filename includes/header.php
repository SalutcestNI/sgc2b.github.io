<div class="navbar">

    <a href="index.php" class="sgc2b">SGC2B</a>

    <div class="sub-navbar">
        <a href="index.php">Accueil</a>
        <a href="contact.php">Contactez-nous</a>
        <a href="faq.php">À propos</a>

<?php

if (isset($_SESSION['userId'])) {

?>

        <div id="connexionButton" class="navbar-profil">Profil</div>
        <div id="connexion-box" class="connexion-box-dashboard hidden">
            <ul class="menu">
                <li><a href="profil.php">Mon profil</a></li>
                <li><a href="dashboard.php">Tableau de bord</a></li>
<?php

    if ($_SESSION['userId'] == 118 || $_SESSION['userId'] == 153) {
        echo '<li><a class="resp1" href="admin.php">Gestion de la crèche</a></li>';
        
    }

?>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </div>

<?php

} else {

    // Détermine le nom du fichier actuel
    $current_page = basename($_SERVER['PHP_SELF']);

    // Affiche le bouton d'inscription/connexion seulement si ce n'est pas la page 404.php
    if ($current_page != '404.php') {
?>

        <a id="connexionButton" class="navbar-profil">Inscription / Connexion</a>
        <div id="connexion-box" class="connexion-box hidden">
            <p>Espace Client</p>
            <a href="connexion-parents.php">Se connecter</a>
            <a href="inscription-parent.php">S'inscrire</a>
            <p>Nous rejoindre</p>
            <a href="postuler.php">Postuler</a>
        </div>

<?php
    }
}
?>

    </div>
    
</div>
