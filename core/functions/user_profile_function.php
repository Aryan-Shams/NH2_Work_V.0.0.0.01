<?php 
require('core/includes/conn.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php'); } 



///User type access controll ends


//define page title
$title = 'User Profile';

?>