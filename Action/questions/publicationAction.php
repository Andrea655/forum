<?php 
//require('Action/database.php');
try{
    session_start();
    $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
    die('une erreur a été detecté: ' .$e->getMessage());
}
if(isset($_POST['validate']))
{
//nl2br c'est pour inserer les sauts de lignes 
    if(!empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['contenu'])) 
 {
        $question_titre=htmlspecialchars($_POST['titre']);
        $question_description=nl2br(htmlspecialchars($_POST['description']));
        $question_contenu= nl2br(htmlspecialchars($_POST['contenu']));
        $question_date= date('d/m/y');
        $question_id_author= $_SESSION['id'];
       $question_nom_author= $_SESSION['name'];

      //  $checkIfUserAlreadyExists = $bdd->prepare("SELECT nom FROM client WHERE nom= ? ");
      //  $checkIfUserAlreadyExists->execute([$_POST['name']]);
  


       // if($checkIfUserAlreadyExists->rowCount() == 0)
      //  { 
      
       $insertQuestionOnWebSite=$bdd->prepare('INSERT INTO questions (Titre, Description, Contenu, id_author, nom_author, date_publication)VALUES(:titre,:description,:contenu, :id_author, :nom_author,:date_publication)');
       $insertQuestionOnWebSite->execute(array(':titre'=>$question_titre, ':description'=>$question_description,':contenu'=> $question_contenu, ':id_author'=>$question_id_author, ':nom_author'=>$question_nom_author, ':date_publication'=>$question_date ));
     
       $successMsg = "question bien plubliée";     
    
}else{
        $errorMsg= "veuillez bien entrer tous les champs"; 
    }
}




 