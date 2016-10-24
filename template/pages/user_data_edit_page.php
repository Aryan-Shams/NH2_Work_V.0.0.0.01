<div class="container">
    <div class="section">
		<div class="row">



<form action="user_data.php" method="POST">
<?php 

if($query_run=mysqli_query($conn,$sql)) {
				
				 while ($row=mysqli_fetch_assoc($query_run)) {
                   		
                 $user_name=$row['name'];
                 $user_mail=$row['mail'];
                 $user_lgn_name=$row['username'];
                 //$user_name=$row['password'];
                 $user_mblno=$row['mobileno'];
                 $user_usertype=$row['usertype'];
                 $user_userstatus=$row['active'];
                 $user_id=$row['id'];?>


                Name : <input type='text' name='name' value="<?php echo $user_name; ?>"><br>
				Email :<input type='text' name='mail' value="<?php echo $user_mail; ?>"><br>
				User Name :<input type='text' name='username' value="<?php echo $user_lgn_name; ?>"><br>
				Phone Number : <input   type='hidden'  name='mobileno' value="<?php echo $user_mblno; ?>"><br>
				<input type="hidden" name ="id" value='<?php echo $user_id; ?>'>
			
				User Type :
		<select name="myselectedbox">
		
                        <option value='' selected disabled hidden><?php echo $user_usertype; ?></option>

 		 <option value="Admin">Admin</option>
  		<option value="Modarator">Modarator</option>
  		<option value="User">User</option>
		</select><br>


<div class="row">
           <div class="input-field col s12">
                <select name="active">
                        <option value='' selected disabled hidden><?php echo $user_userstatus; ?></option>

     <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

   <label>User Active</label>

</div>
</div>

		<input type="submit" name="edit" value="Update">



            <?php }
} ?>
</form>

		</div>
	</div>
</div>
