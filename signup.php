<?php
//include config
require_once('core/includes/config.php');


require_once('core/functions/signup_function.php');

require('template/layout/header_login_01.php');


?>

  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form"  role="form" method="post" action="" autocomplete="off" >
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Join NH2 & Stay Safe !</p>
          </div>
        </div>
<!--php validation -->

        <?php
        //check for any errors
        if(isset($error)){
          foreach($error as $error){
            echo '<p class="bg-danger">'.$error.'</p>';
          }
        }

        //if action is joined show sucess
        if(isset($_GET['action']) && $_GET['action'] == 'joined'){
          echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
        }
        ?>
<!--php validation -->

<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input  type="text" name="name" id="name"  placeholder="Name" value="<?php if(isset($error)){ echo $_POST['name']; } ?>" >
            <label for="username" class="center-align">Full Name</label>
          </div>
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
            <i class="mdi-communication-email prefix"></i>
            <input type="email" name="mail" id="mail" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['mail']; } ?>" class="validate">
            <label for="email" class="center-align" data-error="wrong" data-success="right">Email</label>


          </div>
        </div>

<div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-hardware-phone-android prefix"></i>
            <input type="tel" name="mobileno" id="mobileno"  placeholder="Phone Number" value="<?php if(isset($error)){ echo $_POST['mobileno']; } ?>" >
            <label for="mobile" class="center-align">Mobile Number</label>
          </div>
        </div>

        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="password" id="password"  placeholder="Password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input type="password" name="passwordConfirm" id="passwordConfirm"  placeholder="Confirm Password">
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
<div class="input-field col s12">
  <button class="btn waves-effect waves-light col s12"  type="submit" name="submit" value="Register" >Register Now
  </button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="index.php">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


<?php 
require('template/layout/footer_login_01.php');
?>
