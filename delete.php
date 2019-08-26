<?php 
include('connection.php'); 
  $ph  = $_REQUEST['ph'];
  $q  ="delete from profie where Phone = '$ph'";
  $data  = mysqli_query($conn,$q);

  if($data)
  {
  	echo "<script>alert('Record Deleted Successfully...')</script>";
  

  ?>  
         <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Mysql%20tutorial/insert.php">;
  <?php 
}
  else
  {
  	    echo "Record Not Deleted...";
  }
?>