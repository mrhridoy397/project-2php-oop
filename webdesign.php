<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();

$settings = $courses->getSetting();
$payment = $courses->getPayment();
?>



<?php
require_once('./partials/header.php')
?>




<div class="container">

    <div class="course-details-section">
        <div class="course-details-wrapper">
            <div class="course-part wel-col1">
                <h1>ওয়েব-ডিজাইন</h1>
                <p>বিশ্বব্যাপী প্রতি মুহূর্তে তৈরি হচ্ছে হাজার হাজার ওয়েবসাইট। শখের কাজ কিংবা পরিপূর্ণ ব্যবসা সব ধরণের কাজের পরিচয় বহন করে ওয়েবসাইট। এজন্যই ডিজিটাল প্ল্যাটফর্মে ক্যারিয়ার হিসেবে ওয়েব ডিজাইনারের বেশ চাহিদা রয়েছে। তাই আপনি যদি ওয়েব ডিজাইনার হিসেবে ক্যারিয়ার গড়তে চান, তাহলে আপনার জন্যই আমাদের Web Design Course.</p>
                <div class="btn-part">
                </div>
            </div>
        </div>
    </div>
    <div class="course-price-outline-section">
        <div class="course-price-row">
            <div class="col">
                <h2>কোর্স কারিকুলাম</h2>
                <div class="list-row">
                    <div class="list-col">
                        <ul>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>HTML</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>CSS</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>SASS CSS</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>DESIGN TO HTML</li>

                        </ul>
                    </div>
                    <div class="list-col">
                        <ul>

                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>BOOSTRAP</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>JAVASCRIPT</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>JQUERY</li>
                            <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>MARKETPLACE CLASSES</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="facility-job-section">
        <div class="row">
            <div class="col when-faciliy">
                <h2>আমাদের কোর্সের কিছু সুবিধা</h2>
                <div class="in-row">
                    <div class="in-col">
                        <h3>লাইভটাইম সাপোর্ট</h3>
                        <p>ট্রেনিং শেষ হলেও আপনার সঙ্গে আমাদের সম্পর্ক কিন্তু শেষ না। ফিউচার কম্পিউটার ট্রেনিং ইনস্টিটিউট এর শিক্ষার্থী হিসেবে আপনি পাচ্ছেন লাইফ-টাইম সাপোর্ট। অনলাইনে ২৪/৭ সাপোর্ট পাচ্ছেন যেকোনো সময়। আমাদের বিষয় ভিত্তিক অভিজ্ঞ মেন্টর আপনাকে এই সাপোর্ট নিশ্চিত করবে</p>
                    </div>
                    <div class="in-col">
                        <h3>ক্লাস ভিডিও</h3>
                        <p>প্রতিটি কোর্সের ক্লাস ভিডিও দেওয়া হয়। ছাত্র ছাত্রীরা যাতে বাসায় বসে ভিডিও দেখে দেখে কাজ ভালোভাবে শিখতে পারে সেই জন্য ক্লাস শেষে সাথে সাথে ভিডিও দেওয়া হয় ।</p>
                    </div>
                    <div class="in-col">
                        <h3>ইন্টার্নশিপ</h3>
                        <p>
                            কোর্স শেষে দুই মাস ইন্টার্নশীপ এর ব্যবস্থা রয়েছে। যাতে আমাদের ছাত্র-ছাত্রীরা বাস্তবমুখী কাজ সম্পর্কে অবগত হয়।
                        </p>
                    </div>
                    <div class="in-col">
                        <h3>ক্যারিয়ার প্লেসমেন্ট</h3>
                        <p>শিক্ষার্থীদের যোগ্যতা অনুযায়ী সঠিক জায়গায় CV পৌছাতে কাজ করে থাকে ফিউচার কম্পিউটার। এখান থেকে আপনি পাবেন কোর্স পরবর্তী গ্রুমিং এবং ক্যারিয়ার গাইডলাইন বিষয়ক বিভিন্ন সেমিনার। যা ক্যারিয়ার দৌড়ে অন্য যে কারও থেকে আপনাকে এগিয়ে রাখবে অনেকখানি।</p>
                    </div>
                </div>
            </div>
            <div class="col when-job">
                <h2>আপনি যেখানে জব করতে পারবেন।</h2>
                <div class="in-row">
                    <div class="in-col">
                        <h3>দেশের কোম্পানিতে জব</h3>
                        <p>আপনি যদি ভালোভাবে দক্ষ হতে পারেন দেশের ভিতরে অনেক জব রয়েছে যেটা আপনি করতে পারবেন</p>
                    </div>
                    <div class="in-col">
                        <h3>বিদেশে রিমোটলি জব</h3>
                        <p>বিদেশের অনেক কোম্পানি রিমোটলি কর্ম খুজে থাকে । তাই আপনি একজন ভালো ওয়েব-ডিজাইনার হলে এই জব আপনি করতে পারবেন </p>
                    </div>
                    <div class="in-col">
                        <h3>মার্কেটপ্লেসে জব</h3>
                        <p>বর্তমানে ফ্রিল্যান্স মার্কেটপ্লেসে প্রচুর জব পাওয়া যায়। তাই আপনিও ফ্রিল্যান্সিং করে হতে পারেন সফল ফ্রিল্যান্সার।</p>
                    </div>
                    <div class="in-col">
                        <h3>উদ্যোক্তা </h3>
                        <p>আপনি ভালোভাবে কাজ শিখে একজন সফল উদ্যোক্তা হতে পারেন। আপনার স্কিল ও আইডিয়াকে এক করে কাজ শুরু করলে অনেকটা সফল হওয়া যায়। </p>
                    </div>
                </div>
            </div>
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