
<?php include 'header.php'; ?>


<!-- Display DATA entry form below -->
    <div class="row">
        <div  class="col">
        <h1>Please Provide Item No</h1>
        <form name="delete" method="POST" action="connection.php" class="form-row">

        <div class="col">
            <input type="text" name="ItemNo" class="form-control" placeholder="Use the following format SCP-###" required>
        </div>
        <div class="col">
        <button type = "submit"  class = "btn-primary" >Delete</button>
        </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
  

   
   
   
   
   
   
