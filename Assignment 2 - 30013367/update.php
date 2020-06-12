
<?php include 'header.php'; ?>


<!-- Display DATA entry form below -->

<?php
if(isset($_POST['ItemNum']))
    {
        // save all $_POST values from form into separate variables
        $ItemNum = $_POST['ItemNum'];
  }

?>
    <div class="row">
        <div  class="col">
        <h1>Update SCP Subject Form</h1>
        <form name="update" method="POST" action="connection.php" class="form-row">


<input type='hidden' name='ItemNum' value='<?php echo "$ItemNum";?>'/>
        <div class="col">
            <input type="text" name="ItNum" class="form-control" placeholder="Use the following format SCP-###" required>
        </div>
        <div class="col">    
            <input type="text" name="ObCl" class="form-control" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
        </div>
        <div class="col">
            <input type="text" name="SubImg" class="form-control" placeholder="images/image_name.(gif, jpg, png)">
        </div>
        <div class="col">
            <textarea name="Des" rows="10" class="form-control" required>Separate Paragraphs</textarea>
        </div>
        <div class="col">
            <textarea name="Proce" rows="10" class="form-control" requried>Separate Paragraphs</textarea>
        </div>
        <div class="col">
        <button type = "submit"  class = "btn-primary" >Update Changes</button>
        </div>
            </form>
        </div>
    </div>
    
    

    <?php include 'footer.php'; ?>
  

   
   
   
   
   
   
