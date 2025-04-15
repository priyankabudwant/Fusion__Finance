<?php
function connectdb()
{
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="fusion_finance";
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){die("Connection Failed ".$mysqli->connect_error);}
return $conn;
}
?>
 