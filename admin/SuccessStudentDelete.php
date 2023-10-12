<?php require_once('./controller/SuccessStudentController.php'); ?>
<?php
$success = new SuccessStudentController();
$Response = [];
$active = $success->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $success->SuccessStudentDelete($_REQUEST['id']);

?>