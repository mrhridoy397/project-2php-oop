<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();
$Response = [];
$active = $courses->active;
$index = $courses->getCourses();
$data = $courses->getSlider();
$indexContent = $courses->getContent();
$allTeacher = $courses->OuerTeacher();
$settings = $courses->getSetting();
$success = $courses->getSuccess();
$payment = $courses->getPayment();
$SuccessStudent = $courses->getSuccessStudent();

?>



<?php
require_once('./partials/header.php')
?>
<!-- content part start -->
<div class="container">

    <div class="welcome-section">
        <div class="welcome-wrapper">
            <?php
            if (!empty($data)) {
                foreach ($data[0] as  $value) {

            ?>
                    <div class="welcome-part wel-col1">
                        <h5><i class="fa fa-hand-o-down" aria-hidden="true"></i><?php echo $settings[2]['description']; ?></h5>
                        <h2><?php echo  $value['title']; ?></h2>
                        <h1><?php echo  $value['Shortdescription']; ?></h1>
                        <p><?php echo  $value['Description']; ?></p>
                        <div class="btn-part">
                            <a href="">Enroll</a>
                            <a href="course.php">Courses</a>
                        </div>
                        <div class="certified-part">
                            <div class="col icon-col"><img src="<?php echo  $value['image']; ?>" alt=""></div>
                            <div class="col">
                                <p><?php echo  $value['logoTitle']; ?></p>
                            </div>
                        </div>
                    </div>
            <?php  }
            } ?>
            <div class="welcome-part wel-col2">
                <iframe src="<?php echo $settings[15]['description']; ?>" title="" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="important-info">
        <div class="container-info">
            <div class="title-row">
                <div class="important-heading">
                    <h2><?php echo $settings[20]['description']; ?></h2>
                </div>
            </div>
            <div class="content-row">
                <div class="important-img">
                    <div class="main-card">
                        <div class="sub-card">
                            <img src="<?php echo $settings[21]['description']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="important-content">
                    <div class="main-card">
                        <?php
                        if (!empty($indexContent)) {
                            foreach ($indexContent[0] as  $value) {

                        ?>
                                <div class="content">
                                    <ol>
                                        <li>
                                            <h3><?php echo $value['Shortdescription']; ?></h3>
                                            <p><?php echo $value['description']; ?> </p>
                                        </li>
                                    </ol>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Teacher section start  -->
    <div class="popular-course-section">
        <div class="title-row">
            <div class="title col">
                <h2><?php echo $settings[23]['description']; ?></h2>
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
                            <h3><?php echo $data['subject']; ?></h3>
                            <div class="our-social">
                                <a target="_blank" href="<?php echo $data ['link1']; ?>"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="<?php echo $data ['link2']; ?>"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="<?php echo $data ['link3']; ?>"><i class="fa fa-linkedin"></i></a>
                                <a target="_blank" href="<?php echo $data ['link4']; ?>"><i class="fa fa-twitter"></i></a>
                                <br>
                            </div>
                        </div>

                        </a>
                    </div>
            <?php }
            } ?>
        </div>

    </div>

    <!-- Teacher section end  -->

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
            if (!empty($index)) {
                foreach ($index[0] as  $data) {


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

<?php }
            } ?>

<div class="success-row">
</div>
    </div>
    <!-- success section end -->

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
<!-- content part end -->

<?php
require_once('./partials/footer.php')
?>