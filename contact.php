<?php
include("header.php");
if(isset($_POST['submit']))
{
	$to =  $config['ENQUIRY_MAIL'];
	$subject = "Message from " . $config['PROJECT_TITLE'];		
	$message = "<html>
	<head>
	<title>" . $config['PROJECT_TITLE'] . " Contact Us form</title>
	</head>
	<body>
	<p>" . $config['PROJECT_TITLE'] . " Contact Us form</p>
	<table>
	<tr>
	<th>Name</th>
	<td>$_POST[name]</td>
	</tr>
	<tr>    
	<th>Email ID</th>
	<td>$_POST[email]</td>
	</tr>
	<tr>
	<th>Contact Number</th>
	<td>$_POST[contctno]</td>
	</tr>
	<tr>
	<th>Subject</th>
	<td>$_POST[subject]</td>
	</tr>
	<tr>
	<th>Message</th>
	<td>$_POST[message]</td>
	</tr>
	</table>
	</body>
	</html>";
	echo "<script>alert('Thank You For Dropping A Mail!! We will Get Back To You Soon..');</script>";
	//sendemailmsg($to,$subject,$message);
	include("phpmailer.php");
	sendmail($to, $config['PROJECT_TITLE'], $subject, $message);
	echo "<script>window.location='contact.php';</script>";
}
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US...</h2>
          <ol>
            <li>Happy to help..</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	

 
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
            <h3>We'd Love To Hear From You!!!</h3>
            <p> Please use the contact form on the right side if you have any questions or requests, concerning our services. <br>We will respond to your message within 24 hours.</p>
      
            <a href="<?php echo $config['SOCIAL_TWITTER']; ?>" class="twitter cta-btn "><i class="bx bxl-twitter"></i></a>
            <a href="<?php echo $config['SOCIAL_FACEBOOK']; ?>" class="facebook cta-btn"><i class="bx bxl-facebook"></i></a>
            <a href="<?php echo $config['SOCIAL_INSTAGRAM']; ?>" class="instagram cta-btn"><i class="bx bxl-instagram"></i></a>
            <a href="<?php echo $config['SOCIAL_SKYPE']; ?>" class="google-plus cta-btn"><i class="bx bxl-skype"></i></a>
            <a href="<?php echo $config['SOCIAL_LINKEDIN']; ?>" class="linkedin cta-btn"><i class="bx bxl-linkedin"></i></a>

        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <iframe src="<?php echo $config['LOCATION_MAP']; ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p><?php
              $addr = "";
              foreach($config['ADDRESS'] as $address){
                $addr .= $address . ", ";
              }
              echo substr($addr, 0, -2);
              ?></p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p><?php
                  $emial = "";
                  foreach($config['EMAIL'] as $emil){
                    $emial .= $emil . ", ";
                  }
                  echo substr($emial, 0, -2);
                  ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p><?php
                  $phno = "";
                  foreach($config['PHONE'] as $ph){
                    $phno .= $ph . ", ";
                  }
                  echo substr($phno, 0, -2);
                  ?></p>
                </div>
              </div>
            </div>
            <form action="" method="post" role="form" class="mt-4" onsubmit="return validateContactForm()">
              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" class="form-control" name="contctno" id="contctno" placeholder="Your Contact  No."  data-msg="Please enter a valid Contact No" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" ></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><input type="submit" class="btn btn-success" name="submit" id="submit" value="Send Message"></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
<?php
include("footer.php");
?>
<script type="application/javascript">
  function validateContactForm() {
    var alphaExp = /^[a-zA-Z]+$/; // Variable to validate only alphabets
    var numericExpression = /^[0-9]+$/; // Variable to validate only numbers
    var phoneNumberExp = /^(\+?\d{1,3})?\d{8}$/; // Variable to validate phone number with optional '+' sign and exactly 10 digits
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; // Variable to validate Email ID

    if (document.getElementById('name').value == '') {
      alert('Your Name should not be empty..');
      document.getElementById('name').focus();
      return false;
    } else if (!document.getElementById('name').value.match(alphaExp)) {
      alert('Please enter only letters for Your Name..');
      document.getElementById('name').focus();
      return false;
    } else if (document.getElementById('email').value == '') {
      alert('Your Email should not be empty..');
      document.getElementById('email').focus();
      return false;
    } else if (!document.getElementById('email').value.match(emailExp)) {
      alert('Kindly enter a valid Email ID.');
      document.getElementById('email').focus();
      return false;
    } else if (document.getElementById('contctno').value == '') {
      alert('Your Contact Number should not be empty..');
      document.getElementById('contctno').focus();
      return false;
    } else if (!document.getElementById('contctno').value.match(phoneNumberExp)) {
      alert('Contact Number should start with "+" or contain exactly 8 digits..');
      document.getElementById('contctno').focus();
      return false;
    } else if (document.getElementById('subject').value == '') {
      alert('Subject should not be empty..');
      document.getElementById('subject').focus();
      return false;
    } else if (document.getElementById('subject').value.length < 4) {
      alert('Subject should contain at least 4 characters..');
      document.getElementById('subject').focus();
      return false;
    } else if (document.getElementById('message').value == '') {
      alert('Message should not be empty..');
      document.getElementById('message').focus();
      return false;
    } else {
      return true;
    }
  }
</script>
