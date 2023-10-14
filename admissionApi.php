<?php require_once('./controller/CMSConroller.php');
// header("Content-Type: application/json", true);
$courses = new CMSController();
// $email = $_POST['email'];
$courses->createAdmission($_REQUEST);
?>