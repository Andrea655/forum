<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BLOG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link " href="Accueil.php">les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publication.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mesquestions.php">Mes Questions</a>
        </li>
        <?php  
        if(isset($_session['auth'])){
          ?>
 <li class="nav-item">
          <a class="nav-link" href="Action/utilisateur/deconnexion.php">Mes Questions</a>
          </li>
<?php  
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="Action/utilisateur/deconnexion.php">deconnexion</a>
          ?>
          </li>
      </ul>
    </div>
  </div>
</nav>