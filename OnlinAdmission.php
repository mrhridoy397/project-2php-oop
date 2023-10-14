<?php require_once('./controller/CMSConroller.php'); ?>
<?php
$courses = new CMSController();
$Response = [];
$active = $courses->active;
$settings = $courses->getSetting();
$payment = $courses->getPayment();
$CourseSelect = $courses->getCourseSelect();
$SuccessStudent = $courses->getSuccessStudent();
//  AllCourse index Page 
$selectCourse = $courses->selectCourses($_REQUEST['id']);
$allCourse = $courses->AllCourses();
//  AllCourse basictrade Page 
$selectCourse = $courses->selectCoursesbasictrade($_REQUEST['id']);
$allCourse = $courses->AllCoursesbasictrade();
//  AllCourse digitalmarketing Page 
$selectCourse = $courses->selectCoursesdigitalmarketing($_REQUEST['id']);
$allCourse = $courses->AllCoursesdigitalmarketing();
//  AllCourse graphicscourse Page 
$selectCourse = $courses->selectCoursesgraphicscourse($_REQUEST['id']);
$allCourse = $courses->AllCoursesgraphicscourse();
//  AllCourse websoftware Page 
$selectCourse = $courses->selectCourseswebsoftware($_REQUEST['id']);
$allCourse = $courses->AllCourseswebsoftware();
// if (isset($_REQUEST) && count($_REQUEST) > 1) $Response = $courses->createAdmission($_REQUEST);


?>


<?php
require_once('./partials/header.php')
?>




<div class="container">
    <!--admission section code-->
    <div class="admission-main">
    <form method="POST" class="admission-section" id="admission_frm">
            <div class="row">
                <div class="col-6">
                    <div class="title-row">
                        <h3>Online Admission Form</h3>
                    </div>
                    <div class="mb-1">
                        <label for="sname" class="form-label">Student Name<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="sname" id="sname">
                    </div>

                    <div class="mb-1">
                        <label for="phone" class="form-label">Student Phone Number<small style="color:red">*</small></label>
                        <input type="text" class="form-control " name="phone" id="phone">
                    </div>
                    <div class="mb-1">
                        <label form="email" class="form-label">Student Email<small style="color:red">*</small></label>
                        <input type="email" class="form-control " name="email" id="email">
                    </div>
                    <div class="mb-1">
                        <label for="courseId" class="form-label">Course Name <small style="color:red">*</small></label>
                        <select name="courseId" id="courseId" class="form-select " >
                            <option value="1">``Select Course``</option>
                            <?php 
                                    foreach ($allCourse as  $value) {
                                       ?>
                                        <option value="<?php echo  $value['id']; ?>"<?php if($value['id'] == $selectCourse[0]['id']){echo "selected";}?>><?php echo  $value['courseName']; ?></option>
                                       <?php
                                    }
                                    
                                    ?>
                        </select>
                    </div>
                    <div class="mb-1">
                        <label for="type" class="form-label">Course Type<small style="color:red">*</small></label>
                        <select name="type" id="type" class="form-select " value="">
                            <option value="1">Onlin</option>
                            <option value="2">Offline</option>
                        </select>
                    </div>
                    <div class="ad_btn">
                        <input type="submit" value="Submit" class="submit_btn" id="admission">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--admission section code-->

    <!-- courseCategory start -->
    <div class="course-category">

        <div class="category-row">
            <?php
            if (!empty($CourseSelect)) {
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
            <?php }
            } ?>
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

<script>
			  $(document).ready(function(e) {
            $("#admission_frm").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: './admissionApi.php',
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(result) {
                        var result = JSON.parse(result);
                        if (result.statusCode == 200) {
                            Swal.fire({
                                position: 'bottom-end',
                                icon: 'success',
                                title: result.Msg,
                                showConfirmButton: false,
                                timer: 3000
                            });
                            $('#admission').removeAttr('disabled');
                            $('#admission').text('Enroll');
                            setTimeout(() => {
                                location.reload();
                            }, 3000);

                        }
                        console.log(result);
                    }
                });
            }));
        });
		</script>

<?php
require_once('./partials/footer.php')
?>