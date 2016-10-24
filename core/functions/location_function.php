<?php 
require('core/includes/conn.php'); 

//if not logged in redirect to login page
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
$title = 'Location';


if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT * From location WHERE mobileno LIKE '%". $_GET['q']."%'";


	} else {
		$sql="SELECT * From location JOIN user_data ON  location.mobileno = user_data.mobileno";


	}

			$result=mysqli_query($conn,$sql); 
		

?>