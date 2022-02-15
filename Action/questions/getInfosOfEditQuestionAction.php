<?php
try{
  session_start();
  $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
  die('une erreur a été detecté: ' .$e->getMessage());
}
if(isset($_GET['id']) AND !empty($_GET['id']))
{



$idOfQuestion= $_GET['id'];
 
$checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id= :id');
$checkIfQuestionExists->execute(array($idOfQuestion)); 

if($checkIfQuestionExists['id_author'] == $_session['id'])
{

if($questionInfos->rowcount() >0)
{
  $question_titre = $questionInfos['titre'];
  $question_description = $questionInfos['description'];
  $question_contenu = $questionInfos['contenu'];
  $question_date = $questionInfos['date_publication'];

 }else{
  $errorMsg=" vous n'estes pas l'auteur";
 }
 
}else{
  $errorMsg=" aucune question n'a ete trouvé ";
}
}else{
  $errorMsg=" aucune question n'a ete trouvé ";
}

