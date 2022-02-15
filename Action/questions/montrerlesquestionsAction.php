<?php
//require("Action/database.php");
try{
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
    die('une erreur a été detecté: ' .$e->getMessage());
}

if(isset($_GET['search']) AND !empty($_GET["search"])){

    var_dump( $_GET['search']);
    $usersSearch = $_GET['search'];
    //ici on veut faire une recherche avec juste un mot cle
    $data = $bdd->query("SELECT * FROM questions WHERE titre LIKE '%{$usersSearch}%' ORDER BY id DESC");
    return $data;
}
// afficher les messages par defaut
$data = $bdd->query('SELECT * FROM questions ORDER BY id DESC LIMIT 5');
// verifie si une recherche a ete entre par l'utilisateur

?>
