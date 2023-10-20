<?php require_once('./controller/CourseController.php'); ?>
<?php
$course = new Course();
$Response = [];
$active = $course->active;
$data = $course->edit($_REQUEST['id']);
$batch = $course->batch();
if (isset($_REQUEST['submit']) && count($_REQUEST) > 1) $Response = $course->Update($_REQUEST, $_FILES);
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once('./partials/meta.php');
    ?>
    <title><?php echo ucfirst($active); ?> - Educafe</title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once('./partials/sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <div id="content">

                <!-- Topbar -->
                <?php
                include_once('./partials/header.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit <?php echo $active; ?></h1>
                        <a href="CourseIndex.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-users-cog fa-sm text-white-50"></i> All <?php echo $active; ?></a>
                    </div>
                    <?php if (isset($Response['status']) && !$Response['status']) : ?>
                        <br>
                        <div class="alert alert-danger" role="alert">
                            <span><B>Oops!</B> Some errors occurred in your form.</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true" class="text-danger">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit <?php echo $active; ?></h6>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-signin" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <div class="form-group">
                                        <label for="batchId">Assign Batch</label>
                                        <select name="batchId" id="batchId" class="form-control">
                                            <option value="">~~Select batch~~</option>
                                            <?php
                                            foreach ($batch as  $items) {

                                            ?>
                                                <option value="<?php echo $items['id']; ?>" <?php if ($data['batchId'] ==  $items['id']) {echo "selected"; } ?>><?php echo $items['bname'] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="courseName"> Course Name <sup class="text-danger">*</sup></label>
                                            <input  type="text" name="courseName" id="courseName" class="form-control" placeholder=" Course Name" value="<?php if(isset($_REQUEST['courseName']))  { echo $__REQUEST['courseName'];} else{echo $data['courseName'];}?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="courseDuration">Course Duration</label>
                                            <select name="courseDuration" id="courseDuration" class="form-control">
                                                <option value="">~~Select~~</option>
                                                <option value="1" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "1") { echo "selected";} elseif($data['courseDuration'] == 1){ echo "selected";} ?>>1 Month</option>
                                                <option value="2" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "2") { echo "selected";} elseif($data['courseDuration'] == 2){ echo "selected";} ?>>2 Months</option>
                                                <option value="3" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "3") { echo "selected";} elseif($data['courseDuration'] == 3){ echo "selected";} ?>>3 Months</option>
                                                <option value="4" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "4") { echo "selected";} elseif($data['courseDuration'] == 4){ echo "selected";} ?>>4 Months</option>
                                                <option value="5" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "5") { echo "selected";} elseif($data['courseDuration'] == 5){ echo "selected";} ?>>5 Months</option>
                                                <option value="6" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "6") { echo "selected";} elseif($data['courseDuration'] == 6){ echo "selected";} ?>>6 Months</option>
                                                <option value="8" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "8") { echo "selected";} elseif($data['courseDuration'] == 8){ echo "selected";} ?>>8 Months</option>
                                                <option value="10" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "10") { echo "selected";} elseif($data['courseDuration'] == 10){ echo "selected";} ?>>10 Months</option>
                                                <option value="12" <?php if (isset($_REQUEST['courseDuration']) && $_REQUEST['courseDuration'] == "12") { echo "selected";} elseif($data['courseDuration'] == 12){ echo "selected";} ?>>12 Months</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="coursefee"> Course Fee <sup class="text-danger">*</sup></label>
                                            <input  type="text" name="coursefee" id="coursefee" class="form-control" placeholder=" Course Fee" value="<?php if(isset($_REQUEST['coursefee']))  { echo $__REQUEST['coursefee'];} else{echo $data['coursefee'];} ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="Discount"> Discount </label>
                                            <input  type="text" name="Discount" id="Discount" class="form-control" placeholder=" Discount" value="<?php if(isset($_REQUEST['Discount']))  { echo $__REQUEST['Discount'];} else{echo $data['Discount'];} ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="classSize"> Room Size </label>
                                            <input  type="text" name="classSize" id="classSize" class="form-control" placeholder=" classSize" value="<?php if(isset($_REQUEST['classSize']))  { echo $__REQUEST['classSize'];} else{echo $data['classSize'];} ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="courseReviews"> Course Reviews </label>
                                            <input  type="text" name="courseReviews" id="courseReviews" class="form-control" placeholder=" Course Reviews" value="<?php if(isset($_REQUEST['courseReviews']))  { echo $__REQUEST['courseReviews'];} else{echo $data['courseReviews'];} ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="courseAbout"> About of Course</label>
                                          <textarea class="form-control" name="courseAbout" id="courseAbout" Rows="10" class="form-control"><?php if(isset($_REQUEST['courseAbout']))  { echo $__REQUEST['courseAbout'];} else{echo $data['courseAbout'];} ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="courseDetails">Course Details</label>
                                          <textarea class="form-control" name="courseDetails" id="courseDetails" Rows="10" class="form-control"><?php if(isset($_REQUEST['courseDetails']))  { echo $__REQUEST['courseDetails'];} else{echo $data['courseDetails'];} ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="isFeatured">Is Home page</label>
                                            <select name="isFeatured" id="isFeatured" class="form-control">
                                                <option value="">~~Select~~</option>
                                                <option value="1" <?php if (isset($_REQUEST['isFeatured']) && $_REQUEST['isFeatured'] == 1) { echo "selected";} elseif($data['isFeatured'] == 1){echo "selected";} ?>>Yes</option>
                                                <option value="0" <?php if (isset($_REQUEST['isFeatured']) && $_REQUEST['isFeatured'] == 0) { echo "selected";} elseif($data['isFeatured'] == 0){echo "selected";} ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Is Active</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="">~~Select~~</option>
                                                <option value="1" <?php if (isset($_REQUEST['status']) && $_REQUEST['status'] == 1) { echo "selected";} elseif($data['status'] == 1){echo "selected";} ?>>Active </option>
                                                <option value="0" <?php if (isset($_REQUEST['status']) && $_REQUEST['status'] == 0) { echo "selected";} elseif($data['status'] == 0){echo "selected";} ?>>Deactive</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="../<?php echo $data['image'] ?>" class="img-fluid"></div>
                                            </div>
                                            <div class="col-8">
                                        <div class="form-group">
                                        <label for="image"> Featured Image</label>
                                            <input  type="file" name="image" id="image" class="form-control" placeholder=" image">
                                            <input type="hidden" value="<?php echo $data['image'] ?>" name="oldImage">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="form-group text-center mt-5">
                                            <button class="btn btn-primary" type="submit" name="submit">Update</button>
                                            <a href="./CourseIndex.php" class="btn btn-danger">Cancle</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include_once('./partials/footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="./logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once('./partials/script.php');
    ?>

<script src="./assets/vendor/ckeditor_4.22.1_full/ckeditor/ckeditor.js"></script>
    <script>  
        CKEDITOR.replace( 'courseAbout' );
        CKEDITOR.replace( 'courseDetails' );
     </script>

</body>

</html>