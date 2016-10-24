<div class="container">
<div class="section">
<div class="row">
<div class="col s12 m12 l6 centered">
<div class="card-panel">
                  <h4 class="header2">Edit Alert Notice</h4>
                  <div class="row">


<form action="alertnotice.php" method="POST"  class="col s12" >

<?php 

if($query_run=mysqli_query($conn,$sql)) {
				
				 while ($row=mysqli_fetch_assoc($query_run)) {
                   		
                 $notice=$row['notice'];
                 $status=$row['status'];
                 $date=$row['date'];
                 $time=$row['time'];
                 ?>

                 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-action-question-answer prefix"></i>
                          <input id="notice" class="validate" type='text' name='notice' value="<?php echo $notice; ?>">
                          <label for="notice">Notice</label>
                        </div>
</div>

            <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-notification-sms-failed prefix"></i>
                          <input id="status" class="validate" type='text' name='status' value="<?php echo $status; ?>">
                          <label for="status">Status</label>
                        </div>
</div>

 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-notification-event-available  prefix"></i>
                          <input id="date" class="validate" type='text' name='date' value="<?php echo $date; ?>">
                          <label for="date">Date</label>
                        </div>
</div>

 <div class="row">
 <div class="input-field col s12">
                          <i class="mdi-av-timer prefix"></i>
                          <input id="time" class="validate" type='text' name='time' value="<?php echo $time; ?>">
                          <label for="time">Time</label>
                        </div>
</div>


				<input type="hidden" name ="serial" value='<?php echo $serial; ?>'>


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
