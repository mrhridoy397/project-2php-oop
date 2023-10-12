<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
$SuccessStudent = $courses->getSuccessStudent();
?>



<?php
require_once('./partials/header.php')
?>



<div class="container">
    <div class="about-section">
        <div class="about-title-row">
            <div class="title col">
                <h2>আমাদের সম্পর্কে</h2>
            </div>
            <div class="title-text col">
                <p>ফিউচার কম্পিউটার ট্রেনিং ইনস্টিটিউট, আইটিতে সাফল্য সৃষ্টির লক্ষ্যে প্রতিষ্ঠিত একটি বিশ্বস্ত ব্র্যান্ড প্রতিষ্ঠান। আমারা বাংলাদেশ কারিগরি বোর্ড থেকে অনুমোদন পাওয়ার পর থেকে এই পর্যন্ত সফলভাবে তৈরি করেছি হাজারো সফল আইটি এক্সপার্ট ও ফ্রিল্যান্সার। আমরা বাংলাদেশের বেকারত্ব মুক্তিতে অনেক অবদান রেখেছি। বাংলাদেশের অন্যতম এই আইটি প্রতিষ্ঠানটি ২০১৭ সাল থেকে সফলতার সাথে বিভিন্ন আইটি কোর্সের ট্রেনিং দিয়ে আসতেছে। </p>
            </div>

        </div>
        <div class="about-row">
            <div class="col">
                <h5>সাফল্যের ৭ বছর</h5>
                <h2>বাংলাদেশে ফ্রিল্যান্সার তৈরির এক বিশ্বস্ত্ব আইটি প্রতিষ্ঠান ও মাদারীপুর জেলার এক নাম্বার প্রতিষ্ঠান।</h2>
                <p>বর্তমান আধুনিক যুগের সাথে তাল মিলাতে গেলে আইটি শিক্ষার গুরুত্ব অপরিসীম। তাই ফিউচার কম্পিউটার ট্রেনিং ইনস্টিটিউট আপনাদের আইটি জ্ঞানকে বৃদ্ধি করতে আপনাদের পাশে আছে। আমরা দীর্ঘ ৬ বছর তৈরি করেছি ১০০০০ এর বেশি আইটি এক্সপার্ট। আমাদের অভিজ্ঞ মেন্টর দ্বারা শত শত ফ্রিল্যান্সার প্রতি বছরে তৈরি হচ্ছে। এছাড়া আমরা তৈরি করছি সফল আইটি উদ্যোক্তা। যারা নিজেরাও অনেক কর্মসংস্থান তৈরি করছে। আজই আপনিও চলে আসুন আপনার আগ্রহ ও ইচ্ছা শক্তি নিয়ে । </p>
                <div class="btn-part">
                    <a href="online_admission_form">ভর্তি হোন</a>
                    <a href="free_seminar">ফ্রি-সেমিনার</a>
                </div>

            </div>
            <div class="col">
                <img src="images/institute-photo.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="certified-section">

        <div class="certified-row">
            <div class="certified-col">
                <img src="images/bteb_certified.jpg" alt="">
            </div>
            <div class="certified-col">
                <h2>দেশের অন্যতম একটি সুনাধন্য প্রতিষ্ঠান ও মাদারীপুর জেলার একমাত্র বিশ্বস্ত্ব অথেনটিক প্রতিষ্ঠান</h2>
                <p>ফিউচার কম্পিউটার ট্রেনিং ইনস্টিটিউট বাংলাদেশ কারিগরি শিক্ষা বোর্ড কর্তৃক অনুমোদিত ও মাদারীপুর জেলার একমাত্র আদর্শ ফ্রিল্যান্সিং প্রতিষ্ঠান। আমাদের প্রতিষ্ঠান কোড: ৪৪০৪৭। মাদারীপুর জেলায় সর্বপ্রথম আমরাই প্রতিষ্ঠানিকভাবে ফ্রিল্যান্সিং কোর্সগুলো চালু করি। আলহামদুল্লিলাহ সফলতার সাথে দীর্ঘ ৬ থেকে ৭ বছর আমরা ফ্রিল্যান্সিংসহ বিভিন্ন আইটি কোর্স করিয়ে আসতেছি। আপনি যদি আইটি বিষয় আগ্রহী হোন তাহলে আজই আমাদের প্রতিষ্ঠানে আপনার পছন্দের কোর্স শুরু করুন। আমরা আপনাকে দিবো ইনশাল্লাহ একটি মানসম্মত শিক্ষা ।</p>
                <br>
                <br>

                <h2>আমাদের মিশন ও ভিশন</h2>
                <p>বাংলাদেশে কারিশিক্ষাকে আরো আধুনিক ও মানসম্মত করে আমারা দেশকে এগিয়ে নিয়ে যাবো। আমরা বাংলাদেশকে আইটি শিক্ষার মাধ্যমে আগামী ২০৪০ সালের মধ্যে একটি বেকারমুক্ত দেশ গড়ার সংকল্প করি । আমাদের মূল মিশন হলো যুবকদের আইটি শিক্ষার মাধ্যমে স্বাবলম্ভী করে গড়ে তলা । আমাদের ভিশন ২০৪০ সালের মধ্যে মাদারীপুর জেলাসহ আশেপাশের জেলাকে আইটি শিক্ষার উপর দক্ষ করে তোলা। </p>
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