<?php
session_start();
include 'connects.php';
if(isset($_POST['login']))
{
$mobile=test_input($_POST['smobile']);
$password=test_input($_POST['pass']);
//$password=md5($password);

//mysql_connect("localhost", "root","");
$mysqli=connectdb();

	$sql="Select * from staff where smobile= '".$mobile."' and pass= '".$password."' and status='Approved'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
			$_SESSION['CID']=$mobile;
				while($row=$result->fetch_assoc())
				{
					
				$_SESSION['NAME']=$row['name'];	
				$_SESSION['VID']=$mobile;
					
				
				}
				header("location: stafdash.php");
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
