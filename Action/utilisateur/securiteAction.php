
<?php
//verifier si l'utilisateur est authentifier
if(!isset($_SESSION['auth'])){
    header('location: login.php');
}






