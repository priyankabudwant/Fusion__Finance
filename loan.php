
<?php 
session_start();
if(!isset($_SESSION['$cust_acopening'])){
	
	header('location:loan.php');
	
}


if(isset($_POST['submit'])){
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['acc_no']=$_POST['acc_no'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_no']=$_POST['nominee_no'];
	$_SESSION['nocupation']=$_POST['nocupation'];
	$_SESSION['loan_type']=$_POST['loan_type'];
	$_SESSION['rtc']=$_FILES['rtc']['rname'];
	$_SESSION['perm_letter']=$_FILES['perm_letter']['pname'];
	$_SESSION['admi_proof']=$_FILES['admi_proof']['aname'];
	$_SESSION['inc_cert']=$_FILES['inc_cert']['iname'];
	$_SESSION['veh_doc']=$_FILES['veh_doc']['vname'];
	$_SESSION['lammount']=$_POST['lammount'];
	$_SESSION['rperiod']=$_POST['rperiod'];
	$_SESSION['eperiod']=$_POST['eperiod'];
	header('location:loan.php');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/cust_regfrm_confirm.css" />


<title>Confirm</title>
</head>
<body>
<div class="cust_regfrm_cnfrm_container">
<div class="cnfrm_info">
     
	 <span><?php echo "Account Holder Name: ".$_SESSION['acc_no']."<br>"; ?> </span>
     
	 <span><?php echo "Nominee name : ".$_SESSION['nominee_name']."<br>"; ?>  </span>
	 <span><?php echo "Nominee No : ".$_SESSION['nominee_no']."<br>"; ?> </span>
	 <span><?php echo "Nominee-Ocupation : ".$_SESSION['nocupation']."<br>"; ?>  </span>
	
	 <span><?php echo "Loan type : ".$_SESSION['loan_type']."<br>"; ?> </span>
	 <span><?php echo "Rtc Document : ".$_SESSION['rtc']."<br>"; ?> </span>
	 <span><?php echo "Permission letter: ".$_SESSION['perm_letter']."<br>"; ?>  </span>
	 <span><?php echo "Admision proof : ".$_SESSION['admi_proof']."<br>"; ?> </span>
	 <span><?php echo "Income certificate: ".$_SESSION['inc_cert']."<br>"; ?>  </span>
	 <span><?php echo "Vehicle document: ".$_SESSION['veh_doc']."<br>"; ?> </span>
	 
	 <span><?php echo "loan ammount : ".$_SESSION['lammount']."<br>"; ?> </span>
	 <span><?php echo "repayment period from : ".$_SESSION['rperiod']."<br>"; ?> </span>
	 <span><?php echo "repayment period to: ".$_SESSION['eperiod']."<br>"; ?>  </span>
	 
	 <form action="loan_data.php" method="post">
	 <div class="cnfrm-btn">
	 <div class="btn_innerdiv">
	 <input class="cnfrm-submit-btn" type="submit" name="cnfrm-submit" value="Confirm" />
	 <input class="cnfrm-submit-btn" type="button" value="Go back" onclick="history.back()"/>
	 </div>
	 </div>
	 </form>
 </div>	 
</div>
</body>

</html>



	
