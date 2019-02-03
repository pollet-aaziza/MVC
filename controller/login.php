<?php
require '../model/volunteerManager.php';
require '../model/db.php';
if(!empty($_POST)){
  $volunteer = getVolunteerByPseudo($db, $_POST["pseudo"]);
  //si on a un utilisateur avec ce pseudo
  if($volunteer){
    //on véréfie que le mot de pass soumis et celui enregestré dans la db sont identiques
    if($_POST["password"] === $volunteer["password"]){
      //on démare une session
      session_start();
      //session_start nous donne accés à la superglobale $_SESSION qui est un tableu a qui o na donné 
      $_SESSION["user"] = $volunteer;
      header('location: messagerie.php');
      exit;
    }
  }
}
require '../view/loginView.php';

 ?>
