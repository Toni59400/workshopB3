<?php
include("config/config.php");
include("config/dbconnection.php");


function getAllUsers($db){
    $sql = $db->query("SELECT * FROM users"); 
    $data = $sql->fetchAll();
    return $data;
}

function getOneUsers($idUser, $db){
    //Return 1 user or erreur code
    if(is_int($id)){
        $sql = $db->prepare("SELECT * FROM users where id_users = :idUser");
        $sql = $sql->execute([
            'idUser' => $idUser,
        ]) 
        $data = $sql->fetch(); 
        return $data;
    } else {
        return "Erreur Systeme";
    }
}

function updateUsers($idUser, $mail, $pass, $verif, $lastCo, $registerAt, $cp, $ville, $adresse, $db){
    if(is_int($id)){
        $passHash = password_hash($pass, PASSWORD_DEFAULT).
        $sql = $db->prepare("UPDATE users SET mail = :mail, pass = :passHash, ville = :ville, cp = :cp, adresse = :adresse WHERE id_users = 1");
        $sql=$sql->execute([
            "mail" => $mail,
            "passHash" =>$passHash,
            "ville" => $ville,
            "cp" => $cp,
            "adresse" => $adresse,
        ]);
        return True;
    }
    return False;
}