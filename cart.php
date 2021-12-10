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
    

    $sqlcart= "SELECT * FROM `cart`";
    
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
                    <form action="cart.php" method="post">
                        <div class="container-fluid cdiv1" >
                            <h3 style='margin-left:50px;margin-bottom:50px'>Cart</h3>
                            <table style="
                                width:90%;
                                    margin:auto;
                                    font-size:14px;
                                    border-collapse: collapse;
                                    padding:5px;
                                    border-radius:5px;
                                    margin:auto; 
                                "
                                >
                                <tr style="margin-bottom:20px;">
                                    <th>transactionID</th>
                                    <th>InvestmentID</th>
                                    <th>NameOfInvestment</th>
                                    <th>ProfitShare</th>
                                    <th>HarvestPeriod</th>
                                    <th>ExpectedYield</th>
                                    <th>Action</th>
                                <tr>
                                <?php
                                    $results=$conn->query($sqlcart);
                                    if($results->num_rows>0){
                                        while($rows = $results->fetch_assoc()){
                                            echo "
                                                <tr style='text-align:left
                                                        line-height:2px;
                                                        padding: 2px;
                                                        font-size:14px;
                                                        font-weight:400;
                                                        background-color=#B0E0E6'>
                                                    <td>".$rows['transactionID']."</td>
                                                    <td>".$rows['InvestmentID']."</td>
                                                    <td>".$rows['NameOfInvestment']."</td>
                                                    <td>".$rows['ProfitShare']."</td>
                                                    <td>".$rows['HarvestPeriod']."</td>
                                                    <td>".$rows['ExpectedYield']."</td>
                                                    <td>
                                                        <a href='cart.php?delete=".$rows['transactionID']."' class='btn btn-danger'>Delete</a>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    }
                                ?>
                                <?php
                                    if(isset($_GET['delete'])){
                                        $id=$_GET['delete'];

                                        // sql to delete a record

                                        $sql = "DELETE FROM `cart` WHERE transactionID=$id";

                                        if ($conn->query($sql) === TRUE) {
                                        echo "<p style='color:green'>Meeting deleted successfully</p>";
                                        } else {
                                        echo "Error deleting record: " . $conn->error;
                                        }
                                    }
                                ?>
                            </table>
                            <input type="submit" name="release-cart" value="Release Cart" 
                            style='
                            display:block;
                            margin:auto;
                            margin-top:40px; height:50px; 
                            width:250px; background-color:darkgreen; 
                            text-align:center; '/>
                        </div>
                    </form>

                </div>
        </section>
        <footer style="clear:both;">
            <p><img src="assets/logo.jpg" alt="footer-image" class="footer-image"> Youfarm &copy; 2021</p>
    </footer>
    </body>
</html>