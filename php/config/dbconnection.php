<?php
    try{
        $db = new PDO('mysql:host='.$config['server'].'; dbname='.$config['dbname'].';charset=utf8', $config['login'], $config['password']); 
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'ECHEC :'.$e->getMessage();
        $db = NULL; 
    }
?>