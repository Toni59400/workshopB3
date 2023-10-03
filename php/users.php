<?php
include("./config/config.php");
include("./config/dbconnection.php");


function getAllUsers(){
    $sql = $db->prepare("SELECT * FROM users"); 
    $sql = $sql->execute();
    $data = $sql->fetchAll(); 
    return $data;
}

function getOneUsers($idUser){
    //Return 1 user or erreur code
    if(is_int($id)){
        $sql = $db->query("SELECT * FROM users where id_users='$idUser'"); 
        $data = $sql->fetch(); 
        return $data;
    } else {
        return "Erreur Systeme";
    }
}

function updateUsers($idUser, $mail, $pass, $verif, $lastCo, $registerAt, $cp, $ville, $adress){
    if(is_int($id)){
        $passHash = password_hash($pass, PASSWORD_DEFAULT).
        $sql = $db->prepare("UPDATE users SET mail = '$mail',pass = '$passHash', ville = '$ville',cp = '$cp', adresse='$adress' WHERE id_users = 1;");
        $sql=$sql->execute();
        return True;
    }
    return False;
}