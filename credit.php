<?php 
if(isset($_POST['credit_btn'])){

    $acc_no = $_POST['acc_no'];
    $credit_amount = $_POST['credit_amount'];
$type=$_POST['type'];
	if(!is_numeric($_POST['credit_amount'])){

		echo '<script>alert("Invalid amount")</script>';
	}
	
	else{ 
    
	include 'connects.php';
    $conn = connectdb();
	//Customer details required for transaction
	$sql = "SELECT * FROM account WHERE acc_no= $acc_no && status='Approved'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $row = $result->fetch_assoc();
	$customer_ac_no = $row['acc_no'];
	$customer_id = $row['Cid'];

	if($type=='credit')
	{
	$customer_netbal = $row['dammount'] + $credit_amount;
	}
	else{
		$customer_netbal1 = $row['dammount'] - $credit_amount;
	}
	$customer_passbk = "passbook_".$customer_id;
	

    
    	//Generate Transaction ID
		$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);
		
		//Transaction Date

		date_default_timezone_set('Asia/Kolkata'); 
		$transaction_date = date("d/m/y h:i:s A");
		
		//Remark or Narration
		$remark = "Cash Deposit";
			
		//customer's Transaction Description
        $Transac_description = "Cash Deposit/".$transaction_id;
		
		date_default_timezone_set('Asia/Kolkata'); 
		$date_time = date("d/m/y h:i:s A");

		//SMS Integration for Fund Transfer notification to both the Sender and the customer--------------
			///------------To the sender------------

				// require('textlocal.class.php');
				// $apikey = 'Mzie479SxfY-Z7slYf9AI3zVXCAu0G5skUBQVYOfRU';
				// $textlocal = new Textlocal(false,false,$apikey);
				// $numbers = array($customer_mob);
				// $sender = 'TXTLCL';
				// $hidden_ac_no  = "XXXXXXXX".substr($customer_ac_no ,8 , 13);
				// $message = 'Your a/c no.'.$hidden_ac_no.' is credited with Rs.'.$credit_amount.' on '.$date_time.' Transaction ID is '.$transaction_id.'' ;
			
				// try {
				// 	$result = $textlocal->sendSms($numbers, $message, $sender);
				// 	print_r($result);
				// } catch (Exception $e) {
				// 	die('Error: ' . $e->getMessage());
				// }

				//-------------------------------------------------------------------------------------
				//-------------------To the customer---------------------------------------------------- 
				

        // Set autocommit to off
        $conn->autocommit(FALSE);
	
	//Add amount to customer's available balance	
	if($type=='credit')
	{
	$sql1 = "Update account SET dammount = '$customer_netbal' WHERE Cid = '$customer_id '";
	$sql2 = "INSERT INTO $customer_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_ammount,Net_Balance,Remark)
	VALUES ('$transaction_id','$transaction_date','$Transac_description','$credit_amount','0','$customer_netbal','$remark')";
	if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE  ){
				$conn->commit();
			echo '<script>alert("Amount credited Successfully to customer account");window.location="credit_amt.php";</script>';
							
		}	
		else{	
			echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'");window.location="credit_amt.php";</script>';
			$conn->rollback();	
        }
	}
	else
	{
		$sql3 = "Update account SET dammount = '$customer_netbal1' WHERE Cid = '$customer_id '";
	// Insert Statement into customer Passbook
	$sql4= "INSERT INTO $customer_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_ammount,Net_Balance,Remark)
	VALUES ('$transaction_id','$transaction_date','$Transac_description','0','$credit_amount','$customer_netbal1','$remark')";
	if($conn->query($sql3) == TRUE && $conn->query($sql4) == TRUE  ){
				$conn->commit();
			echo '<script>alert("Amount credited Successfully to customer account");window.location="credit_amt.php";</script>';
							
		}	
		else{	
			echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'");window.location="credit_amt.php";</script>';
			$conn->rollback();	
        }
	}
		 
  
	
    
	}
	

    else{

        echo '<script>alert("Incorrect Account Number");window.location="credit_amt.php";</script>';
    }

	}
	

			
	}
	
?>