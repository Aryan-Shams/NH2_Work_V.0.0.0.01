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
$title = 'All User';
?>

<?php 
	
//Post Edit


	if(isset($_POST['edit'])) {

		$name = $_POST['name'];
		$mail = $_POST['mail'];
		$username = $_POST['username'];
		$mobileno = $_POST['mobileno'];
		$myselectedbox = $_POST['myselectedbox'];
		$id=$_POST['id'];
		$active=$_POST['active'];

		
		
		

		$edit_sql = "UPDATE user_data SET name='".$name."',mail='".$mail."',username='".$username."',mobileno='".$mobileno."',usertype='".$myselectedbox."', active = '".$active."' WHERE id = '".$id."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
			echo "Updated";
			header('Location: alluser.php');
		}
		else{
			echo "Not Save";
		}

	}
//post edit


	if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,location.lattitude,user_data.active,location.longititude,location.address,location.date,location.time FROM user_data,location WHERE user_data.mobileno=location.mobileno and user_data.mobileno LIKE '%". $_GET['q']."%'";


	} else {
		$sql="SELECT user_data.id,user_data.name,user_data.mail,user_data.username,user_data.mobileno,user_data.usertype,user_data.active,location.lattitude,location.longititude,location.address,location.date,location.time FROM user_data,location WHERE user_data.mobileno=location.mobileno";


	}


			$result=mysqli_query($conn,$sql); ?>

			<?php
			if (isset($_POST['delete']) && isset($_POST['checkbox'])) {
    			foreach($_POST['checkbox'] as $del_id){
        				$del_id = (int)$del_id;
        				$sql = "DELETE FROM user_data WHERE mobileno = $del_id"; 
       						 mysqli_query($conn,$sql);
       					$sql = "DELETE FROM location WHERE mobileno = $del_id"; 
       						 mysqli_query($conn,$sql);
       					$sql = "DELETE FROM user_response WHERE mobileno = $del_id"; 
       						 mysqli_query($conn,$sql);
   					 }
   					 header('Location: alluser.php');
				}

?>
