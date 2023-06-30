<?php
include_once('../Models/Database.php');
include_once('../Models/Model.php');
$connexion = database();
$json = recuperer($connexion);
echo json_encode($json);
?>