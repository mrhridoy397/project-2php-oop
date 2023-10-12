<?php require_once('./controller/paymentController.php'); ?>
<?php
$payment = new paymentController();
$Response = [];
$active = $payment->active;
// $IndexBatch = $Batch->getBatch();
if (isset($_REQUEST) && count($_REQUEST) > 0) $Response = $payment->PaymentDelete($_REQUEST['id']);

?>