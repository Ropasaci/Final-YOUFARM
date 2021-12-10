
<?php require("database_credentials.php");
  session_start();
  $uname=$_SESSION['uname'];

  $conn = new mysqli(servername,username,password,dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }   

  /*get judge information */
  $sql = "SELECT `fname`, `lname` FROM `person` WHERE `username`='$uname'";

  $results= $conn->query($sql);
  $rows = mysqli_fetch_assoc($results);

  if($results->num_rows==1){
      $fname=$rows["fname"];
      $lname=$rows["lname"];
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Youfarm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styling.css">
  </head>
   <body>
    <section>
        <div class="dashboard">
            <div class="sidebar">
                <span><img src="assets/home-icon-silhouette.png" alt="home-icon"/><a href="profile.php">Profile</a> </span>
                <span><img src="assets/profits.png" alt="opportunityicon"/><a href="Investment_opportunities.php">Investment opportunities</a> </span>
                <span><img src="assets/conference.png" alt="event-icon"/><a href="Workshops.php">Workshops</a> </span>
                <span><img src="assets/shopping-cart.png" alt="cart-icon"/><a href="cart.php">Cart</a> </span>
                <span style="margin-top:150px;"><img src="assets/logout.png" alt="logout-icon"/><a href="youfarmlogin.php">Logout</a> </span>
            </div>
            <div class="display-dashboard">
              <h1>Welcome <?php echo ' '.$fname.' '.$lname?></h1>
            </div>

        </div>
    </section>
    <footer style="clear:both;">
      <p><img src="assets/logo.jpg" alt="footer-image" class="footer-image"> Youfarm &copy; 2021</p>
    </footer>
      
  </body>
</html>