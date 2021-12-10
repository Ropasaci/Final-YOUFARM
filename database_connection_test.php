<!-- In this section we would be testing if we can connect with our database using constant 
variables created in the database_credentials.php file. -->

<?php require 'database_credentials.php';

  // Create connection
  $conn = new mysqli(servername,username,password,dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connected successfully";
  }
  
  //close connection.
  $conn->close();
  
?> 