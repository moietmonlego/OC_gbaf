<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'inscription':
            include 'includes/inscription.php';
            break;

        case 'profil':
            include 'includes/profil.php';
            break;

        case 'disconnect':
            include 'includes/disconnect.php';
            break;

            case 'connection':
            include 'includes/connection.php';
            break;


            case 'lostpassword':
            include 'includes/lostpassword.php';
            break;



        default:include 'includes/acteurs.php';
    }
}
include 'includes/acteurs.php';
