<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$SuccessStudent = $courses->getSuccessStudent();
?>



<?php
require_once('./partials/header.php')
?>


<div class="container">
    <div class="freelancing-section">

        <div class="freelance-row">

            <div class="col">
                <h2>ফ্রিল্যান্সিং</h2>
                <p>বাংলাদেশে আইসিটি ডিভিশনের এক জরিপ থেকে দেখা গেছে, বাংলাদেশে প্রায় ৫ লাখেরও বেশি ফ্রিল্যান্সার বিভিন্ন সেক্টরে কাজ করছেন। স্বাধীনভাবে কাজ করে স্বাবলম্বী হতে ট্রেন্ডি পেশা হিসেবে সবাই ফ্রিল্যান্সিং-কে বেছে নিচ্ছে। এভাবেই বিশ্বজুড়ে প্রায় ১ বিলিয়নেরও বেশি মানুষ ফ্রিল্যান্সিং করছেন। বেশিরভাগ ফ্রিল্যান্সারের গড় মাসিক আয় প্রায় ৪০ হাজারেরও বেশি। ফ্রিল্যান্সিং-এ ক্যারিয়ার গড়তে চাচ্ছেন? ফ্রিল্যান্সার হিসেবে গড়ে তুলতে ফিউচার কম্পিউটার ট্রেনিং ইনস্টিটিউট ২০টিরও বেশি সেক্টরে মানুষকে দক্ষ করে তুলছে।</p>
                <div class="video-part">
                    <iframe src="" title="" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </div>

            </div>
            <div class="col">
                <h2>ফ্রিল্যান্সিং মার্কেপ্লেস</h2>
                <p>ফ্রিল্যান্স কাজের জন্য রয়েছে বিভিন্ন মার্কেটপ্লেস। আন্তর্জাতিক এসব মার্কেটপ্লেসের প্রত্যেকটি ভিন্ন ভিন্ন নিয়ম মেনে চললেও কাজের সুবিধা রয়েছে সবখানেই।</p>
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
            <div class="col">
                <a href="graphics_multimedia">
                    <div class="course-icon"><img src="assets/img/freelancing-icon1.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>গৃহিণী</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="course-icon"><img src="assets/img/freelancing-icon2.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>চাকুরী প্রত্যাশী ও চাকুজীবি</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="course-icon"><img src="assets/img/freelancing-icon3.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>ছাত্র-ছাত্রী</h3>
                    </div>
                </a>

            </div>
            <div class="col">
                <a href="">
                    <div class="course-icon"><img src="assets/img/freelancing-icon4.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>প্রবাসী </h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="course-icon"><img src="assets/img/freelancing-icon5.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>উদ্যোক্তা </h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="course-icon"><img src="assets/img/freelancing-icon6.png" alt=""></div>
                    <div class="free-cate-text">
                        <h3>ফ্রিল্যান্সিং এ আগ্রহী </h3>
                    </div>
                </a>
            </div>
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