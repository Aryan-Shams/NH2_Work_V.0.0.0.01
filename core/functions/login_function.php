<?php
//check if already logged in move to home page
if( $user->is_logged_in() && $_SESSION['usertype']=='Admin'){ header('Location: adminpanel.php'); }
elseif( $user->is_logged_in() && $_SESSION['usertype']=='User'){ header('Location: userProfile.php'); }

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	//$usertype=$_POST['myselectedbox'];
$usertype=(isset($_POST['myselectedbox']) ? $_POST['myselectedbox']: null);
	

	if($usertype=='User'){
	if($user->login($username,$password,$usertype)){ 

		$_SESSION['username'] = $username;
		$_SESSION['usertype']=$usertype;
		header('Location: userProfile.php');
		exit;
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}

	
}
else{
	if($user->login($username,$password,$usertype)){ 

		$_SESSION['username'] = $username;
		$_SESSION['usertype']=$usertype;
		header('Location: adminpanel.php');
		exit;
	
	} else {
		$error[] = 'Wrong username or password or your account has not been activated.';
	}
}

}//end if submit

//define page title
$title = 'Login';

//include header template

?>