<?php
$title='Mon Profil';
?>
<div class="profil">
<h2>Mon Profil</h2>

<?php

    echo 
    '<p>Id user : '.$user['id_user'].'</p>'.
    '<p>nom : '.$user['nom'].'</p>'.
    '<p>prenom : '.$user['prenom'].'</p>'.
    '<p>username : '.$user['username'].'</p>'.
    '<p>question : '.$user['question'].'</p>'.
    '<p>response : '.$user['response'].'</p>';



?>

</div>