<div class="container">
<div class="section">
<div class="row ">
<div class="col s12 m12 l6">
<div class="card-panel">

<div class="row">
<form action="user_response.php" method="POST" class="col s12">
<?php 

if($query_run=mysqli_query($conn,$sql)) {
				
				 while ($row=mysqli_fetch_assoc($query_run)) {
                   		
                 $mobileno=$row['mobileno'];
                 $userstatus=$row['userstatus'];
                 $date=$row['date'];
                 $time=$row['time'];
                 ?>


<div class="row">
           <div class="input-field col s12">
				 <select  name='userstatus' >
        <option value="" disabled selected>Choose User Statue</option>
        <option value="SAFE">SAFE</option>
        <option value="HELP">HELP</option>

    </select>
   <label>User Status</label>

</div>
</div>


           <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text' id="date" class="validate"  name='date' value="<?php echo $date; ?>">
                          <label for="notice">Date</label>
                        </div>
</div>

 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input type='text' id="time" class="validate"  name='time' value="<?php echo $time; ?>">
                          <label for="notice">Time</label>
                        </div>
</div>



				<input type="hidden" name ="mobileno" value='<?php echo $mobileno; ?>'>

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