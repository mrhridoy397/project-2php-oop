<?php require_once('./controller/digitalMarketingController.php'); ?>
<?php
$digitalMarketing = new digitalMarketingController();
$Response = [];
$active = $digitalMarketing->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $digitalMarketing->digitalMarketingDelete($_REQUEST['id']);

?>