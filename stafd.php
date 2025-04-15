<?php
	session_start();
	if(isset($_POST['submit']))
	{
	include 'connects.php';
	
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$mobile=$_POST['smobile'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$homeaddrs=$_POST['homeaddrs'];
	$pass=$_POST['pass'];
	

	$cdate=date('d-m-y');
	

	
	
	$mysqli = connectdb();
	$check="select * from staff where smobile='$mobile' " ;
	$result=$mysqli->query($check);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<script type="text/javascript">alert("user already exist");window.location="cus_reg.html";</script>';
		}
	}	
	else
	{
		$mysqli = connectdb();
		$query1 = "INSERT INTO staff(name,gender,smobile,email,dob,homeaddrs,pass,sdate) VALUES(?,?,?,?,?,?,?,?)";
		$sql = $mysqli->prepare($query1);
		$sql->bind_param('ssssssss',$name,$gender,$mobile,$email,$dob,$homeaddrs,$pass,$cdate);
				if($sql->execute())
			{
				
				echo '<script>alert("you registered Successfully\n\n Staff id :'.$mobile.'");window.location="staff.html";</script>';
			}
			else
			{
			   echo '<script type="text/javascript">alert("Error... in posting details try again!");window.location="staff.html";  </script>';
			}
	$sql->close();
	}
}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}
?>
	