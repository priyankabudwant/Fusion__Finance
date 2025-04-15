<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>FusionFinance</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		<style>
		table {
  width: 100%;
  height: 5%;
  font-size: 15px;
  border-collapse: collapse;
  border: 1px rgb(221, 221, 221);
  /* //padding: 20px; */
  text-align: center;
}
table th {
  color: white;
  height: 50px;
  background-color: #005f7d;
}

tr {
  background-color: rgb(242, 242, 242);
}

tr:nth-child(odd) {
  background-color: white;
}

td {
  padding-left: 40px;
  padding-right: 40px;
}
</style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary m-0"><img src="img/LOGO.png" alt="Logo"></i>Fusion Finance</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="JavaScript:history.back()" class="nav-item nav-link" >Dashboard</a>
                         <a href="viewallaccounts.php" class="nav-item nav-link">View Accounts</a> 
                        <a href="viewloanreques.php" class="nav-item nav-link ">Grant Loan</a>
                        <a href="viewfeedback.php" class="nav-item nav-link ">View Feedback</a>
                        <!--  <a href="contact.html" class="nav-item nav-link">Contact Us</a>-->
                    </div>
                    
                    <a href="adlogout.php" class="btn btn-primary rounded-pill text-white py-2 px-4">Logout</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


         <!-- Header Start -->
         <div class="container-fluid bg-breadcrumb">
            <ul class="breadcrumb-animation">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Dashboard</h1>
                  
            </div>
        </div>
        <!-- Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary"></h4>
                    <h1 class="display-5 mb-4">View pigmy request</h1>
                    <p class="mb-0">Check all the users pigmy request and Approve or Denying the request.                    </p>
                </div>
                
				 <div class="contact-form" style="">
								<table >
											<tr>
														<th class="bg-primary">ACCOUNT NO</th>
													    <th class="bg-primary">CUSTOMER ID</th>
														<th class="bg-primary">DAILY AMMOUNT</th>
														<th class="bg-primary">DAILY DATE</th>
														<th class="bg-primary">MODE</th>
														<th class="bg-primary">ACTION</th>
											</tr>
																   <?php
																			include 'connects.php';
																			$mysqli=connectdb();
																		if($mysqli->connect_error)
																			{
																			die("Connection Failed ".$mysqli->connect_error);
																			}
																			
																			$sql="Select * from pigmy where status='pending'";
																			$result=$mysqli->query($sql);
																			
																			if($result->num_rows>0)
																			{
																				while($row=$result->fetch_assoc())
																				{	
																					echo '<tr>
																			
																					<td>'.$row['acc_no'].'</td>
																					<td>'.$row['Cid'].'</td>
																					<td>'.$row['daily_amt'].'</td>
																					<td>'.$row['daily_date'].'</td>
																					<td>'.$row['mode'].'</td>
																					<td>
																					<form method="post">
																					<input type="hidden" name="acc_no" value="',$row['acc_no'].'"/>
																					<input type="submit" name="accept" value="Accept&#10004;" class="btn btn-primary w-100 py-3"/><br>
																					
																					<input type="submit" name="reject" value="Reject&#10004;" class="btn btn-primary w-100 py-3"/>
																					</td>
																				</form>
																				</tr>';   
																				}         
																			}             
																			?>
								</table>
                                    
                            </div>
				
            </div>
        </div>
        <!-- Service End -->


   


        <!-- Footer Start -->
       <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-dark mb-4">Company</h4>
                            <a href=""> Why FusionFinance?</a>
                            <a href=""> Our Features</a>
                            
                            <a href=""> About Us</a>
                            <a href=""> Our Blog & News</a>
                            <a href=""> Get In Touch</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Quick Links</h4>
                            <a href=""> About Us</a>
                            <a href=""> Contact Us</a>
                            
                            <a href=""> Terms & Conditions</a>
                            <a href=""> Our Blog & News</a>
                            <a href=""> Our Team</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Services</h4>
                            <a href=""> View Accounts</a>
                            <a href=""> Pigmy Account</a>
                            <a href=""> Grant Loans</a>
                            
                            <a href=""> View Feedback</a>
                           <a href=""> Logout</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i>581321 Belekeri,Ankola,Uttar Kannada</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> FusionFinance@gmail.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +91 8722876397</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +91 9606135632</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><img src="img/LOGO.png" alt="Logo" height="50px" width="50px"></i>FusionFinance</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="adminl.html">B K Priyanka</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['acc_no'])&& isset($_POST['accept']))
{
	$query="UPDATE pigmy SET status='Approved' where acc_no='{$_POST['acc_no']}'";
	$statement=$mysqli->prepare($query);
	$statement->execute();
	/*$sql = "SELECT * FROM pigmy WHERE acc_no='{$_POST['acc_no']}' && status='Approved'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
    $row = $result->fetch_assoc();
		$_SESSION['ACC_NO']=$acc_no;
		$customer_netbal = $row['balance'] + $row['daily_amt'];
	$mysqli = connectdb();
	$sql1 = "Update pigmy SET balance = '$customer_netbal' WHERE acc_no = '$acc_no '";
	if($mtsqli->query($sql1) == TRUE  ){
				$conn->commit();
			echo '<script>alert("Amount credited Successfully to customer account");window.location="viewpigmyreq.php";</script>';
							
		}	
		else{	
			echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'");window.location="viewpigmyreq.php";</script>';
			
        }
	}*/
	header("location:viewpigmyreq.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['acc_no'])&& isset($_POST['reject']))
{
	$query="UPDATE pigmy SET status='Not aproove' where acc_no='{$_POST['acc_no']}'";
	$statement=$mysqli->prepare($query);
	$statement->execute();
}
?>