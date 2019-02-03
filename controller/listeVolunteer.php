<?php
require '../model/db.php';
require "../model/volunteerManager.php";
$result = getVolunteers($db);
require '../view/listeVolunteerView.php';
 ?>
