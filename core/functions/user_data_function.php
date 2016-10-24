<?php 
require('core/includes/conn.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php'); } 

///User type access controll starts
    switch($_SESSION['usertype']){
       
        case 'User':
            header('Location:index.php');
            break;
    }

///User type access controll ends


//define page title
$title = 'User Data';
?>

<?php


	
	if(isset($_POST['edit'])) {

		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$username = $_POST['username'];
		$mobileno = $_POST['mobileno'];
		$myselectedbox = $_POST['myselectedbox'];
		$myselectstatus = $_POST['active'];

		$id=$_POST['id'];
		
		
		$edit_sql = "UPDATE user_data SET name='".$name."',mail='".$mail."',username='".$username."',mobileno='".$mobileno."',usertype='".$myselectedbox."' ,active='".$myselectstatus."' WHERE id = '".$id."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
						echo "Updated";

            header('Location:user_data.php');

		}
		else{
			echo "Not Save";
		}

	}



if(isset($_POST['change_password'])) {



		$id=$_POST['id'];


   if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	
	if(!isset($error)){
         $hashedpassword = $_POST['password'];

			$edit_sql= "UPDATE user_data SET password='".$hashedpassword."' WHERE id='".$id."'";


		$x=mysqli_query($conn,$edit_sql);
		if ($x) { 
			echo "Updated";
			            header('Location:user_data.php');

		}
		else{
			echo "Not Save";
		}

	}


	}


	if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT * From user_data WHERE name LIKE '%". $_GET['q']."%' OR username LIKE '%". $_GET['q']."%' OR mobileno LIKE '%". $_GET['q']."%'	OR usertype LIKE '%". $_GET['q']."%' OR active LIKE '%". $_GET['q']."%' OR mail LIKE '%". $_GET['q']."%'";


	} else {
		$sql="SELECT * From user_data";


	}

			$result=mysqli_query($conn,$sql); 
?>
