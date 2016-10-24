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
$title = 'Help';




/////////////////////////////////////////////////////////////////////


if(isset($_POST['reset_sts'])) {

		date_default_timezone_set("Asia/Dhaka");
    $str_lcn_time= date("h:i:sa");
$str_lcn_date = date("Y-m-d");
$reset_status=$_POST['reset_status'];
$edit_sql= "UPDATE user_response SET userstatus='".$reset_status."',date='".$str_lcn_date."',time='".$str_lcn_time."'";


$x=mysqli_query($conn,$edit_sql);
if ($x) {
	echo "Updated";
	header('Location:help.php');
}
else{
	echo "Not Save";
}

}




/////////////////////////////////////////////////////////////////////


if(isset($_POST['change_status'])) {


$change_status=$_POST['myselect'];
$id=$_POST['id'];
$edit_sql= "UPDATE user_response SET userstatus='".$change_status."' WHERE mobileno='".$id."'";


$x=mysqli_query($conn,$edit_sql);
if ($x) {
	echo "Updated";
	header('Location:help.php');

}
else{
	echo "Not Save";
}

}
?>


<?php
/*

/////////////////////////////////////////////////////////////////////

global $result;
$location = array();

if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,location.lattitude,location.longititude,location.address,user_response.date,user_response.time,user_response.userstatus FROM user_data join location on (user_data.mobileno=location.mobileno) join user_response on (location.mobileno=user_response.mobileno) ORDER BY location.date DESC  WHERE user_data.mobileno=location.mobileno AND user_data.mobileno LIKE '%". $_GET['q']."%' ";


	} else {
	
$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,location.lattitude,location.longititude,location.address,user_response.date,user_response.time,user_response.userstatus FROM user_data join location on (user_data.mobileno=location.mobileno) join user_response on (location.mobileno=user_response.mobileno) WHERE user_data.mobileno=location.mobileno   ORDER BY location.date DESC    ";


	}

	

			$result=mysqli_query($conn,$sql);

			*/

global $result;
$location = array();

if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,location.lattitude,location.longititude,location.address,user_response.date,user_response.time,user_response.userstatus FROM user_data join location on (user_data.mobileno=location.mobileno) join user_response on (location.mobileno=user_response.mobileno) WHERE user_data.mobileno=location.mobileno AND user_data.mobileno LIKE '%". $_GET['q']."%'";


	} else {
	
$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,location.lattitude,location.longititude,location.address,user_response.date,user_response.time,user_response.userstatus FROM user_data join location on (user_data.mobileno=location.mobileno) join user_response on (location.mobileno=user_response.mobileno) WHERE user_data.mobileno=location.mobileno";


	}

	


			$result=mysqli_query($conn,$sql);
 ?>
