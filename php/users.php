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
        $sql = $db->query("SELECT * FROM users where id_users='$idUser'"); 
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

function updateUsers($idUser, $mail, $pass, $verif, $lastCo, $registerAt, $cp, $ville, $adress, $db){
    if(is_int($id)){
        $passHash = password_hash($pass, PASSWORD_DEFAULT).
        $sql = $db->prepare("UPDATE users SET mail = '$mail',pass = '$passHash', ville = '$ville',cp = '$cp', adresse='$adress' WHERE id_users = 1;");
        $sql=$sql->execute();
        return True;
    }
    return False;
}