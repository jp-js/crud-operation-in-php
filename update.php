<?php 
include('connection.php');
error_reporting(0);
  $us =  $_REQUEST['us'];
  $ad =   $_REQUEST['ad'];
  $ph = $_REQUEST['ph'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.js">
		<link rel="stylesheet" type="text/css"  href="bootstrap.css">
		<link rel="stylesheet" type="text/css"  href="bootstrap.min.js">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container-fluid">
        		
        	<form action="" method="post" class="form-group"> 
        		
        			<label for="user">Username</label>
        	
        		<input type="text" name="username" value="<?php echo $us ?>" class="form-control">
        	    <label for="Address">Address</label>
        		<input type="textarea" name="add" value="<?php echo $ad ?>"class="form-control">
        		<label for="contact">Phone</label>
        		<input type="text" name="phone" value="<?php echo $ph ?>"class="form-control"><br>
        		<input type="submit" name="submit" value="update" class="btn btn-success">

        	</form>
       
        </div>	
<?php  
     if(isset($_POST['submit'])) {
       $a = $_POST['username'];
       $b = $_POST['add'];
       $c = $_POST['phone'];

       $q  ="update profie set username = '$a', Address = '$b' where Phone = '$c'";
       $result = mysqli_query($conn, $q);

       if($result)
       {

         echo "<script>alert('Record update successfully..')</script>";
       
       	?>
          <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/Mysql%20tutorial/insert.php">    
       	<?php 
       }
       else
       {
          echo "Record Not Update...";
       }
     }
?>