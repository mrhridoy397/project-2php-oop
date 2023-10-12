<?php require_once('./controller/basicTradeController.php'); ?>
<?php
$basicTrade = new basicTradeModelController();
$Response = [];
$active = $basicTrade->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $basicTrade->basicTradeDelete($_REQUEST['id']);

?>