<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$digitalMarketing = $courses->getdigitalMarketing();
?>



<?php
require_once('./partials/header.php')
?>


<div class="container">
<!-- Course section start -->
    <div class="popular-course-section">
        <div class="title-row">
            <?php 
                foreach ($digitalMarketing[0] as  $data) {
                    
               
            ?>
            <div class="title col">
                <h2><?php echo $data['title']; ?></h2>
            </div>
            <div class="title-text col">
                <p><?php echo $data['description']; ?></p>
            </div>
            <?php }?>
        </div>
        <div class="course-row">
        <?php 
                foreach ($digitalMarketing[0] as  $data) {
                    
            ?>
            <div class="course-col">
                <a href="OnlinAdmission.php?id=<?php echo $data['id']; ?>">
                    <div class="course-image">
                        <img src="<?php echo $data['image']; ?>" alt="">
                    </div>
                    <div class="course-text">
                        <h3><?php echo $data['courseName']; ?></h3>
                        <!-- <span>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                            ২০০০ রিভিউস
                        </span> -->
                        <h4>CourseFee: <?php echo $data['courseFee']; ?></h4>

                    </div>

                </a>
            </div>
            <?php }?>
        </div>

    </div>
<!-- Course section end -->


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