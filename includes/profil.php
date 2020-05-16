<?php
$title='Mon Profil';
?>
<div class="profil">
<h2>Mon Profil</h2>

<?php
require 'models.php';

$login = 1;
$data = getprofil($login);

while ($profildata = $data -> fetch()){
    echo 
    '<p>Id user : '.$profildata['id_user'].'</p>'.
    '<p>nom : '.$profildata['nom'].'</p>'.
    '<p>prenom : '.$profildata['prenom'].'</p>'.
    '<p>username : '.$profildata['username'].'</p>'.
    '<p>password : '.$profildata['password'].'</p>'.
    '<p>question : '.$profildata['question'].'</p>'.
    '<p>response : '.$profildata['response'].'</p>';

}

?>

</div>