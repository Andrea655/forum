<?php

try{
     session_start();
     $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
 }catch(Exception $e){
     die('une erreur a été detecté: ' .$e->getMessage());
 }

 //validation du formulaire
 if($_SERVER['REQUEST_METHOD'] == 'POST')
// if(isset($_POST['validate']))
{
    if(!empty($_POST['name']) AND !empty($_POST['username']) AND !empty($_POST['password']))
    { 
 //verifier si l'utilisateur a entrer tout les champs
      $user_name= htmlspecialchars($_POST['name']);
      $user_username= htmlspecialchars($_POST['username']);
      $user_password= password_hash($_POST['password'], PASSWORD_DEFAULT);
     
//verifier si l'utilisateur est dans le site; on recupere les donnes dans la table
     $checkIfUserAlreadyExists = $bdd->prepare("SELECT nom FROM client WHERE nom= ? ");
     $checkIfUserAlreadyExists->execute(array($user_name));


//compte le nombre de donnes recupere dans la requete
   if($checkIfUserAlreadyExists->rowCount() == 0)
    { 

     $insertUserOnWebsite= $bdd->prepare("INSERT INTO `client`(`nom`, `prenom`, `mdp`)VALUES(:nom,:prenom,:mdp)");
     $insertUserOnWebsite->execute(array(':nom'=>$user_name, ':prenom'=>$user_username, ':mdp'=>$user_password ));

// on va recuperer les donnes de l'utilisateur en fonction de son id

 $getInfosOfThisUserReq=  $bdd->prepare("SELECT id, nom, prenom FROM client WHERE nom='?'  AND prenom= `?` ");
 $getInfosOfThisUserReq->execute(array (":nom=>$user_name,:prenom=>$user_username"));
     

//On recupere les donnes puis on les stockes dans un tableau  

       $usersInfos= $getInfosOfThisUserReq->fetch();
 //on l'authentifie       
//savoir si l'utilisateur est bien connecte sur le site
       $_SESSION['auth']= true;
//on recupere les donnes dans la session        
      $_SESSION['id']= $UsersInfos['id'];
      $_SESSION['name']=$UsersInfos['nom'];
       $_SESSION['username']=$UsersInfos['prenom'];

//on redirige l'utilisateur vers la page d'accueil
 header('location: Accueil.php');
    }else{

       $errorMsg= "Compte Enregistrer"; 
     }
}else{
     $errorMsg= "veuillez bien entrer tous les champs";
 }
}


















