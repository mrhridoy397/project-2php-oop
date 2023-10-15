<?php require_once('./controller/AboutContoller.php'); ?>
<?php
$About = new AboutController();
$Response = [];
$active = $About->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $About->AboutDelete($_REQUEST['id']);

?>