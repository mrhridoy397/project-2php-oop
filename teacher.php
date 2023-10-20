<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();
$Response = [];
$active = $courses->active;
$allTeacher = $courses->OuerTeacher();
$settings = $courses->getSetting();
$success = $courses->getSuccess();
$payment = $courses->getPayment();
$SuccessStudent = $courses->getSuccessStudent();
// var_dump($settings);

?>



<?php
require_once('./partials/header.php')
?>
<!-- content part start -->
<div class="container">

    <!-- Teacher section start  -->
    <div class="popular-course-section" >
        <div class="title-row">
            <div class="title col">
                <h2>Our Teacher</h2>
            </div>
        </div>
        <div class="course-row">
            <?php
            if (!empty($allTeacher)) {
                foreach ($allTeacher[0] as  $data) {


            ?>
                    <div class="course-col-10">
                        <div class="course-image2">
                            <img src="<?php echo $data['image']; ?>" alt="">
                        </div>
                        <div class="course-text">
                            <h2><?php echo $data['name']; ?></h2>
                        </div>

                        </a>
                    </div>
            <?php }
            } ?>
        </div>

    </div>

    <!-- Teacher section end  -->

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


    <!-- success section start -->
    <div class="success-section">
        <div class="title-row">
            <?php
            if (!empty($success)) {
                foreach ($success[0] as $value) {


            ?>
                    <div class="title col">
                        <h2><?php echo $value['title']; ?></h2>
                    </div>
                    <div class="title-text col">
                        <p><?php echo $value['description']; ?></p>
                    </div>

        </div>
        <?php } } ?>
    </div>
    <!-- success section end -->
</div>
<!-- content part end -->

<?php
require_once('./partials/footer.php')
?>