<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();
$Response = [];
$active = $courses->active;
$settings = $courses->getSetting();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$SuccessStudent = $courses->getSuccessStudent();

// var_dump($settings);

?>


<?php
require_once('./partials/header.php')
?>




<div class="container">
    <!--admission section code-->
    <div class="admission-main">


        <form action="" class="admission-section" method="POST" enctype="multipart/form-data">
            <div class="heading-title">
                <h1>ভর্তি ফরম</h1>
                <p>ভর্তি ফরম পূরন করা আগে আমাদের হটলাইনে ফোন করে বিস্তারিত জেনে নিন। ভর্তি ফরম পূরণের সময় অবশ্যই প্রতিটি ঘর ভালোভাবে সম্পূর্ণ করে তারপর সাবমিট করবেন। সাবমিট সঠিকমতো হলে আপনার কাছে একটি কনফার্ম মেসেজ যাবে। উক্ত মেসেজ এ আপনার রোল ও পাসওয়ার্ড থাকবে সেটা দিয়ে আপনি আমাদের সফটওয়্যারে লগইন নিতে পারবেন। অবশ্যই আমাদের ভর্তি ফরম পূরনের আগে আপনার কোর্সের নির্ধারিত কোর্স ফি আমাদের অফিসিয়াল নাম্বারে মোবাইল ব্যাংকিং এর মাধ্যমে পাঠাতে হবে। আমাদের অফিসিয়াল নাম্বার:01928248173। এই নাম্বারে রকেট,নগদ ও বিকাশ রয়েছে। যেকোনো একটি মাধ্যমে টাকা পাঠাতে পারেন। টাকা পাঠানোর পর আপনার রোল ও ট্রান্সজেকশন নাম্বার বলতে হবে। উক্ত নাম্বার ছাড়া অন্য কোনো নাম্বারে টাকা পাঠালে আমরা কোনো প্রকার দ্বায় নিবো না।</p>
            </div>

            <div class="title-row">
                <h3>ব্যাক্তিগত তথ্য(Only English)</h3>
            </div>
            <div class="row">

                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label">ছাত্র/ছাত্রীর নাম<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="student_name" value="">

                    </div>

                    <div class="mb-1">
                        <label class="form-label">পিতার নাম<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="father_name" value="">

                    </div>

                    <div class="mb-1">
                        <label class="form-label">মাতার নাম<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="mother_name" value="">

                    </div>

                    <div class="mb-1">
                        <label class="form-label">জন্ম তারিখ<small style="color:red">*</small></label>
                        <input type="date" class="form-control " name="dob" value="">

                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label">ধর্ম<small style="color:red">*</small></label>
                        <select name="religion" id="" class="form-select " value="">
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddh">Buddh</option>
                            <option value="Christian">Christian</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label class="form-label">লিঙ্গ<small style="color:red">*</small></label>
                        <select name="gender" id="" class="form-select " value="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label class="form-label">পেশা<small style="color:red">*</small></label>
                        <select name="job_title" id="job_title" class="form-select " value="">
                            <option value="Student">Student</option>
                            <option value="Government employee">Government employee</option>
                            <option value="Private employee">Private employee</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">রক্তের গ্রুপ<small style="color:red">*</small></label>
                        <select name="blood_group" id="blood_group" class="form-select " value="">

                            <option>Select Blood Group</option>
                            <option value="Null">Unknown</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="title-row">
                <h3>যোগাযোগের তথ্য(Only English)</h3>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label">মোবাইল নাম্বার<small style="color:red">*</small></label>
                        <input type="text" class="form-control " pattern="01[1|3|4|9|7|8|6|5][0-9]{8}" name="phone_number" value="">

                    </div>
                    <div class="mb-1">
                        <label class="form-label">অভিভাবকের মোবাইল নাম্বার<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="guardian_number" pattern="01[1|3|4|9|7|8|6|5][0-9]{8}" value="">

                    </div>
                    <div class="mb-1">
                        <label class="form-label">ই-মেইল<small style="color:red">*</small></label>
                        <input type="email" class="form-control " name="email" value="">

                    </div>

                    <div class="mb-1">
                        <label for="divisions" class="form-label">বিভাগ<small style="color:red">*</small></label>
                        <select name="divisions" class="form-select " id="divisions" onchange="divisionsList();">
                            <option disabled="" selected="">Select Division</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                        </select>

                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-1">
                        <label class="form-label" for="distr">জেলা<small style="color:red">*</small></label>
                        <select name="distr" id="distr" class="form-select " onchange="thanaList();"></select>

                    </div>

                    <div class="mb-1">
                        <label for="thana_print" class="form-label">থানা<small style="color:red">*</small></label>
                        <select name="thana" id="thana_print" class="form-select "></select>

                    </div>

                    <div class="mb-1">
                        <label class="form-label">পোস্ট অফিস<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="post_office" value="">

                    </div>
                    <div class="mb-1">
                        <label class="form-label">গ্রাম<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="village" value="">

                    </div>
                </div>
            </div>
            <div class="title-row">
                <h3>কোর্সের তথ্য(Only English)</h3>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-1">
                        <label for="session" class="form-label">সেশন<small style="color:red">*</small></label>
                        <select name="session" class="form-select " id="session">
                            <option disabled="" selected="">Select Session</option>
                            <option value="January-June">January-June</option>
                            <option value="January-March">January-March</option>
                            <option value="April-June">April-June</option>
                            <option value="July-December">July-December</option>
                            <option value="July-September">July-September</option>
                            <option value="October-December">October-December</option>
                            <option value="January-December">January-December</option>

                        </select>

                    </div>
                    <div class="mb-1">
                        <label for="course" class="form-label">কোর্স<small style="color:red">*</small></label>
                        <select name="course" class="form-select " id="course">
                            <option value="Computer Office Application">Computer Office Application</option>
                            <option value="Professional Graphic Design">Professional Graphic Design</option>
                            <option value="Full Stack Web Development">Full Stack Web Development</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="English Spoken">English Spoken</option>
                            <option value="Subject Wise Class">Subject Wise Class</option>
                        </select>
                    </div>

                </div>
                <div class="col-6">
                    <div class="mb-1">
                        <label for="total_fee" class="form-label">মোট ফি<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="total_fee" value="">
                    </div>
                </div>

            </div>

            <div class="ad_btn">
                <input type="submit" value="সাবমিট" class="submit_btn" name="submit">
            </div>

        </form>
    </div>
    <!--admission section code-->

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