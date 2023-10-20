<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$success = $courses->getSuccess();
$payment = $courses->getPayment();
$courseAll = $courses->Course();
$SuccessStudent = $courses->getSuccessStudent();
// var_dump($success);
?>




<?php
require_once('./partials/header.php')
?>


<div class="container">
    <!-- Course section start  -->
    <div class="popular-course-section" id="popular_course">
        <div class="title-row">
            <div class="title col">
                <h2><?php echo $settings[8]['description']; ?></h2>
            </div>
            <div class="title-text col">
                <p><?php echo $settings[9]['description']; ?></p>
            </div>
        </div>
        <div class="course-row">
            <?php
            if (!empty($courseAll)) {
                foreach ($courseAll[0] as  $data) {


            ?>
                    <div class="course-col">
                        <a href="OnlinAdmission.php?id=<?php echo $data['id']; ?>">
                            <div class="course-image">
                                <img src="<?php echo $data['image']; ?>" alt="">
                            </div>
                            <div class="course-text">
                                <h3><?php echo $data['courseName']; ?></h3>
                                <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <?php echo $data['courseReviews']; ?>
                            </span>
                                <h4>Course fee <?php echo $data['coursefee']; ?></h4>
                            </div>

                        </a>
                    </div>
            <?php }
            } ?>
        </div>

    </div>

    <!-- Course section end  -->

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