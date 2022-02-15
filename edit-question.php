<?php
require('Action/questions/getInfosOfEditQuestionAction.php');
require('Action/utilisateur/securiteAction.php');
if(!isset($_SESSION["auth"])){
  header("Location: login.php");
}

?>
<!Doctype html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body >
<?php include 'includes/navbar.php'; ?>

<div class="container" >

<?php
  if(isset($errorMsg)){
    echo '<p>' .$errorMsg. '</p>';
  }
    ?>
     ?> 
    if(isset($question_date)){
      <form method="post">
      <br ><br >
    <div class="form-group">
      <label for="form-label" class="form-label">Titre de la question</label>
      <input type="text" class="form-control" name="titre" values=" <? $question_titre ?>" >
    </div>
    <br ><br >
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label">Description de la question</label>
      <textarea class="form-control" name="Description"><? $question_description ?></textarea>
    </div>
    <br ><br >
    <div class="form-group">
    <label  for="exampleInputPassword1" class="form-label">Contenu de la question</label>
      <textarea  class="form-control" name="contenu"><? $question_contenu ?></textarea>
    </div>
    <br><br >
    <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>
  </form>
    }
    <?php
  ?> 
</div>
</body >
</html>