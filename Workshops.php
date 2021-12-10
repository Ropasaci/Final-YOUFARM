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
                <div class="container-fluid cdiv1" >
                    <h3>Workshops</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Workshop_id</th>
                            <th scope="col">Eventdate</th>
                            <th scope="col">Eventname</th>
                            <th scope="col">Action</th>                    
                        </tr>
                        </thead>
                    <tbody>
                    <?php require 'database_credentials.php';

                    //create connection with database
                    $conn = new mysqli(servername,username,password,dbname);

                    //test connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    //QUERIES.

                    //select query
                    //select all from the results
                    $sql = "SELECT * FROM workshops";       
                    $result = $conn->query($sql);


                    //executing  select query
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                        echo "<tr bgcolor='#B0E0E6' height=20px>";                    
                            echo "<td>".$row["workshop_id"]."</td>";
                            echo "<td>".$row["eventdate"]."</td>";
                            echo "<td>".$row["eventname"]."</td>";
                            // echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='Delete.php?
                            // carid=".$row['workshop_id']."'>Attend</a></td>";
                            ?><td><a href="Workshops.php?eventid=<?php echo $row['workshop_id'];?>" class='btn btn-success'>Attend</a></td>
                    <?php 
                        echo "</tr>";

                    }  
                        echo "</table>";
                    } 
                    else {
                        echo "Table contains no rows.";
                    }

                    ?>
                    
                    <?php
                        //displaying events attending.

                    ?>
                </div>
                <div class="container-fluid cdiv1 special-bottom-margin" style='margin-top:40px;' >
                    <h3>Workshops Attending</h3>
                    <?php
                        if(isset($_GET['eventid'])){
                            $id=$_GET['eventid'];
                            
                            //getting event record for a particular id
                            $sql ="SELECT `workshop_id`, `eventdate`, `eventname` FROM `workshops` WHERE workshop_id=$id";
                            $result = $conn->query($sql);

                            $row = $result->fetch_assoc();

                            $workshipid=$row['workshop_id'];
                            $eventdate=$row['eventdate'];
                            $eventname=$row['eventname'];
                            
                            //checking if event record is already found on the workshops table

                            $sql="SELECT `WorkshopID`, `EventDate`, `EventName` FROM `workshops_attending` WHERE WorkshopID=$id";
                            $result = $conn->query($sql);

                            if($result->num_rows!=1){
                                $sql2="INSERT INTO `workshops_attending`(`WorkshopID`, `EventDate`, `EventName`) 
                                VALUES ('$workshipid','$eventdate','$eventname')";

                                if (mysqli_query($conn, $sql2)) {
                                    echo "<p style='color:green'>New event added</p>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }

                            }else
                            { echo "<p style='color:red'>You're already attending this event</p>";}
                            
                        }
                    ?>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Workshop_id</th>
                            <th scope="col">Eventdate</th>
                            <th scope="col">Eventname</th>
                            <th scope="col">Action</th> 
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql1="SELECT * FROM `workshops_attending`";

                                $results= $conn->query($sql1);
                                if ($results->num_rows > 0) {
                                    // output data of each row
                                    while($row = $results->fetch_assoc()) {
                                    echo "<tr style='
                                            line-height:2px;
                                            padding: 2px;
                                            font-size:14px;
                                            font-weight:400;
                                            background-color=#B0E0E6'>";
                                    echo "<td>".$row["WorkshopID"]."</td>
                                            <td>".$row["EventDate"]."</td>
                                            <td>".$row["EventName"]."</td>";            
                                    ?><td colspan='2'> 
                                        <!-- getting specified record to be updated by id. -->
                                        <a href="Workshops.php?deleteid=<?php echo $row['WorkshopID'];?>" class='btn btn-danger'>Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }   
                                } else {
                                    echo "0 results";
                                }
                            ?>
                            <?php
                                if(isset($_GET['deleteid'])){
                                $id=$_GET['deleteid'];

                                // sql to delete a record
                                $sql = "DELETE FROM `workshops_attending` WHERE WorkshopID=$id";

                                if ($conn->query($sql) === TRUE) {
                                echo "<p style='color:green'>Meeting deleted successfully</p>";
                                } else {
                                echo "Error deleting record: " . $conn->error;
                                }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <footer style="clear:both;">
        <p><img src="assets/logo.jpg" alt="footer-image" class="footer-image"> Youfarm &copy; 2021</p>
    </footer>
  </body>
</html>

