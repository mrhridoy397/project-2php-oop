<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$SuccessStudent = $courses->getSuccessStudent();
$ImagFree = $courses->freelanchingImage();
$ContentFree = $courses->freelancingcontent();
?>



<?php
require_once('./partials/header.php')
?>


<div class="container">
    <div class="freelancing-section">

        <div class="freelance-row">
        <?php 
           if(!empty($ContentFree)){
           foreach ($ContentFree[0] as  $value) {
               
           
           ?>
            <div class="col">
                <h2><?php echo $value['title'] ?></h2>
                <p><?php echo $value['Description'] ?></p>

            </div>
            <div class="col">
                <?php }}?>
                <div class="market-logo-row">
                    <div class="logo-col"><img src="assets/img/marketplace1.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace2.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace3.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace4.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace5.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace6.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace7.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace8.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace9.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace10.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace11.png" alt=""></div>
                    <div class="logo-col"><img src="assets/img/marketplace12.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

  <!-- courseCategory start -->
  <div class="course-category">
           
           <div class="category-row">
           <?php 
           if(!empty($CourseSelect)){
           foreach ($CourseSelect[0] as  $value) {
               
           
           ?>
               <div class="col">
                   <a href="<?php echo $value['buttonLink']; ?>">
                       <div class="course-icon"><img src="<?php echo $value['image']; ?>" alt=""></div>
                       <div class="course-cate-text">
                           <h3><?php echo $value['courseName']; ?></h3>
                       </div>
                   </a>
               </div>
               <?php }}?>
           </div>
           
       </div>
       <!-- courseCategory end -->


    <div class="free-part-section">
        <div class="title-row">
            <div class="col">
                <h2>ফ্রিল্যান্সিং যাদের জন্য</h2>
            </div>
        </div>
        <div class="free-part-row">
            <?php 
             if(!empty($ImagFree)){
                foreach ($ImagFree[0] as  $value) {
                    
            ?>
            <div class="col">
                <a href="graphics_multimedia">
                    <div class="course-icon"><img src="<?php echo $value['image']; ?>" alt=""></div>
                    <div class="free-cate-text">
                        <h3><?php echo $value['ShortTitle']; ?></h3>
                    </div>
                </a>
            </div>
            <?php }}?>
        </div>
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