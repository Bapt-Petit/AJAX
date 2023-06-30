<?php 
function database(){
    try {
         $db = new PDO ('mysql:host=localhost;dbname=exemple;charset=utf8','root','',[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]);
        return $db;
    } catch (PDOException $ex) {
        die('Une erreur au niveau de la base de donnée s\' est produite !'. $ex->getMessage());
    }
}
?>