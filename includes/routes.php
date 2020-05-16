<?php

if (isset($_SESSION['iduser']) && $_SESSION['iduser'] != null) {

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {

            case 'presentation':
                include 'includes/presentation.php';
                break;

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

            default:include 'includes/presentation.php';
        }
        
    }
    else{
        include 'includes/presentation.php';
    }

} else {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {

            case 'connection':
                include 'includes/connection.php';
                break;

            case 'lostpassword':
                include 'includes/lostpassword.php';
                break;

            case 'inscription':
                include 'includes/inscription.php';
                break;
    
        default: include 'includes/connection.php';
}
    }
    else {
    include 'includes/connection.php';
}
}