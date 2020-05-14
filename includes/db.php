<?php

function connectBdd()
{
    $dbHost = 'localhost';
    $dbPort = '3306';
    $dbName = 'gbafdb';
    $dbUser = 'gbaf_user';
    $dbPassword = 'Gb4f_2020#!';

    //façon avec le try / catch pour choper les erreurs
    try {
        $bdd = new PDO('mysql:host=' . $dbHost . ':' . $dbPort . ';dbname=' . $dbName . ';charset=utf8', $dbUser, $dbPassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        throw new Exception('Erreur : ' . $e->getMessage());
    };
    return $bdd;
 
}


