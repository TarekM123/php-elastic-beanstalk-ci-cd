<?php
include('class.php');

session_start();

if (!isset($_SESSION['tata'])) {
    
    $_SESSION['tata']= new RoomList();

}

$box=$_SESSION['tata'];

?>
