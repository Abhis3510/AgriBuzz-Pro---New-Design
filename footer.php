  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?php echo $config['PROJECT_TITLE']; ?></h3>
            <p>
              <?php
              foreach($config['ADDRESS'] as $address){
                echo $address . "<br>";
              }
              ?>
              <br>
              <strong>Phone:</strong> <?php echo $config['PHONE'][0]; ?><br>
              <strong>Email:</strong> <?php echo $config['EMAIL'][0]; ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="displayarticles.php?articletype=Blog">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayarticles.php?articletype=News">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayproducts.php">Farmer's Kit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displaysales.php">Farmer's Market</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus.php">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="displayworkers.php">Hire</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Staff Login</h4>
            <p>This feature is Available only for Staff or Administrator</p>
            <button class="btn btn-success" type="submit" onclick="window.location='adminloginpanel.php';">Click here to Login</button>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span><?php echo $config['PROJECT_TITLE']; ?></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by 
            <?php
              $developersanddesigners = "";
              foreach($config['DEVELOPERS'] as $developers){
                $developersanddesigners .= $developers . ", ";
              }
              echo substr($developersanddesigners, 0, -2);
            ?>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php echo $config['SOCIAL_TWITTER']; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo $config['SOCIAL_FACEBOOK']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo $config['SOCIAL_INSTAGRAM']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?php echo $config['SOCIAL_SKYPE']; ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="<?php echo $config['SOCIAL_LINKEDIN']; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <link href="assets/js/dataTables.responsive.min.js" rel="stylesheet">
  
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
	
} );
</script>
</body>

</html>