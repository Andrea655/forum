<?php
try{
  session_start();
  $bdd= new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
}catch(Exception $e){
  die('une erreur a été detecté: ' .$e->getMessage());
}
//validation du formulaire
//if($_SERVER['REQUEST_METHOD'] == 'POST')
if(isset($_POST['validate']))
{
 if(!empty($_POST['name']) && !empty($_POST['password']))
 { 
   $user_name=htmlspecialchars($_POST['name']);
   $user_password=htmlspecialchars($_POST['password']);

    $query = $bdd->prepare("SELECT * FROM client WHERE  nom = ?");
     $query->execute(array($user_name));
    $usersInfos = $query->fetch();

    if(count($usersInfos) > 0 )
    {
   if(password_verify( $user_password, $usersInfos['mdp'])){
         //utilisateur authentifié    
              
           $_SESSION['auth']=true;
           $_SESSION['id']=$usersInfos['Id'];
           $_SESSION['name']=$usersInfos['nom'];
           $_SESSION['username']=$usersInfos['prenom'];

          header('location: Accueil.php');
   }else{
    $errorMsg= "votre mot de passe est incorrect";
   }

    }else{
      $errorMsg= "votre nom est incorrect";
    }
 }
    
}
