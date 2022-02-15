<?php
//require('Action/database.php');
try{
    session_start();
    $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
    die('une erreur a été detecté: ' .$e->getMessage());
}
// verifier si les champs sont remplis
if(isset($_POST['validate'])){
    if(!empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['contenu'])){
//les donnes a faire passer dans la requete
        $new_question_titre=htmlspecialchars($_POST['titre']);
        $new_question_description=htmlspecialchars($_POST['description']);  
        $new_question_contenu=htmlspecialchars($_POST['contenu']); 
//modifier les informations de la question qui possede le id entre en paramettre dans l'url
        $editQuestionOnWebsite= $bdd->prepare('UPDATE questions SET titre= :titre , description= :titre , contenu= :contenu WHERE id= :id ');
        $editQuestionOnWebsite->execute(array($GET['id']));

        header('location: mesquestions.php');
    }else{
        $errorMsg= "veuillez completer tout les champs";
    }
   
}