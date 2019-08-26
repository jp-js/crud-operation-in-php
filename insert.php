<?php 
  include('connection.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Student Records</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.js">
		<link rel="stylesheet" type="text/css"  href="bootstrap.css">
		<link rel="stylesheet" type="text/css"  href="bootstrap.min.js">
</head>
<body>
        <div class="container-fluid m-auto">
        		
        	<form action="" method="post" class="form-group">
        		
        		
        			<label for="user" >Username</label>
        		
        		<input type="text" name="username" value="" class="form-control">
        	   
        		<label for="Address">Address</label>
        		<input type="textarea" name="add" value="" class="form-control">
        		<label for="contact" >Phone</label>
        		<input type="text" name="phone" value="" class="form-control"><br>
        		<input type="submit" name="submit" value="submit" class="btn btn-primary">
           
        	</form>
       
        </div>	

        <?php  
               if(isset($_POST['submit'])){
                $user =  $_POST['username'];
                $add =  $_POST['add'];
                $phone = $_POST['phone'];
  
              if($user!="" && $add!="" && $phone!="") 
              {
                	$q = "insert into profie values('$user','$add','$phone')";
                	$val = mysqli_query($conn,$q);
                	if($val)
                	 {
                		echo "Data insert into database";
                	}
                }  
               else
               {
               	 echo "<font color = 'red'>**All fileds are required</font>";
               }
               }
               
        ?>

</body>
</html>
<style type="text/css">
	td{
		padding: 10px;
	}
</style>
<?php  
      $qy = "select * from profie";
      $data = mysqli_query($conn, $qy);
      $total = mysqli_num_rows($data);
      
      if($total!=0)
      {
      	?>
                  <table>
                  	<tr>
                  		<th>Username</th>
                  		<th>Address</th>
                  		<th>Phone</th>
                  		<th colspan="2">Oprations</th>
                  	</tr>
                  	
                  
      	<?php
      	while($result = mysqli_fetch_assoc($data)) {
      		echo "<tr>
                   <td>".$result['username']."</td>
                   <td>".$result['Address']."</td>
                   <td>".$result['Phone']."</td>
  <td><a href='update.php?us=$result[username]&ad=$result[Address]&ph=$result[Phone]'>Edit</a></td>
                    <td><a href='delete.php?ph=$result[Phone]' onclick ='return myfun();'>Delete</a></td>
      		</tr>";
      	}
      }   

?>

</table>
<script type="text/javascript">
	function myfun()
	{
		return confirm("Are You sure to want Delete Records");
	}
</script>