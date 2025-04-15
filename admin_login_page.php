<?php
session_start();
if(isset($_POST['loginbtn']))
{

$email=test_input($_POST['adminid']);
$Password=test_input($_POST['adminpassword']);

	include 'connects.php';
	$mysqli=connectdb();
if($mysqli->connect_error)
	{
	die("Connection Failed ".$mysqli->connect_error);
	}
	
	$sql="Select * from admin where aid= '".$email."' and apassword= '".$Password."'";
	$result=$mysqli->query($sql);
	if($result->num_rows>0)
	{
		$_SESSION['USERID']=$email;
		$_SESSION['USERPASS']=$Password;
		/* while($row=$result->fetch_assoc())
		{
		$_SESSION['mobilenumber']=$row['umobile'];
		} */
	echo '<script type="text/javascript">window.location="admin.php";</script>';
		//header("Location:home.html");
	}
	else
	{
		//header("Location:login.html");
	echo'<script type="text/javascript">alert("Incorrect Username or Password");window.location="index.html"; </script>';
	
	}
}


if(isset($_POST['changepassbtn']))
{
$currentPass=test_input($_POST['newpass']);
$oldpass=test_input($_POST['oldpass']);
$email=$_SESSION['USERID'];


if($oldpass!=$_SESSION['USERPASS'])
{
	echo'<script type="text/javascript">alert("You cannot change password because  your old password didnot match"); window.location="changepassword.html";</script>';
}


	include 'connects.php';
	$mysqli=connectdb();
if($mysqli->connect_error)
	{
	die("Connection Failed ".$mysqli->connect_error);
	}
	
	$sql="update register set password= '".$currentPass."' where email='".$email."'";
	$result=$mysqli->query($sql);
	echo'<script type="text/javascript">alert("Your password changed"); window.location="login.html";</script>';
	//$conn->close;
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
