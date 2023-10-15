<?php require_once('./controller/FreelanchingController.php'); ?>
<?php
$freelancingcontent = new freelancingcontentController();
$Response = [];
$active = $freelancingcontent->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $freelancingcontent->freelancingcontentDelete($_REQUEST['id']);

?>