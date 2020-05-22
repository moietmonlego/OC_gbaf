<?php

require 'db.php';

function getprofils($limit)
{
    $bdd = connectBdd();

    $req = 'SELECT id_user ,nom ,prenom,username,password,question,response 
    FROM account WHERE 1 LIMIT :limit';
    $getprofils = $bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $getprofils->bindValue(':limit', intval($limit), PDO::PARAM_INT);
    $getprofils->execute();

    return $getprofils;

    $getprofils->closeCursor(); // Termine le traitement de la requête
}

function getprofil($login)
{
    $bdd = connectBdd();

    $req = 'SELECT * FROM account WHERE username =:username';

    $getprofil = $bdd->prepare($req);
    $getprofil->execute(array('username' => $login));

    $user = $getprofil->fetch();
    return $user;

    $getprofil->closeCursor(); // Termine le traitement de la requête

}

function addProfil($name, $firstname, $login, $pwd, $question, $answer)
{
    $bdd = connectBdd();

    //$name = $_POST($name);
    //$firstname = $_POST($firstname);
    //$login = $_POST($login);
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    //$question = $_POST($question);
    //$answer = $_POST($answer);

    $addprofil = $bdd->prepare('insert into account (nom ,prenom,username,password,question,response)  VALUES (:name,:firstname,:login,:pwd,:question,:answer)');
    $addprofil->execute(array('name' => $name, 'firstname' => $firstname, 'login' => $login, 'pwd' => $pwd, 'question' => $question, 'answer' => $answer));
    $addprofil->closeCursor();
    return;
}

function isProfilExist($pseudo)
{

    $bdd = connectBdd();

    $req = 'SELECT COUNT(id_user) as is_user_exist FROM account WHERE username = :username';
    $isProfil = $bdd->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $isProfil->execute(array('username' => $pseudo));

    while ($data = $isProfil->fetch()) {
        return $data['is_user_exist'];
    }

    return;

    $isProfil->closeCursor();
}

function getpostacteur($idacteur)
{
    $bdd = connectBdd();

    $req = 'SELECT * FROM post WHERE id_acteur =:idacteur';

    $getpost = $bdd->prepare($req);
    $getpost->execute(array('idacteur' => $idacteur));

    $post = $getpost->fetch();
    return $post;

    $getpost->closeCursor();
}

function getpostpost($idpost)
{
    $bdd = connectBdd();

    $req = 'SELECT * FROM post WHERE id_post =:idpost';

    $getpostpost = $bdd->prepare($req);
    $getpostpost->execute(array('idpost' => $idpost));

    $post = $getpostpost->fetch();
    return $post;

    $getpostpost->closeCursor();
}


function addPost($iduser, $idacteur, $post)
{
    $bdd = connectBdd();

    $addPost = $bdd->prepare('insert into post (id_user ,id_acteur,post) VALUES (:iduser,:idacteur,:post)');

    $addPost->execute(array('iduser' => $iduser, 'idacteur' => $idacteur, 'post' => $post));
    $addPost->closeCursor();
    return;
}