<?php 
 
//require('Action/utilisateur/securiteAction.php');
require('Action/questions/montrerlesquestionsAction.php');

if(!isset($_SESSION["auth"])){
  header("Location: login.php");
}

?>
<!Doctype html>
<html lang="en">

<?php include 'includes/head.php'; ?>
<body >

<?php include 'includes/navbar.php'; ?>

<div class= "container mt-3">
  <form method="GET">
      <div class= "row">
        <div class= "col-8">
          <input type="search" name="search" class="form-control">
        </div>
        <div class="col-4">
          <button  class="btn btn-success" type="submit" >Rechercher</button>
        </div>
    </div>
  </form>

   <div class="row mt-4">
    <?php foreach($data as $item) :?>
  <div class="col-4">
      <div class="card">
        <h5 class="card-header">
          <?=$item['Titre']; ?>
        </h5>
        <div class="card-body">
          <p class="card-text"><?=$item['Description']; ?></p>
          <div class="row">
            <a href="#" class="col btn btn-primary btn-sm me-2">Acceder à la question</a>
            <a href="#" class="col btn btn-warning btn-sm">Modifier l'article</a>
          </div>
        </div>
    </div>
  </div>
  <?php endforeach; ?>
  </div>

</div>
</body >
</html>
