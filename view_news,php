<?php 
session_start();

$conn = mysqli_connect("localhost","root","","udetails");
if(isset($_POST['send_btn']))
{
$nheading=$_POST['heading'];
$ncat=$_POST['cat'];
$nutype=$_POST['utype'];
$nNdesc=$_POST['Ndesc'];
$nimage=$_FILES['image']['name'];


$query = "INSERT INTO add_news(heading,cat,utype,Ndesc,image) VALUES('$nheading','$ncat','$nutype','$nNdesc','$nimage')";
$query_run=mysqli_query($conn,$query);

if($query_run)
{
	
	move_uploaded_file($FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
    echo '<script type="text/javascript">alert("Your news added  successfull!"); window.location="login.html"; </script>';
	$_SESSION['status']="image stored successfully";
	header('location: addnews.php');
	
}
else
{
	$_SESSION['status']="image stored failed";
	header('location: index.html');
	echo '<script type="text/javascript">alert("Your  fail to add news "); window.location="login.html"; </script>';
}



}
?>