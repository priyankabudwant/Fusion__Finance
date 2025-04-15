


<html>
    <head><title>My Profile</title>
    
    <style>
#customer_profile .link2{

background-color: rgba(5, 21, 71,0.4);

}
    </style>

</head>
<body>

         
<?php
session_start();
		
 
?>


								<table class="table table-striped">
											<tr>
														<th class="bg-primary">FNAME</th>
													    <th class="bg-primary">UPHONE</th>
														<th class="bg-primary">UEMAIL</th>
														<th class="bg-primary">MESSAGE</th>
														<th class="bg-primary">Action?</th>
														<th class="bg-primary">FNAME</th>
													    <th class="bg-primary">UPHONE</th>
														<th class="bg-primary">UEMAIL</th>
														<th class="bg-primary">MESSAGE</th>
														<th class="bg-primary">Action?</th>
														<th class="bg-primary">UEMAIL</th>
														<th class="bg-primary">MESSAGE</th>
														<th class="bg-primary">Action?</th>
											</tr>
																   <?php
																   
																   
																   include 'connects.php';
																	$conn =connectdb();
																	$Cid=$_SESSION['CID'];
																	$sql="SELECT * FROM account WHERE Cid='$Cid'";
																	$result=$conn->query($sql);
																	
																	
																   
																	
																	if($result->num_rows>0)
																	{
																		while($row=$result->fetch_assoc())
																		{	
																		echo '<tr>
																			<td>'.$row["acc_no"].'</td>
																			<td>'.$row["Cid"].'</td>
																			<td>'.$row["acc_type"].'</td>
																			<td>'.$row["nominee_name"].'</td>
																			<td>'.$row["nominee_no"].'</td>
																			<td>'.$row["ocupation"].'</td>
																			<td>'.$row["document"].'</td>
																			<td>'.$row["saving_type"].'</td>
																			<td>'.$row["business_infrm"].'</td>
																			<td>'.$row["current_type"].'</td>
																			<td>'.$row["dammount"].'</td>
																			<td>'.$row["adate"].'</td>
																			<td>'.$row["status"].'</td>
																			
																			<td><a href="allactions.php?fid='.$row["acc_type"].'"> Update</a></td>
																		</tr>';
																		}  
																	}
																?>
								</table>




</dody>
</html>