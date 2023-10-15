<?php require_once('./controller/freelancingImageController.php'); ?>
<?php
$freelancingimage = new FreelanchingController();
$Response = [];
$active = $freelancingimage->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $freelancingimage->freelancingImageDelete($_REQUEST['id']);

?>