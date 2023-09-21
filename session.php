<?php

if(validSessionEmpCheck()==false) {
	if (file_exists("index.php")) header("location: index"); else header("location:index");  exit; 
}
if(!isset($_SESSION[$_SESSION['azureemp']])) {
	if (file_exists("index")) header("location: index"); else header("location:index");  exit;  
}
$Admin_Session_id = $_SESSION[$_SESSION['azureadmin']];
$Emp_Session_id = $_SESSION[$_SESSION['azureemp']];
?>
