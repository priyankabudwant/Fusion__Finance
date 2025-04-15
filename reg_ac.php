<?php
	session_start();
	if(isset($_POST['cnfrm-submit']))
	{
	include 'connects.php';
	
	$name=$_SESSION['cust_name'];
	$gender=$_SESSION['gender'];
	$mobile=$_SESSION['mobile'];
	$email=$_SESSION['email'];
	$dob=$_SESSION['dob'];
	$pan_no=$_SESSION['pan_no'];
	$adharno=$_SESSION['adharno'];
	$homeaddrs=$_SESSION['homeaddrs'];
	$city=$_SESSION['city'];
	$pass=$_SESSION['pass'];
	$pass=md5($pass);

	$cdate=date('d-m-y');
	

	
	
	$mysqli = connectdb();
	$check="select * from customer where mobile='$mobile' " ;
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
		$query1 = "INSERT INTO customer(name,gender,mobile,email,dob,pan_no,adharno,homeaddrs,city,pass,cdate) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		$sql = $mysqli->prepare($query1);
		$sql->bind_param('sssssssssss',$name,$gender,$mobile,$email,$dob,$pan_no,$adharno,$homeaddrs,$city,$pass,$cdate);
				if($sql->execute())
			{
				
				echo '<script>alert("you registered Successfully\n\n customer id :'.$mobile.'");window.location="cus_reg.html";</script>';
			}
			else
			{
			   echo '<script type="text/javascript">alert("Error... in posting feedback try again!");window.location="cus_reg.html";  </script>';
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
	