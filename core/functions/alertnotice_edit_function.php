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
$title = 'Edit Alert Notice';
$serial = $_GET['id'];

$sql = "select * from alertnotice where serial = ".$serial;
?>