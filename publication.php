<?php 
//require('Action/utilisateur/securiteAction.php');
require('Action/questions/publicationAction.php');
if(!isset($_SESSION["auth"])){
  header("Location: login.php");
}
?>

<!Doctype html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body >

<?php include 'includes/navbar.php'; ?>

<br ><br >
<form class="container" method="post" >
<?php
  if(isset($errorMsg)){
    echo '<p>' .$errorMsg. '</p>';
  }
  elseif(isset($successMsg)){
   echo '<p>'.$successMsg.'</p>';
  }
  ?>
  <div class="form-group">
    <label for="form-label" class="form-label">Titre de la question</label>
    <input type="text" class="form-control" name="titre" >
  </div>
  <br ><br >
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Description de la question</label>
    <textarea class="form-control" name="description"></textarea>
  </div>
  <br ><br >
  <div class="form-group">
  <label  for="exampleInputPassword1" class="form-label">Contenu de la question</label>
    <textarea  class="form-control" name="contenu"></textarea>
  </div>
  <br><br >
  <button type="submit" class="btn btn-primary" name="validate">Publier</button>

</form>
</body >
</html>