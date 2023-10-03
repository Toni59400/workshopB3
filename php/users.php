<?php
require("config/config.php");
require("config/dbconnection.php");


function getAllUsers($db){
    $sql = $db->query("SELECT * FROM users"); 
    $data = $sql->fetchAll();
    return $data;
}

function getOneUsers($idUser, $db){
    //Return 1 user or erreur code
    if(is_int($idUser)){
        $sql = $db->prepare("SELECT * FROM users where id_users = :idUser");
        $sql = $sql->execute([
            'idUser' => $idUser,
        ]);
        $data = $sql->fetch(); 
        return $data;
    } else {
        return "Erreur Systeme";
    }
}

function getOneUsersByMail($mail, $db){
    //Return 1 user or erreur code
    if(is_string($mail)){
        $sql = $db->query("SELECT * FROM users where mail='$mail'"); 
        $data = $sql->fetch(); 
        return $data;
    } else {
        return "Erreur Systeme";
    }
}

function updateUsers($idUser, $mail, $pass, $verif, $lastCo, $registerAt, $cp, $ville, $adresse, $db){
    if(is_int($idUser)){
        $passHash = password_hash($pass, PASSWORD_DEFAULT).
        $sql = $db->prepare("UPDATE users SET mail = :mail, pass = :passHash, ville = :ville, cp = :cp, adresse = :adresse, lastCo = :lastCo WHERE id_users = :idUser");
        $sql=$sql->execute([
            "mail" => $mail,
            "passHash" =>$passHash,
            "ville" => $ville,
            "cp" => $cp,
            "adresse" => $adresse,
            "lastCo" => $lastCo,
            "id_user" => $idUser
        ]);
        return True;
    }
    return False;
}