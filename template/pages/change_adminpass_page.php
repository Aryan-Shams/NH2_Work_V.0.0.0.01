
        <!--start container-->
        <div class="container">
          <div class="section">

           
<form action="admin_profile.php" method="POST">
<div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                          <input type="password" name="password" id="password" class="form-control input-lg"  >
                                    </div>
                              </div>
                              <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                          <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" >
                                    </div>
                              </div>
                        </div>
      <input type='hidden' name='user_name' value="<?php echo $username; ?>"><br>

      <input type="submit" name="edit" value="Update">
       
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>
        </div>
        <!--end container-->
