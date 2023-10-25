<!--footer section start-->
<section class="footer-main">
    <div class="footer-top">
        <div class="address-logo">
            <h1><?php echo $settings[0]['description']; ?><span></span></h1>
            <p><?php echo $settings[5]['description']; ?></p>
            <p> <?php echo $settings[6]['description']; ?></p>
            <br>
            <a href="tel:<?php echo $settings[4]['description']; ?>"><label for="">Mobile:</label> <?php echo $settings[4]['description']; ?></a><br>
            <a href="mailto:<?php echo $settings[3]['description']; ?>"><label for="">Email:</label> <?php echo $settings[3]['description']; ?></a>
        </div>
        <div class="useful-links">
            <h3>Important links</h3>
            <ul>
                <li><i class="fa fa-angle-right"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="about.php">About us</a></li>
                <li><i class="fa fa-angle-right"></i><a href="contact.php">Contact</a></li>
                <li><i class="fa fa-angle-right"></i><a target="blank" href="">Student Login</a></li>
                <li><i class="fa fa-angle-right"></i><a target="blank" href="">View the results</a></li>
            </ul>
        </div>
        <div class="our-menu">
            <h3>Menu</h3>
            <ul>
                <li><i class="fa fa-angle-right"></i><a href="OurCourseDetails.php">OurCourseDetails</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Web-Development</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Graphics Design</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Digital Marketing</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Video editing</a></li>
                <li><i class="fa fa-angle-right"></i><a href="">Office applications</a></li>
            </ul>
        </div>
        <div class="our-social">
            <h3>Our social links</h3>
            <p>Stay with us by clicking on the social link.<br /> We are ready to support you.<br /> You can follow us.</p>
            <a target="_blank" href="<?php echo $settings[10]['description']; ?>"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="<?php echo $settings[12]['description']; ?>"><i class="fa fa-youtube"></i></a>
            <a target="_blank" href="<?php echo $settings[13]['description']; ?>"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="<?php echo $settings[14]['description']; ?>"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="<?php echo $settings[11]['description']; ?>"><i class="fa fa-twitter"></i></a>
            <br>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright">
            <p><?php echo $settings[7]['description']; ?></p>
        </div>
    </div>

    <button id="scrollTopBtn"><i class="fa fa-arrow-up"></i></button>


</section>


<!-- Bootstrap v4.5.3 -->
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<!--footer section end-->
<script src="assets/js/js_script.js"></script>
</body>

</html>