<div class="container">
    <div class="section">
		<div class="row">
<div class="col s12 m12 l6 centered">
<div class="card-panel">
			 <h4 class="header2">Edit Alert Notice</h4>
                  <div class="row">

<form action="alluser.php" method="POST">
<?php 

if($query_run=mysqli_query($conn,$sql)) {
				
				 while ($row=mysqli_fetch_assoc($query_run)) {	
                 $user_name=$row['name'];
                 $user_mail=$row['mail'];
                 $user_lgn_name=$row['username'];
                 //$user_name=$row['password'];
                 $user_mblno=$row['mobileno'];
                 $user_usertype=$row['usertype'];
                 $user_id=$row['id'];?>



<div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text' id="name" class="validate" name='name' value="<?php echo $user_name; ?>">
                          <label for="name">Name</label>
                        </div>
</div>

<div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='email' id="mail" class="validate" name='mail' value="<?php echo $user_mail; ?>">
                          <label for="mail">Email</label>
                        </div>
</div>

<div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text' id="username" class="validate" name='username' value="<?php echo $user_lgn_name; ?>">
                          <label for="username">User Name</label>
                        </div>
</div>



				<input type='hidden' name='mobileno' value="<?php echo $user_mblno; ?>">
                <input type="hidden" name ="id" value='<?php echo $user_id; ?>'>
		



<div class="row">
           <div class="input-field col s12">
                 <select name="myselectedbox">
                         <option value="" disabled selected>Choose User Type</option>

         <option value="admin">Admin</option>
        <option value="modarator">Modarator</option>
        <option value="User">User</option>
        </select>

   <label>User Type</label>

</div>
</div>

		

<div class="row">
           <div class="input-field col s12">
                <select name="active">
                        <option value="" disabled selected>Choose User Statue</option>

     <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

   <label>User Active</label>

</div>
</div>


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