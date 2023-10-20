<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$SuccessStudent = $courses->getSuccessStudent();
$gallary = $courses->getgallary();
?>




<?php
require_once('./partials/header.php')
?>


<div class="container">
    <!-- photo gallary Start -->
    <div class="gallery-section">
        <div class="gallery_titile-row">
            <?php
            if (!empty($gallary)) {
                foreach ($gallary[0] as $value) {

            ?>
                    <h2>
                        <?php echo $value['title'] ?>
                    </h2>
            <?php }
            } ?>
        </div>
        <div class="gallery-row">

            <?php
            if (!empty($gallary)) {
                foreach ($gallary[0] as $value) {

            ?>
                    <div class="col">
                        <img src="<?php echo $value['image'] ?>" alt="">
                        <h2>
                            <?php echo $value['shortDescription'] ?>
                        </h2>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <!-- photo gallary End -->

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
            <h3>
                <?php echo $settings[19]['description']; ?>
            </h3>
        </div>
        <div class="payment-row">
            <?php
            if (!empty($payment)) {
                foreach ($payment[0] as $value) {

            ?>
                    <div class="col">
                        <img src="<?php echo $value['image']; ?>" alt="">
                        <a href="tel:<?php echo $value['paymentNumber']; ?>">
                            <?php echo $value['paymentNumber']; ?>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>

    </div>
    <!-- payment section end -->

</div>


<?php
require_once('./partials/footer.php')
?>