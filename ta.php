<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="fusion_finance";
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){die("Connection Failed ".$mysqli->connect_error);}
$sql="CREATE TABLE bank_customer(acc_no varchar(30) not null,Cid varchar(30) not null,acc_type varchar(30) not null,nominee_name varchar(30) not null,nominee_no varchar(30) not null,ocupation varchar(30) not null,document varchar(30) not null,saving_type varchar(30) not null,business_infrm varchar(30) not null,current_type varchar(30) not null,dammount varchar(30) not null,drate varchar(30) not null,tintrest varchar(30) not null,dtime varchar(30) not null,duration varchar(30) not null,adate varchar(30) not null)";
if($conn->query($sql)=== TRUE)
{
echo "hi";
}
else
{
echo "hello";
}
$conn->close();

?>
 