<?php require("database_credentials.php");
    session_start();
    $uname=$_SESSION["uname"];
  
    $conn = new mysqli(servername,username,password,dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "Select person_id, fname, lname, username, dob, 
    location, phonenumber, pass from person where username='$uname'";

    $results= $conn->query($sql);
    
    $rows = $results->fetch_assoc();

    //get user credentials
    if($results->num_rows==1){
        $person_id=$rows["person_id"];
        $fname=$rows["fname"];
        $lname=$rows["lname"];
        $uname=$rows['username'];
        $dob=$rows["dob"];
        $location=$rows["location"];
        $pnum=$rows["phonenumber"];
        $pass=$rows["pass"];
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
              <form action="profile.php" method="post">
                <div style="width:100%; clear:both; height:250px">
                  <h2 style="margin-bottom:30px">Profile</h2>
                  <div style="float:left; margin-right:100px;">
                        <span><p><strong>Person-id:</strong> <?php echo $person_id?></p></span>
                        <span><p><strong>Username:</strong><?php echo $uname?></p></span>
                        <span><p><strong>Password:</strong> <?php echo $pass?></p></span>
                        <span><p><strong>Phone number:</strong> <?php echo $pnum?></p></span>
                  </div>
                  <div style="float:left; margin-right:500px">
                    <span><p><strong>Name: </strong><?php echo $fname." ".$lname?></p></span>
                    <span><p><strong>Date of Birth</strong> <?php echo $dob?></p></span>
                    <span><p><strong>location:</strong> <?php echo $location?></p></span>
                  </div>
                </div>
                <!-- record to be modified -->
                <hr style='margin-bottom:50px;'>
                <tr class="modify">
                  <h3 style="margin-bottom:30px">Update Profile</h3>
                  <td><label style="margin-right:10px;">Firstname</label><input type="text" placeholder="Enter fname" value="<?php echo $fname?>" name="fname"></td>
                  <td><label style="margin-right:10px;">Lastname</label><input type="text" placeholder="Enter lname" value="<?php echo $lname ?>" name="lname"></td>
                  <td><label style="margin-right:10px;">Username</label><input type="text" placeholder="Enter lname" value="<?php echo $uname ?>" name="uname"></td>
                  <td><label style="margin-right:10px;">DateOfBirth</label><input type="date" placeholder="Enter dob" value="<?php echo $dob ?>" name="dob"></td><br>
                  <td><label style="margin-right:10px;">Location</label><input type="text" placeholder="Enter location" value="<?php echo $location ?>" name="location"></td><br>
                  <td><label style="margin-right:10px;">Phone Number</label><input type="text" placeholder="Enter tel" value="<?php echo $pnum ?>" name="pnum"></td>
                  <td><label style="margin-right:10px;">New Password</label><input type="text" placeholder="Enter password" value="<?php echo $pass ?>" name="pass"></td>
                <input type="submit" name="edit" value="Edit" style="
                  width:100%;
                  background-color:#125c1d;
                "
                />
              </form>
              <?php
                if(isset($_POST['edit'])){
                  $fname=$_POST['fname'];
                  $lname=$_POST['lname'];
                  $uname=$_POST['uname'];
                  $dob =$_POST['dob'];
                  $location=$_POST['location'];
                  $pnum=$_POST['pnum'];
                  $pass=$_POST['pass'];

                  $sql = "UPDATE `person` 
                  SET `fname`='$fname',`lname`='$lname',`username`='$uname',`dob`='$dob',`location`='$location',`phonenumber`='$pnum',`pass`='$pass' 
                  WHERE person_id=$person_id";

                  if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                }
              ?>
            </div>
        </div>
    </section>      
    <footer style="clear:both;">
        <p><img src="assets/logo.jpg" alt="footer-image" class="footer-image"> Youfarm &copy; 2021</p>
    </footer>
  </body>
</html>
