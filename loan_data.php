<?php
	session_start();
	if(isset($_POST['submit'])){ 
	include 'connects.php';
	$loan_no= rand(1000,9999).mt_rand(10000,99999);
	
	$acc_no			=		$_POST['acc_no'];
	$nominee_name	=		$_POST['nominee_name'];
	$nominee_no		=		$_POST['nominee_no'];
	$nocupation		=		$_POST['nocupation'];
	$loan_type		=		$_POST['loan_type'];	
	$rtc			=		$_FILES['rtc']['name'];
	$perm_letter 	=		$_FILES['perm_letter']['name'];
	$admi_proof		=		$_FILES['admi_proof']['name'];
	$inc_cert		=		$_FILES['inc_cert']['name'];
	$veh_doc		=		$_FILES['veh_doc']['name'];
	$lammount		=		$_POST['lammount'];
	$rperiod		=		$_POST['rperiod'];
	$eperiod		=		$_POST['eperiod'];
	$adate=date('d-m-y');
	
$mysqli = connectdb();
	$check="select * from account where acc_no='$acc_no'" ;
	$result=$mysqli->query($check);
	if($result->num_rows>0)
	{ 
		$_SESSION['ACC_NO']=$acc_no;

		$mysqli = connectdb();

	
		$query = "INSERT INTO loan(loan_no,acc_no,Cid,nominee_name,nominee_no,nocupation,loan_type,rtc,perm_letter,admi_proof,inc_cert,veh_doc,lammount,rperiod,eperiod,adate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$sql = $mysqli->prepare($query);
		$sql->bind_param('ssssssssssssssss',$loan_no,$acc_no,$_SESSION['CID'],$nominee_name, $nominee_no,$nocupation,$loan_type,$rtc,$perm_letter,$admi_proof,$inc_cert,$veh_doc,$lammount,$rperiod,$eperiod,$adate);
																																																									   
		if($sql->execute())                 
		{                                      
			  move_uploaded_file($_FILES["rtc"]["tmp_name"], "upload/".$_FILES["rtc"]["name"]); 
				move_uploaded_file($_FILES["perm_letter"]["tmp_name"], "upload/".$_FILES["perm_letter"]["name"]); 
				move_uploaded_file($_FILES["admi_proof"]["tmp_name"], "upload/".$_FILES["admi_proof"]["name"]); 
				move_uploaded_file($_FILES["inc_cert"]["tmp_name"], "upload/".$_FILES["inc_cert"]["name"]); 
				move_uploaded_file($_FILES["veh_doc"]["tmp_name"], "upload/".$_FILES["veh_doc"]["name"]);  
			echo '<script>alert("Loan application submitted successfully\n\nLoan number: '.$loan_no.'");window.location="loan.html";</script>';
		}                                       
		else                                    
		{                                       
		   echo '<script type="text/javascript">alert("Error... in posting feedback try again!");window.history.back();  </script>';
		}     
		
	}	
	else
	{
	
	echo '<script type="text/javascript">alert("Account  not already exist");window.history.back();</script>';
	}                               
                        
}                                       
?>                                      
                                        
                                        
                                        
                                       
                                       
                                        
                                        