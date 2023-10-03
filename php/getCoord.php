<?php
include("config/config.php");
include("config/dbconnection.php");



$data = $db->query("SELECT * FROM services");

$coordinates = array();

while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
    $coordinates[] = $row;
}

$data2= json_encode($coordinates);
echo $data2;
?>