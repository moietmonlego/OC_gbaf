<?php
$title='Mot de Passe oublié';

?>
<form method="POST" action="" name="form_lostpwd" id ="form_lostpwd">

<fieldset>
<legend>Mot de passe oublié</legend>

<p class="input">
<label>Identifiant : </label>
<input type="text" name="username" id="username" placeholder="jean.dupont">
</p>

<p class="input">
<label>Question secrète : </label>
<input type="text" name="question" id="question" placeholder="Ma couleur préférée">
</p>

<p class="inputbutton">
<input type="submit" value="Retrouver mon mot de passe">
</p>

</fieldset>

</form>