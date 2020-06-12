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
            //include 'header.php';
            echo "<h1>Record successfully Created</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'footer.php';
           } 
           else 
           {
              // include 'header.php';
               echo "<h1>Please Try Again: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               include 'footer.php';
           }

        
    } 
    
  if(isset($_POST['ItemNo']))
    {
        // save all $_POST values from form into separate variables
        $ItemNo = $_POST['ItemNo'];
      

        // create insert command
  
       $delete = "delete from sub WHERE ItNo= '$ItemNo'";


           if ($connection->query($delete) === TRUE) 
        {
           // include 'header.php';
            echo "<h1>Deleted successfully </h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'footer.php';
           } 
           else 
           {
               //include 'header.php';
               echo "<h1>Please Try Again: {$connection->error}</h1>
               <p><a href='delete.php' class='btn btn-warning'>Back to form</a></p>";
               include 'footer.php';
           }

        
    } 
    
    
    
    if(isset($_POST['ItemNum']))
    {
        // save all $_POST values from form into separate variables
        $ItemNum = $_POST['ItemNum'];
        $ItNo = $_POST['ItNum'];
        $ObCl = $_POST['ObCl'];
        $SubImg = $_POST['SubImg'];
        $Des = $_POST['Des'];
        $Proce = $_POST['Proce'];
        
     
    $update = "update sub set ItNo = '$ItNo',ObCl= '$ObCl', SubImg= '$SubImg', Des= '$Des', Proce= '$Proce'  where ItNo = '$ItemNum'";


           if ($connection->query($update) === TRUE) 
        {
           // include 'header.php';
            echo "<h1>Updated successfully </h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'footer.php';
           } 
           
     

    } 
   
     if(isset($_POST['Username']))
    {
        // save all $_POST values from form into separate variables
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        // create insert command
  
      
       $res = $connection->query("select * from login WHERE Username= '$Username' AND Password= '$Password'") or die($connection->error);;
      $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
      $active = $row['active'];
        $count = mysqli_num_rows($res);
        
           if ($count == 1) 
        {
           // include 'header.php';
            echo "<h1>Login successfully </h1>
                  <p><a href='manage.php' class='btn btn-primary'>Manage Record</a></p>";
            include 'footer.php';
           } 
           else 
           {
               //include 'header.php';
               echo "<h1>Login failed: Invalid Username/Password{$connection->error}</h1>
               <p><a href='login.php' class='btn btn-warning'>Back to form</a></p>";
             
               include 'footer.php';
           }

        
    } 
   

?>