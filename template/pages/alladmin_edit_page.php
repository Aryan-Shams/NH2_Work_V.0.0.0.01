 <div class="divider"></div>

<div class="container">
    <div class="section">
        <div class="row">
         <div class="col s12 m12 l6 centered">
          <div class="card-panel">
<h4 class="header2">Edit Alert Notice</h4>
<div class="row">


<form action="alladmin.php" method="POST" class="col s12">
<?php 

if($query_run=mysqli_query($conn,$sql)) {
				
				 while ($row=mysqli_fetch_assoc($query_run)) {
                   		
                 $id=$row['id'];
                 $name=$row['name'];
                 $user_name=$row['username'];
                 $email=$row['mail'];
                 //$user_name=$row['password'];
                $mobileno=$row['mobileno'];
                 ?>

 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text'  id="name" name='name' class="validate"  value="<?php echo $name; ?>">
                          <label for="notice">Name</label>
                        </div>
</div>


 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text'  id="user_name" name='user_name' class="validate"  value="<?php echo $user_name; ?>">
                          <label for="notice">User Name</label>
                        </div>
</div>


 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
                          <input type='email'  id="email" name='email' class="validate"  value="<?php echo $email; ?>">
                          <label for="email">Email</label>
                        </div>
</div>



				<input type='hidden' name='mobileno' value="<?php echo $mobileno; ?>"><br>
				<input type="hidden" name ="id" value='<?php echo $id; ?>'>


     <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="edit">Update
                              <i class="mdi-file-cloud-upload right"></i>
                            </button>
                          </div>
                        </div>




            <?php }
} ?>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
