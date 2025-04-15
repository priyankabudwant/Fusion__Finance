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
                        <a href="admin.php" class="nav-item nav-link">Dashboard</a>
                         <a href="viewallaccounts.php" class="nav-item nav-link">View Accounts</a> 
                        <a href="viewloanreques.php" class="nav-item nav-link ">Grant Loan</a>
                        <a href="viewstaffreq.php" class="nav-item nav-link ">Staff Requests</a>
                        <!--  <a href="contact.html" class="nav-item nav-link">Contact Us</a>-->
                    </div>
                    
                    <a href="adlogout.php" class="btn btn-primary rounded-pill text-white py-2 px-4">logout</a>
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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">View Loan</h1>
                    
            </div>
        </div>
        <!-- Header End -->


        <!-- Pricing Start 
        <div class="container-fluid price py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Pricing Plan</h4>
                    <h1 class="display-5 mb-4">Not Sure Which Plan Is For You?</h1>
                    <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                    </p>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="price-item bg-light rounded text-center">
                            <div class="text-center text-dark border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                                <p class="fs-2 fw-bold text-uppercase mb-0">BASIC</p>
                                <div class="d-flex justify-content-center">
                                    <strong class="align-self-start">$</strong>
                                    <p class="mb-0"><span class="display-5">00</span>/mo</p>
                                </div>                        
                            </div>
                            <div class="text-start p-5">
                                <p><i class="fas fa-check text-success me-1"></i> Limited Acess Library</p>
                                <p><i class="fas fa-check text-success me-1"></i> Customer Support</p>
                                <p><i class="fas fa-check text-success me-1"></i> Pre-built Email Templates</p>
                                <p><i class="fas fa-check text-success me-1"></i> Reporting & Analytics</p>
                                <p><i class="fas fa-check text-success me-1"></i> Forms & Landing Pages</p>
                                <p><i class="fas fa-check text-success me-1"></i> A/B Testing</p>
                                <p><i class="fas fa-check text-success me-1"></i> Email Scheduling</p>
                                <p><i class="fas fa-check text-success me-1"></i> Automated Customer Journeys</p>
                                <p><i class="fas fa-times text-danger me-1"></i> Creative Assistant</p>
                                <p class="mb-4"><i class="fas fa-times text-danger me-1"></i> Role-based Access</p>
                                <button class="btn btn-light rounded-pill py-2 px-5" type="button">Get Started</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item bg-light rounded text-center">
                            <div class="pice-item-offer">Popular</div>
                            <div class="text-center text-primary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                                <p class="fs-2 fw-bold text-uppercase mb-0">Standard</p>
                                <div class="d-flex justify-content-center">
                                    <strong class="align-self-start">$</strong>
                                    <p class="mb-0"><span class="display-5">23</span>/mo</p>
                                </div>                        
                            </div>
                            <div class="text-start p-5">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item bg-light rounded text-center">
                            <div class="text-center text-secondary border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                                <p class="fs-2 fw-bold text-uppercase mb-0">Premium</p>
                                <div class="d-flex justify-content-center">
                                    <strong class="align-self-start">$</strong>
                                    <p class="mb-0"><span class="display-5">49</span>/mo</p>
                                </div>                        
                            </div>
                            <div class="text-start p-5">
                                <p><i class="fas fa-check text-success me-1"></i> Limited Acess Library</p>
                                <p><i class="fas fa-check text-success me-1"></i> Customer Support</p>
                                <p><i class="fas fa-check text-success me-1"></i> Pre-built Email Templates</p>
                                <p><i class="fas fa-check text-success me-1"></i> Reporting & Analytics</p>
                                <p><i class="fas fa-check text-success me-1"></i> Forms & Landing Pages</p>
                                <p><i class="fas fa-check text-success me-1"></i> A/B Testing</p>
                                <p><i class="fas fa-check text-success me-1"></i> Email Scheduling</p>
                                <p><i class="fas fa-check text-success me-1"></i> Automated Customer Journeys</p>
                                <p><i class="fas fa-times text-danger me-1"></i> Creative Assistant</p>
                                <p class="mb-4"><i class="fas fa-times text-danger me-1"></i> Role-based Access</p>
                                <button class="btn btn-light rounded-pill py-2 px-5" type="button">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Pricing End -->

<?php
	include 'connects.php';
	$mysqli=connectdb();
if($mysqli->connect_error)
	{
	die("Connection Failed ".$mysqli->connect_error);
	}
	
	$sql="Select * from loan where Cid='{$_GET['Cid']}'";
	$result=$mysqli->query($sql);
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{	
	echo' 
	<center>
	<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s" >
                        <div width="500" class="price-item bg-light rounded text-center">
                            <div class="text-center text-dark border-bottom d-flex flex-column justify-content-center p-4" style="width: 100%; height: 160px;">
                                <p class="fs-2 fw-bold text-uppercase mb-0">More details</p>
                                                      
                            </div>
                            
                            <div class="text-start p-5" style="text-align:left">
                                			 
									<p><i class="fas fa-check text-success me-1"></i>Loan:'.$row['loan_no'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Customer ID:'.$row['Cid'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Account NO:'.$row['acc_no'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Nominee Name:'.$row['nominee_name'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Nominee No:'.$row['nominee_no'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Ocupation:'.$row['nocupation'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Loan_Type:'.$row['loan_type'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>RTC:<a href="upload/'.$row['rtc'].'">'.$row['rtc'].' <a></p>
									<p><i class="fas fa-check text-success me-1"></i>Permission letter:<a href="upload/'.$row['perm_letter'].'">'.$row['perm_letter'].'</a></p>
									<p><i class="fas fa-check text-success me-1"></i>Admission proof:<a href="upload/'.$row['admi_proof'].'">'.$row['admi_proof'].'</a></p>
									<p><i class="fas fa-check text-success me-1"></i>Income certificate:<a href="upload/'.$row['inc_cert'].'">'.$row['inc_cert'].'</a></p>
									<p><i class="fas fa-check text-success me-1"></i>Vehicle document:<a href="upload/'.$row['veh_doc'].'">'.$row['veh_doc'].'</a></p>
									<p><i class="fas fa-check text-success me-1"></i>Loan ammount:'.$row['lammount'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>repayment period from:'.$row['rperiod'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>repayment period from:'.$row['eperiod'].'</p>
									<p><i class="fas fa-check text-success me-1"></i>Applied Date:'.$row['adate'].'</p>
                            </div>
                        </div>
                    </div></center>
		
			
		';   
		}         
	}             
	?> 
        


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