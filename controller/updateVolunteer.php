<?php
require '../model/db.php';
require "../model/volunteerManager.php";
if(!empty($volunteer))
updateVolunteer($db,$volunteer);
header("location:listeVolunteer.php");

require '../view/updateVolunteerView.php';
 ?>
