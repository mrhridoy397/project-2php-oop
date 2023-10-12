<?php require_once('./controller/SliderController.php'); ?>
<?php
$slider = new SliderController();
$Response = [];
$active = $slider->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $slider->SliderDelete($_REQUEST['id']);

?>