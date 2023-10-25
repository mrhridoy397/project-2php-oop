<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$courseAll = $courses->Course();
?>



<?php
require_once('./partials/header.php')
?>




<div class="container">
    <div class="facility-job-section">
        <div class="row">
            <?php
            foreach ($courseAll[0] as  $value) {


            ?>
                <div class="col when-faciliy">
                    <h1><?php echo  $value['courseName']; ?></h1>
                    <h2><?php echo $settings[26]['description']; ?></h2>
                    <div class="in-row">
                        <div class="in-col">
                            <h3><?php echo $settings[24]['description']; ?></h3>
                            <p><?php echo  $value['courseAbout']; ?></p>
                        </div>
                        <div class="in-col">
                            <h3><?php echo $settings[25]['description']; ?></h3>
                            <p><?php echo  $value['courseDetails']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



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