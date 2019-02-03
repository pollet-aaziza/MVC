<?php
require '../model/db.php';
require "../model/volunteerManager.php";
//check if form is not empty.
if(!empty($_POST)){
  addVolunteer($db, $_POST);
  header("location: listeVolunteer.php");
}

require "../view/addVolunteerView.php";
 ?>
