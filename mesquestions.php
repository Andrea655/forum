<?php
 require('Action/questions/mesquestionsActions.php');
 //require('Action/utilisateur/securiteAction.php');
 if(!isset($_SESSION["auth"])){
  header("Location: login.php");
}
 ?>
<!Doctype html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body >
<?php include 'includes/navbar.php'; ?>
<div class="container">
  <div class="row mt-4">
    <?php foreach($reponses as $reponse) :?>
  <div class="col-4">
      <div class="card">
        <h5 class="card-header">
          <?=$reponse['Titre']; ?>
        </h5>
        <div class="card-body">
          <p class="card-text"><?=$reponse['Description']; ?></p>
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
