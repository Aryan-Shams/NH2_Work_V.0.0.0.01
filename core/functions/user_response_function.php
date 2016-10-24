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
$title = 'User Response';


	if(isset($_POST['edit'])) {

		$userstatus = $_POST['userstatus'];
		$date = $_POST['date'];
		$time =$_POST['time'];
	

		 $mobileno=$_POST['mobileno'];

		
		$edit_sql = "UPDATE user_response SET userstatus='".$userstatus."',date='".$date."',time='".$time."' WHERE mobileno = '".$mobileno."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
			echo "Updated";
		}
		else{
			echo "Not Save";
		}

	}
	if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT * From user_response WHERE mobileno LIKE '%". $_GET['q']."%'  OR userstatus LIKE '%". $_GET['q']."%'
OR date LIKE '%". $_GET['q']."%'";


	} else {
		$sql="SELECT * From user_response ORDER BY date DESC ";
	
	}

	



			$result=mysqli_query($conn,$sql); 
			?>
