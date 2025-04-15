<?php
session_start();
include 'connects.php';
if(isset($_POST['login']))
{
$mobile=test_input($_POST['mobile']);
$password=test_input($_POST['pass']);

//mysql_connect("localhost", "root","");
$mysqli=connectdb();

	$sql="Select * from customer where mobile= '".$mobile."' and pass= '".$password."'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
			$_SESSION['CID']=$mobile;
				while($row=$result->fetch_assoc())
				{
					
				$_SESSION['NAME']=$row['name'];	
				$_SESSION['CID']=$mobile;
				$_SESSION['PASSWORD']=$row['rpassword'];	
				
				}
				header("location: userDashboard.php");
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
