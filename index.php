<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();
$Response = [];
$active = $courses->active;
$index = $courses->getCourses();
$data = $courses->getSlider();
$indexContent = $courses->getContent();
$settings = $courses->getSetting();
$success = $courses->getSuccess();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$SuccessStudent = $courses->getSuccessStudent();
// var_dump($settings);

?>



<?php
require_once('./partials/header.php')
?>
    <!-- content part start -->
    <div class="container">

        <div class="welcome-section">
            <div class="welcome-wrapper">
                <?php
                 if(!empty($data)){
                foreach ($data[0] as  $value) {
                    
                ?>
                <div class="welcome-part wel-col1">
                    <h5><i class="fa fa-hand-o-down" aria-hidden="true"></i><?php echo $settings[2]['description']; ?></h5>
                    <h2><?php echo  $value['title']; ?></h2>
                    <h1><?php echo  $value['Shortdescription']; ?></h1>
                    <p><?php echo  $value['Description']; ?></p>
                    <div class="btn-part">
                        <a href=""><?php echo  $value['btnOne']; ?></a>
                        <a href=""><?php echo  $value['btnTwo']; ?></a>
                    </div>
                    <div class="certified-part">
                        <div class="col icon-col"><img src="<?php echo  $value['image']; ?>" alt=""></div>
                        <div class="col">
                            <p><?php echo  $value['logoTitle']; ?></p>
                        </div>
                    </div>
                </div>
                <?php  } }?>
                <div class="welcome-part wel-col2">
                    <iframe src="<?php echo $settings[15]['description']; ?>" title="" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="important-info">
            <div class="container-info">
            <?php
             if(!empty($indexContent)){
                foreach ($indexContent[0] as  $value) {
                    
                ?>
                <div class="title-row">
                    <div class="important-heading">
                        <h2><?php echo $value['title'];?></h2>
                    </div>
                </div>
                <div class="content-row">
                    <div class="important-img">
                        <div class="main-card">
                            <div class="sub-card">
                                <img src="<?php echo $value['image'];?>" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="important-content">
                        <div class="main-card">
                            <div class="content">
                                <ol>
                                    <li>
                                        <h3><?php echo $value['Shortdescription'];?></h3>
                                        <p><?php echo $value['description'];?> </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>
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
                if(!empty($index)){
                foreach ($index[0] as  $data) {
                    
                
                ?>
                <div class="course-col">
                    <a href="OnlinAdmission.php?id=<?php echo $data['id']; ?>">
                        <div class="course-image">
                            <img src="<?php echo $data['image']; ?>" alt="">
                        </div>
                        <div class="course-text">
                            <h3><?php echo $data['courseName'];?></h3>
                            <!-- <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                2000 reviews
                            </span> -->
                            <h4>Course fee <?php echo $data['coursefee'];?></h4>
                        </div>

                    </a>
                </div>
                <?php }}?>
            </div>

        </div>

        <!-- Course section end  -->

  <!-- counter section start -->
  <div class="counter-section">
                  
            <div class="counter-row">
                  <?php 
                    if(!empty($SuccessStudent)){
                        foreach ($SuccessStudent[0] as $data) {
                    ?>
                <div class="col">
                    <h4><?php echo $data['student']; ?>+</h4>
                    <p><?php echo $data['title']; ?></p>
                </div>
                <?php  } }?>
            </div>
            
        </div>
         <!-- counter section end -->

         
         <!-- success section start -->
        <div class="success-section">
        <div class="title-row">
            <?php 
            if(!empty($success)){
                foreach ($success[0] as $value) {
                   
                
            ?>
            <div class="title col">
                <h2><?php echo $value['title']; ?></h2>
            </div>
            <div class="title-text col">
                <p><?php echo $value['description']; ?></p>
            </div>

        </div>

        <?php } }?>

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
                    if(!empty($payment)){
                    foreach ($payment[0] as  $value) {
                        
                    ?>
                <div class="col">
                    <img src="<?php echo $value['image']; ?>" alt="">
                    <a href="tel:<?php echo $value['paymentNumber']; ?>"><?php echo $value['paymentNumber']; ?></a>
                </div>
                <?php  } }?>
            </div>
            
        </div>
         <!-- payment section end -->
    </div>
    <!-- content part end -->

<?php
require_once('./partials/footer.php')
?>