<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FORUM</a>
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