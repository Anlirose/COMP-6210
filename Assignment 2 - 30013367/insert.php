
<?php include 'header.php'; ?>


<!-- Display DATA entry form below -->
    <div class="row">
        <div  class="col">
        <h1>Enter new SCP Subject Form</h1>
        <form name="insert" method="POST" action="connection.php" class="form-row">

        <div class="col">
            <input type="text" name="ItNo" class="form-control" placeholder="Use the following format SCP-###" required>
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
        <button type = "submit"  class = "btn-primary" >submit</button>
        </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
  

   
   
   
   
   
   
