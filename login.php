<?php 

require('Action/utilisateur/loginAction.php');
//require('Action/utilisateur/securiteAction.php');
?>

<!Doctype html>
<html lang="en">
<?php include 'includes/head.php';?>
<body >
    
<br ><br >
<form class="container" method="post" >

  
  <?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
    </p>
<?php } ?>
  <div class="form-group mb-3">
    <label for="exampleInputPassword1" class="form-label">nom d'utilisateur</label>
      <input type="text" class="form-control" name="name">
    </div>
  <div class="form-group mb-3">
    <label for="exampleInput" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group mb-3">
    <button type="submit" class="btn btn-primary" name="validate">Enregistrer</button>
  </div>
    <a href="inscrire.php"><p> je n'ai pas de compte, Je m'inscrits</p></a>;
    
</form>

</body>
</html>

