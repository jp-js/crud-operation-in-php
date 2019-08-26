<?php  
$conn = mysqli_connect("localhost","root","");

$db = mysqli_select_db($conn,'records');

if($db){
	echo "";
}
else{
	echo  mysqli_error();
}
?>