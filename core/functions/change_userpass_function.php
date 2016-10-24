<?php 
require('core/includes/conn.php'); 


 $username=$_SESSION['username'];
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php'); } 



//define page title
$title = 'User Password Change';

?>