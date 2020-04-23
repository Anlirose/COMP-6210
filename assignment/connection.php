<?php

    // Create Database credential variables
    $user = "a3001336_Anli";
    $password = "Toiohomai1234";
    $db = "a3001336_sub";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from sub") or die($connection->error);

    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['ItNo']))
    {
        // save all $_POST values from form into separate variables
        $ItNo = $_POST['ItNo'];
        $ObCl = $_POST['ObCl'];
        $SubImg = $_POST['SubImg'];
        $Des = $_POST['Des'];
        $Proce = $_POST['Proce'];

        // create insert command
        $insert = "insert into sub (ItNo, ObCl, SubImg, Des, Proce) values('$ItNo', '$ObCl', '$SubImg', '$Des', '$Proce')"; 

        if ($connection->query($insert) === TRUE) 
        {
            include 'header.php';
            echo "<h1>Record successfully Created</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'footer.php';
           } 
           else 
           {
               include 'header.php';
               echo "<h1>Please Try Again: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               include 'footer.php';
           }

        
    } 
   

?>