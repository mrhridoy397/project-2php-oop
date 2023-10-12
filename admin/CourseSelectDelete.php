<?php require_once('./controller/CourseSelectController.php'); ?>
<?php
$CourseSelect = new CourseSelectController();
$Response = [];
$active = $CourseSelect->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $CourseSelect->CourseSelectDelete($_REQUEST['id']);

?>