<?php
session_start(); 
include 'connects.php';

//delete feedbacks
if(isset($_GET['Ciid']))
{
	$mysqli=connectdb();
	$id=test_input($_GET['Ciid']);
	$query = "delete from account where Cid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:deleteac.php");
}
if(isset($_GET['Cid']))
{
	$mysqli=connectdb();
	$id=test_input($_GET['Cid']);
	$query = "delete from loan where Cid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewallloans.php");
}

if(isset($_GET['Cid']))
{
	$mysqli=connectdb();
	$id=test_input($_GET['Cid']);
	$query = "delete from pigmy where Cid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewpigmyaccounts.php");
}
//deleting cases
if(isset($_GET['fno']))
{
	$fno=test_input($_GET['fno']);
	$mysqli=connectdb();
	$query = "delete from feedback where fno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$fno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfeedback.php");
}

//deleting subscribtion

if(isset($_GET['nid']))
{
	$nid=test_input($_GET['nid']);
	$mysqli=connectdb();
	$query = "delete from add_news where nid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$nid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:deletenews.php");
}

 //deleting hearing details 

//update cases
if(isset($_GET['slno']))
{
	$slno=test_input($_GET['slno']);
	$mysqli=connectdb();
	
	$query1 = "update register_case set  clientid=?, ctitle=?,cdescription=?,caseid=?,casetype=?,courtname=?,cregdate=?,courtdate=?,cstatus=? where slno='". $slno."'" ;
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();

	
	$query = "update register_case set comment='This item is granted to you! Congrats... Please collect it.', status=1 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$grantid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
} 


//deleting feedback 

if(isset($_GET['smobile']))
{
	$smobile=test_input($_GET['smobile']);
	$mysqli=connectdb();
	$query = "delete from staff where smobile=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$smobile);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewstaff.php");
}

//deleting donations

if(isset($_GET['oid']))
{
	$oid=test_input($_GET['oid']);
	$mysqli=connectdb();
	$query = "delete from orders where oid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$oid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:cart.php");
}

//requesting
if(isset($_GET['d_id']))
{
	
	$d_id=test_input($_GET['d_id']);
	$r_date=date('yy-m-d');
	$r_time=date('h:i:sa');
	$mysqli=connectdb();
	
	$query=" INSERT INTO d_request(userid,d_id,r_date,r_time) VALUES(?,?,?,?) ";
	$statement = $mysqli->prepare($query);
	$statement->bind_param('siss',$_SESSION['USERID'],$d_id,$r_date,$r_time);
	if($statement->execute())
	{
		echo '<script type="text/javascript"> window.location="home_r.html"; </script>';
	}
	else
	{
		 echo '<script type="text/javascript"> alert("Error In Request"); </script>';
	}
	
	
}
	
//deleting requests by recievers
/*	
if(isset($_GET['rno']))
{
	$rno=test_input($_GET['rno']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewRequestedFood.php");
}
	*/
//deleting donated food
/*
if(isset($_GET['did']))
{
	$d_id=test_input($_GET['did']);
	$mysqli=connectdb();
	$query = "delete from d_item where d_id=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$d_id);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:DonatedFood.php");
}
	*/
//deleting requests by donor
	
if(isset($_GET['rid']))
{
	$rno=test_input($_GET['rid']);
	$mysqli=connectdb();
	$query = "delete from d_request where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$rno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

	
//granting requests by donor
	
if(isset($_GET['Cid']))
{
	$Cid=test_input($_GET['Cid']);
	$mysqli=connectdb();
	
	$query1 = "update account set  status='approved' where Cid='".$Cid."' && status='1'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();
	
	
	$query1 = "update account set  status='not approved' where Cid='".$Cid."' && status='0'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();
	
	$query1 = "update account set  status='not approved' where Cid='".$Cid."' && status='2'";
	$statement1 = $mysqli->prepare($query1);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement1->execute();
	
	/*$query = "update d_request set comment='This item is granted to you! Congrats... Please collect it.', status=1 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$grantid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}*/
	//header("location:viewAccountStatus.php");
}


//denying requests by donor
	
if(isset($_GET['denyid']))
{
	
	$denyid=test_input($_GET['denyid']);
	$mysqli=connectdb();

	$query = "update d_request set comment='This item is not granted to you! Sorry!!!', status=2 where rno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$denyid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:RequestedFood.php");
}

//deleting subscribtion

if(isset($_GET['sno']))
{
	$sno=test_input($_GET['sno']);
	$mysqli=connectdb();
	$query = "delete from subscribe where sno=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$sno);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}

//deleting other feedbacks

if(isset($_GET['no']))
{
	$no=test_input($_GET['no']);
	$mysqli=connectdb();
	$query = "delete from feedback where no=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$no);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewsubscribe.php");
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>