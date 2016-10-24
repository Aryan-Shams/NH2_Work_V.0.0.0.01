

  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" role="form" method="POST" autocomplete="off" >
        <div class="row">
          <div class="input-field col s12 center">
            <h5>Forgot Password !!!</h5>
            <p class="center">You can reset your password </p>
          </div>

        <?php
       //check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
							break;
					}
				}
				?>

        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-content-mail  prefix"></i>
           <input  type="email" name="mail" id="mail" class="validate">
                          <label for='email'>Email</label>
          </div>
        </div>


   <div class="row">
                          <div class="input-field col s12">
                            <button class="btn  waves-effect waves-light right" type='submit' name='submit'  >Reset Password
                              <i class='mdi-action-lock'></i>
                            </button>
                          </div>
                            <div class="input-field col s12">
            <p class="margin sign-up"><a href="index.php">Login</a> <a href="signup.php" class="right">Register</a></p>
          </div>
</div>

      </form>
    </div>
  </div>
