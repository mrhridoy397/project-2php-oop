<?php require_once('./controller/webSoftwareController.php'); ?>
<?php
$webSoftware = new webSoftwareController();
$Response = [];
$active = $webSoftware->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $webSoftware->webSoftwareDelete($_REQUEST['id']);

?>