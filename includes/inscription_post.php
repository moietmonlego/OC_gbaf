<?php
session_start();
// tester si tous les champ sont setté

require 'models.php';

if (
    isset($_POST['name']) && $_POST['name'] != null
    &&
    isset($_POST['firstname']) && $_POST['firstname'] != null
    &&
    isset($_POST['username']) && $_POST['username'] != null
    &&
    isset($_POST['password']) && $_POST['password'] != null
    &&
    isset($_POST['password2']) && $_POST['password2'] != null && $_POST['password2'] == $_POST['password']
    &&
    isset($_POST['question']) && $_POST['question'] != null
    &&
    isset($_POST['answer']) && $_POST['answer'] != null
) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $login = $_POST['username'];
    $pwd = $_POST['password'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $is_userexist = isProfilExist($login);

    if ($is_userexist == 0) {
        addProfil($name, $firstname, $login, $pwd, $question, $answer);
        $userinfo = getprofil($login);

        $_SESSION['user'] = $login;
        $_SESSION['iduser'] = $userinfo['id_user'];

        header("Location: ../index.php?action=presentation");
    } else {

        header("Location: ../index.php?action=inscription");
    }
} else {
    header("Location: ../index.php?action=inscription");
}
