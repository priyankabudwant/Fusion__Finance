<?php
if(isset($_POST['btnsubmit']))
{
include 'connects.php';


$name=test_input($_POST['name']);
$uemail=test_input($_POST['email']);
$subject=test_input($_POST['subject']);
$message=test_input($_POST['message']);
$cdate=date('d-m-y');

$mysqli = connectdb();
$query = "INSERT INTO feedback(name,email,subject,message,cdate) VALUES(?,?,?,?,?)";
$statement = $mysqli->prepare($query);
$statement->bind_param('sssss',$name,$uemail,$subject,$message,$cdate);


if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your Feedback Saved successfully!");window.location="contact.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!");window.location="contact.html";</script>';
}
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
