<?php require_once('./controller/contactMassageController.php'); ?>
<?php
$massage = new MassageController();
$Response = [];
$active = $massage->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $massage->massageDelete($_REQUEST['id']);

?>