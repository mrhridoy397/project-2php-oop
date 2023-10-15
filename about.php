<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$SuccessStudent = $courses->getSuccessStudent();
$about = $courses->indexAboutContent();
?>



<?php
require_once('./partials/header.php')
?>



<div class="container">
    <div class="about-section">
        <?php 
        if (!empty($about)) {
            foreach ($about[0] as  $value) {
                
        ?>
        <div class="about-title-row">
            <div class="title col">
                <h2><?php echo $value['title']; ?></h2>
            </div>
            <div class="title-text col">
                <p><?php echo $value['Description']; ?></p>
            </div>
        </div>
        <?php }}?>
    </div>

    <!-- counter section start -->
    <div class="counter-section">

        <div class="counter-row">
            <?php
            if (!empty($SuccessStudent)) {
                foreach ($SuccessStudent[0] as $data) {
            ?>
                    <div class="col">
                        <h4><?php echo $data['student']; ?>+</h4>
                        <p><?php echo $data['title']; ?></p>
                    </div>
            <?php  }
            } ?>
        </div>

    </div>
    <!-- counter section end -->


    <!-- payment section start -->
    <div class="payment-section">

        <div class="title-row">
            <h3><?php echo $settings[19]['description']; ?></h3>
        </div>
        <div class="payment-row">
            <?php
            if (!empty($payment)) {
                foreach ($payment[0] as  $value) {

            ?>
                    <div class="col">
                        <img src="<?php echo $value['image']; ?>" alt="">
                        <a href="tel:<?php echo $value['paymentNumber']; ?>"><?php echo $value['paymentNumber']; ?></a>
                    </div>
            <?php  }
            } ?>
        </div>

    </div>
    <!-- payment section end -->

</div>




<?php
require_once('./partials/footer.php')
?>