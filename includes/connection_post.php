<?php
session_start();
// tester si tous les champ sont setté

require 'models.php';

if (
    isset($_POST['username']) && $_POST['username'] != null
    &&
    isset($_POST['password']) && $_POST['password'] != null

) {
    $login = $_POST['username'];

    $pwd = $_POST['password'];

    $is_userexist = isProfilExist($login);

    if ($is_userexist >= 1) {

        // on teste alors user + pwd
        $userinfo = getprofil($login);

        header("Location: ../index.php?action=connection");

        if (

            password_verify($pwd, $userinfo['password'])

        ) {
            $_SESSION['user'] = $login;
            $_SESSION['iduser'] = $userinfo['id_user'];

            header("Location: ../index.php?action=presentation");
        }
    } else {
        header("Location: ../index.php?action=inscription");
    }
} else {
    header("Location: ../index.php?action=inscription");
}
