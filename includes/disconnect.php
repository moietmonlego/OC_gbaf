<?php
$title='Deconnexion';

session_destroy();

header("Location: ../index.php");