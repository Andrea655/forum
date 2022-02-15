<?php
//require('Action/database.php');
try{
    session_start();
    $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
    die('une erreur a été detecté: ' .$e->getMessage());
}

$getAllMyQuestions= $bdd->prepare('SELECT * FROM questions WHERE id_author = :id_author');
$getAllMyQuestions->execute(array(":id_author"=>$_SESSION['id']));
$reponses = $getAllMyQuestions->fetchAll();


