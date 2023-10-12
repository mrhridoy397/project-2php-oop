<?php require_once('./controller/graphicsCourseController.php'); ?>
<?php
$graphicscourse = new graphicsCourseController();
$Response = [];
$active = $graphicscourse->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $graphicscourse->graphicsCourseDelete($_REQUEST['id']);

?>