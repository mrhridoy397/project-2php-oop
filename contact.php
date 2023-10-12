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


    <!-- contact content start -->
    <div class="contact-content-form">
        <div class="title-row">


        </div>
        <div class="contact-content-form-container">
            <div class="contact-content-form-row">
                <div class="main-card-contact-part">
                    <div class="sub-card-content">
                        <div class="sub-content">
                            <div class="sub-contact-details">
                                <h2>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Contact details</font>
                                    </font>
                                </h2>
                                <ol>
                                    <li><a href="https://goo.gl/maps/vZfV4t8PvAoXD3Fc9" target="blank"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><?php echo $settings[5]['description']; ?></font>
                                                <font style="vertical-align: inherit;"><?php echo $settings[6]['description']; ?></font>
                                            </font>
                                        </a></li>
                                    <li><a href="tel:<?php echo $settings[4]['description']; ?>" target="blank"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $settings[4]['description']; ?></a></li>
                                    <li><a href="mailto:<?php echo $settings[3]['description']; ?>" target="blank"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $settings[3]['description']; ?></a></li>
                                    <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $settings[17]['description']; ?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="sub-card-form">
                        <div class="contact-form-box">
                            <label style="color:#e91e63;padding:0px 15px;"></label>
                            <label style="color:#000000;padding:0px 15px;"></label>

                            <form method="post" id="massage_frm" class="form-signin">
                                <div class="form-in-main">
                                    <div class="input-form-group">
                                        <div class="input-in-form">
                                            <div class="input-field-01">
                                                <label for="name"></label>
                                                <input type="text"id="name" name="name" placeholder="Name Here" >
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                            <div class="input-field-01">
                                            <label for="mobile"></label>
                                                <input type="tel" id="mobile"  name="mobile" placeholder="Phone Number Here">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-form-group">
                                        <div class="input-in-form">
                                            <div class="input-field-01">
                                                <input type="email" class="" id="email" name="email"  placeholder="Enter your email">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                            <div class="input-field-01">
                                                <label for="subject"></label>
                                                <input type="text" id="subject"  name="subject" placeholder="Enter your topic">
                                                <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="input-textarea-part">
                                        <textarea cols="80" rows="6" class="textarea-field " name="message" id="message"  placeholder="Write something......."></textarea>
                                    </div>
                                    <div class="send-message-btn">
                                        <input class="submit-btn" type="submit" value="Send message" id="massageSubmit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function(e) {
            $("#massage_frm").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: './contactApi.php',
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
                            $('#massageSubmit').removeAttr('disabled');
                            $('#massageSubmit').text('Enroll');
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


    <!-- contact content end -->

    <!-- map section start -->
    <div class="contact-page-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.8527949179897!2d91.09686537594216!3d22.659276429786615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754ada0336c820b%3A0xf0dc344e5222f6c5!2zQ2FudmFzIElDVCBJbnN0aXR1dGUg4KaV4KeN4Kav4Ka-4Kao4Kat4Ka-4Ka4IOCmhuCmh-CmuOCmv-Cmn-CmvyDgpofgpqjgprjgp43gpp_gpr_gpp_gpr_gpongpp8!5e0!3m2!1sen!2sbd!4v1682856690121!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

    <!-- map section end -->




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