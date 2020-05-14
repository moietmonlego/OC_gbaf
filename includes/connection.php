<?php
$title='Se Connecter';

?>
<form method="POST" action="includes/inscription_post.php" name="form_connection" id ="form_connection">

<fieldset>
<legend>Se connecter</legend>

<p class="input">
<label>Identifiant : </label>
<input type="text" name="username" id="username" placeholder="jean.dupont">
</p>
<p class="input">
<label>Mot de passe : </label>
<input type="password" name="password" id="password" >
</p>


<p class="inputbutton">
<input type="submit" value="Connexion">
</p>
<p><a href="<?= $_SERVER['PHP_SELF'];?>?action=lostpassword">Mot de passe oublié ?</a></p>
<p><a href="<?= $_SERVER['PHP_SELF'];?>?action=inscription">Pas encore inscrit ?</a></p>



</fieldset>

</form>