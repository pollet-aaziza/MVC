<?php
require '../model/db.php';
require '../model/messageManager.php';

session_start();
$user = $_SESSION["user"];
$result = getMessages($db, $user);
require '../view/messageView.php';

?>
