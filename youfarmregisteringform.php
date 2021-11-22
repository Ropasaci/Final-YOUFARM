<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registering Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.jpg" rel="icon">
  <link href="favicon2.jfif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style2.css" rel="stylesheet">
   
    
    <style type="text/css">
    
body{
  background: #DAF1D5;
  
   
    margin: 150px;
    padding:100px; 
}
div.register{
  width:70%;
  margin:auto;
}

{box-sizing: border-box}

header#header{
  
  height:20%;
}



/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">Youfarm</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="youfarmlanding.php">Home</a></li>
          <li><a  href="youfarmlanding.php#about">About</a></li>
          <li><a  href="youfarmlanding.php#services">Services</a></li>
          <li><a  href="youfarmregisteringform.php"><span>Register</span></a></li>
          <li><a class="nav-link" href="youfarmlogin.php">Log in</a></li>
          <li><a  href="youfarmlanding.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<div class='register'>
<fieldset>
<form action="action_page.php">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to join our system.</p>
            <hr>

            <label for="Firstname"><b>Firstname</b></label>
                  <input type="text" placeholder="Enter firstname" name="fname" id="fname" required>

                  <label for="Lastname"><b>Lastname</b></label>
                  <input type="text" placeholder="Enter Lastname" name="lname" id="lname" required>

                  <label for="Username"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

                  <label for="dob"><b>Date Of Birth</b></label>
                  <input type="date" placeholder="Enter date of birth" name="dob" id="dob" required></br></br>

                  <label for="Location"><b>Location</b></label>
                  <input type="text" placeholder="Enter Location" name="loc" id="loc" required>

                  <label for="phonenumber"><b>Phone Number</b></label>
                  <input type="text" placeholder="Enter Phone Numer" name="pnum" id="pnum" required>

                                   
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
        <p>Already have an account? <a href="youfarmlogin.php">Log in</a>.</p>
  </div>
</form>
</fieldset>
</div>
</body>
</html>