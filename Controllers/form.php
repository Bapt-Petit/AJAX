<?php
include_once('../Models/Database.php');
include_once('../Models/Model.php');
$success = '';
$connexion = database();
// if ($connexion == true) {
if (!empty($_POST['name']) && !empty($_POST['slug']) && !empty($_POST['content']) && !empty($_POST['created_at'])) {
    $title = htmlspecialchars($_POST['name']);
    $slug = htmlspecialchars($_POST['slug']);
    $content = htmlspecialchars($_POST['content']);
    $create = htmlspecialchars($_POST['created_at']);
    //J'appelle la fonction insert()
    insert($title,$slug,$content,$create,$connexion);
    $success = 1 ;
    $msg = "Le profil a bien été créé !";
}else {
    $msg = "Il faut renseigner les champs";
}
// }else{
//     $msg = "il y a un probleme";
// }
$res = ["success"=> $success, "msg" => $msg];
echo json_encode($res);
