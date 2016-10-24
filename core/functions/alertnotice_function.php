<?php 
require('core/includes/core2.php');
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
$title = 'Alert Notice';



	if(isset($_POST['edit'])) {
        $notice =$_POST['notice'];
		$status = $_POST['status'];
		$date = $_POST['date'];
		$time =$_POST['time'];
		 $serial=$_POST['serial'];

		
		$edit_sql = "UPDATE alertnotice SET notice ='".$notice."',status='".$status."',date='".$date."',time='".$time."' WHERE serial = '".$serial."'";

		$x=mysqli_query($conn,$edit_sql);
		if ($x) {
			echo "Updated";
			header('Location: alertnotice.php');
		}
		else{
			echo "Not Save";
		}

	}


	
	if(isset($_GET['q']) && $_GET['q']){  

		$sql="SELECT * From alertnotice WHERE date LIKE '%". $_GET['q']."%' OR status LIKE '%". $_GET['q']."%' OR notice LIKE '%". $_GET['q']."%' ";
		


	} else {
		$sql="SELECT * From `alertnotice`  ORDER BY `alertnotice`.`date`  DESC";
			}


			$result=mysqli_query($conn,$sql); 
			?>


<?php

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

			$notice = $_POST["notice"];
			$status = $_POST["status"];
		
		date_default_timezone_set("Asia/Dhaka");
    $str_lcn_time= date("h:i:sa");
$str_lcn_date = date("Y-m-d");


  	      $sql1="INSERT INTO alertnotice (serial,notice,status,date,time) VALUES (null,'$notice','$status','$str_lcn_date','$str_lcn_time')";
		
		
		  $x=mysqli_query($conn,$sql1);
		  var_dump($sql1);
		
		  	if($x){
		   	echo "save";
		   		 header('Location: alertnotice.php');
			}
			else
			echo "Not Save";
	}

?>
		<?php
			if (isset($_POST['delete']) && isset($_POST['checkbox'])) {
    			foreach($_POST['checkbox'] as $del_id){
        				$del_id = (int)$del_id;
        				$sql = "DELETE FROM alertnotice WHERE serial = $del_id"; 
       						 mysqli_query($conn,$sql);
   					 }
   					 header('Location: alertnotice.php');
				}

?>
