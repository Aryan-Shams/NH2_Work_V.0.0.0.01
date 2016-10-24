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

	if(isset($_POST['edit'])) {
		$name = $_POST['name'];
		$username = $_POST['user_name'];
		$mail = $_POST['email'];
		$mobileno =$_POST['mobileno'];


		 $id=$_POST['id'];

		
		$edit_sql = "UPDATE user_data SET username='".$username."',mail='".$mail."',name='".$name."',mobileno='".$mobileno."' WHERE id = '".$id."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
			echo "Updated";
		}
		else{
			echo "Not Save";
		}

	}
	if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT * From user_data WHERE username LIKE '%". $_GET['q']."%' OR mobileno LIKE '%". $_GET['q']."%'
 OR name LIKE '%". $_GET['q']."%'
 OR mail LIKE '%". $_GET['q']."%'
 OR active LIKE '%". $_GET['q']."%'
 AND usertype ='Admin'";

	} else {
		$sql="SELECT * From user_data WHERE usertype ='Admin'";

	}
			$result=mysqli_query($conn,$sql); 
			


//define page title
$title = 'All Admin';

?>

	<?php
			if (isset($_POST['delete']) && isset($_POST['checkbox'])) {
    			foreach($_POST['checkbox'] as $del_id){
        				$del_id = (int)$del_id;
        				$sql = "DELETE FROM user_data WHERE id = $del_id"; 
       						 mysqli_query($conn,$sql);
   					 }
   					 header('Location: alladmin.php');
				}

				?>