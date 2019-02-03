<?php
//connexion to db
require 'model/db.php';
require "model/volunteerManager.php";
if(isset($_GET["id"])) {
  //we get volunteer by id
  $id = intval(htmlspecialchars($_GET["id"]));

  //we're calling function that delete volunteer
  if(deleteVolunteer($id, $db)) {
    header("Location: volunteerView.php");
    exit;
  }
  else {
    header("Location: singleVolunteer.php");
    exit;
  }
}
 ?>
