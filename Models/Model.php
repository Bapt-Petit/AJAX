<?php 
function recuperer($connexion){
    $getAll ="SELECT * FROM `post` ORDER BY `id` DESC";
    $pdoPrepare = $connexion->prepare($getAll);
    $pdoPrepare->execute();
    $json = $pdoPrepare->fetchAll(PDO::FETCH_OBJ);
    return $json;
}

function insert($un,$deux,$trois,$quatre,$connexion) {
    $insert = "INSERT INTO `post` (`name`,`slug`,`content`,`created_at`) VALUES(:name,:slug,:content,:created_at)";
    $pdoPrepare = $connexion->prepare($insert);
    $pdoPrepare->bindValue(':name',$un,PDO::PARAM_STR);
    $pdoPrepare->bindValue(':slug',$deux,PDO::PARAM_STR);
    $pdoPrepare->bindValue(':content',$trois,PDO::PARAM_STR);
    $pdoPrepare->bindValue(':created_at',$quatre,PDO::PARAM_STR);
    return $pdoPrepare->execute();
}
?>