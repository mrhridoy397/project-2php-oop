<?php require_once('./controller/successHistoryController.php'); ?>
<?php
$success = new successController();
$Response = [];
$active = $success->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $success->SuccessDelete($_REQUEST['id']);

?>