<?php 
require('Action/utilisateur/inscription.php');
//require('Action/utilisateur/securiteAction.php');

?>
<!Doctype html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body >
<br ><br >

<form class="container" method="post" >

<?php
  if(isset($errorMsg)){
 //   echo '<p>' .$errorMsg. '</p>';
  }
    ?>

  <div class="form-group">
    <label for="form-label" class="form-label">NOM</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <br ><br >
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">PRENOM</label>
    <input type="text" class="form-control" name="username">
  </div>
  <br ><br >
  <div class="form-group">
  <label  for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="password">
  </div>
  <br><br >
  <button type="submit" class="btn btn-primary">inscrire</button>
  <br ><br >
  <a href="login.php"><p> J'ai deja un compte, je meconnecte</p></a>
</form>

</body >
</html>