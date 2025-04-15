<?php
	session_start();
	if(isset($_POST['submit'])){ 
	include 'connects.php';
	$acc_no=$_POST['acc_no']; ;
	$daily_date		=$_POST['ddate'];
	$daily_amt		=$_POST['daily_amt'];
	$mode			=$_POST['mode'];
	
	$mysqli = connectdb();
	$check="select * from account where acc_no='$acc_no'" ;
	$result=$mysqli->query($check);
	if($result->num_rows>0)
	{ 
	
$query = "INSERT INTO pigmy(acc_no,Cid,daily_date,daily_amt,mode) VALUES(?,?,?,?,?)";
$sql = $mysqli->prepare($query);
$sql->bind_param('sssss',$acc_no,$_SESSION['CID'],$daily_date,$daily_amt,$mode,);
	                                                                                                                                                                                                                           
	                                    
	                                  
                                        
	if($sql->execute()  )                 
{                                      
	 
	echo '<script>alert("Pigmy Account Created Successfully");window.location="pigmy.html"</script>';
}                                       
else                                    
{                                       
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!");window.history.back(); </script>';
}
	}
	
	
	
else
	{
	
	echo '<script type="text/javascript">alert("Account number not found");window.location="pigmy.html"</script>';
	}                                       
                          
}                                       
?>                                      
                                        
                                        
                                        
                                       
                                       
                                        
                                        