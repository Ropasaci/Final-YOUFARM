<?php require("database_credentials.php");
    session_start();

    if(isset($_POST["login"])){
      $uname = $_POST["uname"];
      $pass = $_POST["psw"];

      $sql = "Select username, pass from person where username='$uname' AND pass='$pass'";
    

    // Create connection
        $conn = new mysqli(servername,username,password,dbname);

        // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }

        $results= $conn->query($sql);
      //connection is successful if the number of rows in
      //result is exactly 1.
          if($results->num_rows==1){
            $_SESSION["uname"]=$uname;
            header("location:dashboard.php");
          }else{
            echo "<p style='color:red;'>Wrong username or password</p>"; 
          }
        }           
?>

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
  <link href="css/style2.css" rel="stylesheet">
  <link  href="css/login.css" rel="stylesheet">
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
  </header>
    <form action="" method="post">
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <small style="color:red;">
    </small>
    <input type="submit" name="login" value="Login"
    style="
      width:100%;
      padding:10px;
      margin-top:20px;
      background-color:lightgreen;
      border:none;
    "
    />
  </div>
</form>
    
</body>
</html>
