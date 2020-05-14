<?php
$title='Inscription';

?>
<form method="POST" action="includes/inscription_post.php" name="form_inscription" id ="form_inscription">

<fieldset>
<legend>Inscription</legend>
<p class="input">
<label>Nom : </label>
<input type="text" name="name" id="name" placeholder="Dupont">
</p>
<p class="input">
<label>Prénom : </label>
<input type="text" name="firstname" id="firstname" placeholder="Jean">
</p>
<p class="input">
<label>Identifiant : </label>
<input type="text" name="username" id="username" placeholder="jean.dupont">
</p>
<p class="input">
<label>Mot de passe : </label>
<input type="password" name="password" id="password" >
</p>
<p class="input">
<label>Confirmez votre mot de passe : </label>
<input type="password" name="password2" id="password2" >
</p>
<p class="input">
<label>Question secrète : </label>
<input type="text" name="question" id="question" placeholder="Ma couleur préférée">
</p>
<p class="input">
<label>Réponse à la question secrète : </label>
<input type="text" name="answer" id="answer" placeholder="bleu">
</p>
<p class="inputbutton">
<input type="submit" value="S'enregistrer">
</p>
</fieldset>

</form>