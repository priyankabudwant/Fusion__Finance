<?php
	session_start();
	if(isset($_POST['cnfrm-submit'])){ 
	include 'connects.php';
	$acc_no= rand(1000,9999).mt_rand(10000,99999);
	$Cid=$_SESSION['CID'];
	$acc_type=$_SESSION['a/c_type'];
	$nominee_name=$_SESSION['nominee_name'];
	$nominee_no=$_SESSION['nominee_no'];
	$ocupation=$_SESSION['ocupation'];
	$document=$_SESSION['document'];
	$saving_type=$_SESSION['saving_type'];
	$business_infrm=$_SESSION['business_infrm'];
	$current_type=$_SESSION['current_type'];
	

	$adate=date('d-m-y');
	

	$mysqli = connectdb();
	$check="select * from account where Cid='$Cid'" ;
	$result=$mysqli->query($check);
	if($result->num_rows>0)
	{ 
		while($row=$result->fetch_assoc())
		{
		echo '<script type="text/javascript">alert("Account already exist");window.location="cus_acc_open.html";</script>';
		}
	}
	else{
		$mysqli = connectdb();
	
		
$query = "INSERT INTO account(acc_no,Cid,acc_type,nominee_name,nominee_no,ocupation,document,saving_type,business_infrm,current_type,adate) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
$sql = $mysqli->prepare($query);
$sql->bind_param('sssssssssss',$acc_no,$Cid,$acc_type,$nominee_name,$nominee_no,$ocupation,$document,$saving_type,$business_infrm,$current_type,$adate);
	                                                                                                                                                                                                                               
	
	

	if($sql->execute())
{
	
	echo '<script>alert("Account Created Successfully\n\n account no :'.$acc_no.'");window.location="cus_acc_open.html";</script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!");window.history.back();  </script>';
}
	}
$sql->close();
}
?>