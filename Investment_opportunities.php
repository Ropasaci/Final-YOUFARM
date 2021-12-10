<?php require("database_credentials.php");
    session_start();
    $uname=$_SESSION["uname"];

    $conn = new mysqli(servername,username,password,dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "Select opportunity_id, oppname, requiredinvestment, profitshare, miniinvestment,harvestperiod, wholesaleprice, expectedyield, oppstatus from investmentopportunity";

    $results= $conn->query($sql);    

    $rows1 = mysqli_fetch_assoc($results);
    $product_id1 = $rows1["opportunity_id"];
    $product_name1 =$rows1["oppname"];
    $product_requiredinvestment1 =$rows1["requiredinvestment"];
    $product_profitshare1=$rows1["profitshare"];
    $product_miniinvestment1 =$rows1["miniinvestment"];
    $product_harvestperiod1 =$rows1["harvestperiod"];
    $product_wholesaleprice1 =$rows1["wholesaleprice"];
    $product_expectedyield1 =$rows1["expectedyield"];
    $product_oppstatus1 =$rows1["oppstatus"];

    $rows2 = mysqli_fetch_assoc($results);
    $product_id2 = $rows2["opportunity_id"];
    $product_name2 =$rows2["oppname"];
    $product_requiredinvestment2 =$rows2["requiredinvestment"];
    $product_profitshare2=$rows2["profitshare"];
    $product_miniinvestment2 =$rows2["miniinvestment"];
    $product_harvestperiod2 =$rows2["harvestperiod"];
    $product_wholesaleprice2 =$rows2["wholesaleprice"];
    $product_expectedyield2 =$rows2["expectedyield"];
    $product_oppstatus2 =$rows2["oppstatus"];

    $rows3 = mysqli_fetch_assoc($results);
    $product_id3 = $rows3["opportunity_id"];
    $product_name3 =$rows3["oppname"];
    $product_requiredinvestment3 =$rows3["requiredinvestment"];
    $product_profitshare3=$rows3["profitshare"];
    $product_miniinvestment3 =$rows3["miniinvestment"];
    $product_harvestperiod3 =$rows3["harvestperiod"];
    $product_wholesaleprice3 =$rows3["wholesaleprice"];
    $product_expectedyield3=$rows3["expectedyield"];
    $product_oppstatus3 =$rows3["oppstatus"];

    $rows4 = mysqli_fetch_assoc($results);
    $product_id4 = $rows4["opportunity_id"];
    $product_name4 =$rows4["oppname"];
    $product_requiredinvestment4 =$rows4["requiredinvestment"];
    $product_profitshare4=$rows4["profitshare"];
    $product_miniinvestment4 =$rows4["miniinvestment"];
    $product_harvestperiod4 =$rows4["harvestperiod"];
    $product_wholesaleprice4 =$rows4["wholesaleprice"];
    $product_expectedyield4 =$rows4["expectedyield"];
    $product_oppstatus4 =$rows4["oppstatus"];

    $rows5= mysqli_fetch_assoc($results);
    $product_id5 = $rows5["opportunity_id"];
    $product_name5=$rows5["oppname"];
    $product_requiredinvestment5 =$rows5["requiredinvestment"];
    $product_profitshare5=$rows5["profitshare"];
    $product_miniinvestment5 =$rows5["miniinvestment"];
    $product_harvestperiod5 =$rows5["harvestperiod"];
    $product_wholesaleprice5 =$rows5["wholesaleprice"];
    $product_expectedyield5 =$rows5["expectedyield"];
    $product_oppstatus5 =$rows5["oppstatus"];

    //getting customer id.
    $sql = "Select person_id from person where username='$uname'";
    $results = $conn->query($sql);
    $rows = mysqli_fetch_assoc($results);
    $pid=$rows["person_id"];
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
                <form action="Investment_opportunities.php" method="post">
                    
                    <?php
                        //inserting to cart

                        if(isset($_POST["buy5"])){
                            //insert into database the transaction details
                            $sql ="INSERT INTO `cart`(`InvestmentID`, `NameOfInvestment`,
                            `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) 
                            VALUES ($product_id5,'$product_name5','$product_profitshare5','$product_harvestperiod5','$product_expectedyield5')";
                        }

                        if(isset($_POST["buy4"])){
                            //insert into database the transaction details
                            $sql ="INSERT INTO `cart`(`InvestmentID`, `NameOfInvestment`,
                            `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) 
                            VALUES ($product_id4,'$product_name4','$product_profitshare4','$product_harvestperiod4','$product_expectedyield4')";
                        }
                        
                        if(isset($_POST["buy3"])){
                            //insert into database the transaction details
                            $sql ="INSERT INTO `cart`(`InvestmentID`, `NameOfInvestment`,
                            `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) 
                            VALUES ($product_id3,'$product_name3','$product_profitshare3','$product_harvestperiod3','$product_expectedyield3')";
                        }

                        if(isset($_POST["buy2"])){
                            //insert into database the transaction details
                            $sql ="INSERT INTO `cart`(`InvestmentID`, `NameOfInvestment`,
                            `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) 
                            VALUES ($product_id2,'$product_name2','$product_profitshare2','$product_harvestperiod2','$product_expectedyield2')";
                        }

                        if(isset($_POST["buy1"])){
                            //insert into database the transaction details
                            $sql ="INSERT INTO `cart`(`InvestmentID`, `NameOfInvestment`,
                            `ProfitShare`, `HarvestPeriod`, `ExpectedYield`) 
                            VALUES ($product_id1,'$product_name1','$product_profitshare1','$product_harvestperiod1','$product_expectedyield1')";
                        }
                    ?>
                
                    <div class="left">
                        <span class="description">
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Required Investment:</bold><?php echo $product_requiredinvestment5 ?>GHC</p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Profit share:</bold><?php echo $product_profitshare5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Minimum Investment:</bold><?php echo $product_miniinvestment5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Harvest Period:</bold><?php echo $product_harvestperiod5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Wholesale price:</bold><?php echo $product_wholesaleprice5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Expected yield:</bold><?php echo $product_expectedyield5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Opportunity Status share:</bold><?php echo $product_oppstatus5 ?></p>
                            
                            <input style="background-color:darkgreen" type="submit" name="buy5" value="Buy">
                            <small style="color:green;">
                                <?php
                                    if(isset($_POST["buy5"])){
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Item sent to cart";
                                        }else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        } 
                                    }
                                ?>
                            </small>
                        </span>
                        <span class="description">
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Required Investment:</bold><?php echo $product_requiredinvestment2 ?>GHC</p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Profit share:</bold><?php echo $product_profitshare5 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Minimum Investment:</bold><?php echo $product_miniinvestment2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Harvest Period:</bold><?php echo $product_harvestperiod2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Wholesale price:</bold><?php echo $product_wholesaleprice2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Expected yield:</bold><?php echo $product_expectedyield2 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Opportunity Status share:</bold><?php echo $product_oppstatus2 ?></p>
                            <input style="background-color:darkgreen" type="submit" name="buy2" value="Buy" >
                            <small style="color:#125c1d;">
                                <?php
                                    if(isset($_POST["buy2"])){
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Item sent to cart";
                                        } 
                                    }
                                ?>
                            </small>
                        </span>
                        <span class="description">
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Required Investment:</bold><?php echo $product_requiredinvestment3 ?>GHC</p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Profit share:</bold><?php echo $product_profitshare3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Minimum Investment:</bold><?php echo $product_miniinvestment3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Harvest Period:</bold><?php echo $product_harvestperiod3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Wholesale price:</bold><?php echo $product_wholesaleprice3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Expected yield:</bold><?php echo $product_expectedyield3 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Opportunity Status share:</bold><?php echo $product_oppstatus3 ?></p>
                            
                            <input style="background-color:darkgreen" type="submit" name="buy3" value="Buy" >
                            <small style="color:green;">
                                <?php
                                    if(isset($_POST["buy3"])){
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Item sent to cart";
                                        } 
                                    }
                                ?>
                            </small>
                        </span>
                    </div> 
                    <div class="left">
                        <span class="description">
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">ID:</bold><?php echo $product_id4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Name:</bold><?php echo $product_name4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Required Investment:</bold><?php echo $product_requiredinvestment4 ?>GHC</p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Profit share:</bold><?php echo $product_profitshare4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Minimum Investment:</bold><?php echo $product_miniinvestment4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Harvest Period:</bold><?php echo $product_harvestperiod4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Wholesale price:</bold><?php echo $product_wholesaleprice4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Expected yield:</bold><?php echo $product_expectedyield4 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; margin-right:5px;">Opportunity Status share:</bold><?php echo $product_oppstatus4 ?></p>
                            
                            <input style="background-color:darkgreen" type="submit" name="buy4" value="Buy" >
                            <small style="color:green;">
                                <?php
                                    if(isset($_POST["buy4"])){
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Item sent to cart";
                                        } 
                                    }
                                ?>
                            </small>
                        </span>
                        <span class="description">
                            <p style="width:90%; display:block;"><bold style="font-weight:600;">ID:</bold><?php echo $product_id1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600;">Name:</bold><?php echo $product_name1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; ">Required Investment:</bold><?php echo $product_requiredinvestment1 ?>GHC</p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; ">Profit share:</bold><?php echo $product_profitshare1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; ">Minimum Investment:</bold><?php echo $product_miniinvestment1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600;">Harvest Period:</bold><?php echo $product_harvestperiod1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600; ">Wholesale price:</bold><?php echo $product_wholesaleprice1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600;">Expected yield:</bold><?php echo $product_expectedyield1 ?></p>
                            <p style="width:90%; display:block;"><bold style="font-weight:600;">Opportunity Status share:</bold><?php echo $product_oppstatus1 ?></p>
                            
                            <input style="background-color:darkgreen" type="submit" name="buy1" value="Buy">
                            <small style="color:green;">
                                <?php
                                    if(isset($_POST["buy1"])){
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Item sent to cart";
                                        } 
                                    }
                                ?>
                            </small>
                        </span>
                    </div>    
                </form>
            </div>
        </div>
    </section>
    <footer style="clear:both;">
        <p><img src="assets/logo.jpg" alt="footer-image" class="footer-image"> Youfarm &copy; 2021</p>
    </footer>
  </body>
</html>
                