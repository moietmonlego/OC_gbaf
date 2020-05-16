<div class="header">
        <header>
        <div class="logo_header">
      <a href="../index.php" title="Retour à l'accueil"><img src="../images/logo_gbaf.png" alt="logo GBAF" class="logo_header" /></a>
        </div>

        <div class="profil_header">
<!--
        <img src="../images/profil_neutre.png" alt="image profil" class="image_profil"/>
-->

<a href="<?=$_SERVER['PHP_SELF'];?>?action=profil">

<?php

require 'models.php';

if (isset($_SESSION['user'])) {
    $login = $_SESSION['user'];
    $user = getprofil($login);
    /* while ($data = $user->fetch()) {
        $nom = $data['name'];
        $prenom = $data['firstname'];
    } */

    $nom = $user['nom'];
    $prenom = $user['prenom'];

    echo $prenom . ' ' . $nom;

    ?>
    </a>
    <span class="pic_profil">
      <i class="fas fa-user-circle"></i></span><a href="<?=$_SERVER['PHP_SELF'];?>?action=disconnect">Se déconnecter</a>
<?php

} else {
    echo 'Mon Profil';
?>
    <span class="pic_profil">
    <i class="far fa-user-circle"></i></span><a href="<?=$_SERVER['PHP_SELF'];?>?action=connection">Se connecter</a>
  
<?php
}

?>








        </div>

        </header>
        </div>