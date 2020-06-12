<?php include 'header.php'; ?>


<li class="navbar-brand"  >
                    <a class="nav-link" href="insert.php" >
                    ENTER NEW RECORD
                   
                    </a>
                </li>
<li class="navbar-brand"  >
                    <a class="nav-link" href="login.php" >
                    LOGIN
                   
                    </a>
                </li>                
                
             
                
                
<!-- Display record in div below -->
<div class="row">
        <div  class="col">
        <?php
        // check if the subject get value exits
        if(isset($_GET['sub']))
        {
            // remove single quotes from subject get value
            $ItNo = trim($_GET['sub'], "'");

            // run sql command to select record based on get value
            $data = $connection->query("select * from sub where ItNo='$ItNo'") or die($connection->error());

            // convert $record into an array for us to echo out on screen
            $row = $data->fetch_assoc();
            
            // create variables that hold data from db fields
            $ItNo = $row['ItNo'];
            $ObCl = $row['ObCl'];
            $Proce = $row['Proce'];
            $Des = $row['Des'];
            $SubImg = $row['SubImg'];

            // strip out \n and replace with linebreaks
            $Proce = str_replace('\n', '<br><br>', $Proce);
            $Des = str_replace('\n', '<br><br>', $Des);

            // if subject does not have an image
            if(empty($SubImg))
            {
              // Display db subject record to screen
              echo "<h1>SCP Subject Database</h1>
              <h2>Item_#: {$ItNo}</h2>
              <h3>Class: {$ObCl}</h3>
              <h3>Procedures</h3>
              <p>{$Proce}</p>
              <h3>Description</h3>
              <p>{$Des}</p>";
            }
            else
            {
              // Display db fields including image
              echo "<h1>SCP Subject Database</h1>
              <h2>Item_#: {$ItNo}</h2>
              <h3>Class: {$ObCl}</h3>
              <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='{$SubImg}'></p>
              <h3>Procedures</h3>
              <p>{$Proce}</p>
              <h3>Description</h3>
              <p>{$Des}</p>";
            }
        }
        else
        {
          // if this is the first time index.php is accessed, display the content below
          echo "<h1 class='text-center'>SCP Subject Database</h1>
              <p class='text-center'>Welcome Agent, use the links above to view subject files or enter new subject data</p>
              <p><img src='images/scp_console.jpg' class='img-fluid rounded mx-auto d-block'></p>";
        }
        ?>
        </div>
    </div>




<?php include 'footer.php'; ?>
