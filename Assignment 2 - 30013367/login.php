<?php include 'header.php'; ?>


         
                
                
<div class="row">
        <div  class="col">
        <h1>Login</h1>
        <form name="login" method="POST" action="connection.php" class="form-row">

        <div class="col">
            <input type="text" name="Username" class="form-control" placeholder="Enter User Name" required>
        </div>
        <div class="col">    
            <input type="password" name="Password" class="form-control" placeholder="Enter Password" required>
         </div>
         <div class="col">
        <button type = "submit"  class = "btn-primary" >Login</button>
        </div>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>