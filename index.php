<?php
//include config
require_once('core/includes/config.php');


require_once('core/functions/login_function.php');

require('template/layout/header_login_01.php');


?>

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" role="form" method="post" action="" autocomplete="off" >
        <div class="row">
          <div class="input-field col s12 center">
            <img src="assets/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Natural Hazard Helper - NH2 Login</p>
          </div>

 <!--Php Validation starts -->   

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
              echo "<p class='bg-success'>Your account is now active you may now log in.</p>";
              break;
            case 'reset':
              echo "<p class='bg-success'>Please check your inbox for a reset link.</p>";
              break;
            case 'resetAccount':
              echo "<p class='bg-success'>Password changed, you may now login.</p>";
              break;
          }

        }

        
        ?>
 <!--Php Validation ends -->       
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="text" name="username" id="username"  placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" >
            <label for="username" class="center-align">Username</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password" id="password"  placeholder="Password" >
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row margin"> 
                  <div class="input-field col s12">
                    <select name="myselectedbox" id="myselectedbox" >
                      <option value="" disabled selected>Choose your option</option>
                       <option value="Admin">Admin</option>
      <option value="User">User</option>
                    </select>
                  </div>

        </div>


        <div class="row">
          <div class="input-field col s12">
  <button class="btn waves-effect waves-light col s12"  type="submit" name="submit" value="Login">Login
  </button>
          </div>


        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="signup.php">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="resetPassword.php">Forgot password ?</a></p>
          </div>          
        </div>

      </form>


    </div>
  </div>



<?php 
require('template/layout/footer_login_01.php');
?>
