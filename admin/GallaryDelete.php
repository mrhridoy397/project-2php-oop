<?php require_once('./controller/gallaryController.php'); ?>
<?php
$gallary = new gallaryController();
$Response = [];
$active = $gallary->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $gallary->gallaryDelete($_REQUEST['id']);

?>