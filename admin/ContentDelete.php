<?php require_once('./controller/ContentController.php'); ?>
<?php
$content = new ContentController();
$Response = [];
$active = $content->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $content->ContentDelete($_REQUEST['id']);

?>