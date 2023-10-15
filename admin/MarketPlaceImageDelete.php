<?php require_once('./controller/MarketPlaceImageContoller.php'); ?>
<?php
$marketPlace = new marketPlaceController();
$Response = [];
$active = $marketPlace->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $marketPlace->ContentDelete($_REQUEST['id']);

?>