<?php 
session_start(); 
if($_SESSION['CID'] == FALSE)
{
	 header('location:login.html');

}

		include 'connects.php';
		$conn =connectdb();
		$Cid=$_SESSION['CID'];
		$sql="SELECT * FROM account WHERE Cid='$Cid'";
		$result=$conn->query($sql);
		if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
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
					<a href="shownews.php" class="nav-item nav-link ">View News</a>
                        <a href="loan.html" class="nav-item nav-link">Apply Loan</a>
                        <a href="cus_acc_open.html" class="nav-item nav-link">Create Account</a>
                        <a href="pigmy.html" class="nav-item nav-link ">Create Pigmy Account</a>
						<a href="loancal.html" class="nav-item nav-link ">Loan Calculator</a>
                        <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="pricing.html" class="dropdown-item">Pricing</a>
                                <a href="blog.html" class="dropdown-item">Blog</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>-->
                    </div>
                    
                    <a href="logout.php" class="btn btn-primary rounded-pill text-white py-2 px-4">Logout</a>
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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">User Dashboard</h1>
                  
            </div>
        </div>
        <!-- Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary"></h4>
                    <h1 class="display-5 mb-4">Welcome <?php echo $_SESSION['NAME']; ?> </h1>
                    <p class="mb-0"></p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a6.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Request Account</h4>
                                <p class="mb-4">You can request for account creating filling form here.
                                </p>
                                <a href="cus_acc_open.html" class="btn btn-light rounded-pill text-primary py-2 px-4">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a2.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">View Account Status </h4>
                                <p class="mb-4">Check the accuont status, whether it is accepted or not.

                                </p>
                                <a href="viewAccountStatus.php" class="btn btn-light rounded-pill text-primary py-2 px-4">View</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a2.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">View Trasactions</h4>
                                <p class="mb-4">Check the trasaction details, whether it is accepted or not.

                                </p>
                                <a href="viewpassbook.php" class="btn btn-light rounded-pill text-primary py-2 px-4">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a8.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Apply Pigmy</h4>
                                <p class="mb-4">Advisory services for financial planning and investment.
                                </p>
                                <a href="pigmy.html" class="btn btn-light rounded-pill text-primary py-2 px-4">Create</a>
                            </div>
                        </div>
                    </div>
					<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a7.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">View Pigmy Status </h4>
                                <p class="mb-4">Check the pigmy accuont status, whether it is accepted or not.
                                </p>
                                <a href="viewpigmystatus.php" class="btn btn-light rounded-pill text-primary py-2 px-4">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a1.png" class="fas fa-thumbs-up fa-5x text-secondary" height="80px" width="80px"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Apply Loan</h4>
                                <p class="mb-4">You can apply for loan and we will Contact.
                                </p>
                                <a href="loan.html" class="btn btn-light rounded-pill text-primary py-2 px-4">Apply</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="img/a2.png" class="fas fa-thumbs-up fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">View Loan Status</h4>
                                <p class="mb-4">Check the loan applied status, whether it is accepted or not.
                                </p>
                                <a href="veiwloanstatus.php" class="btn btn-light rounded-pill text-primary py-2 px-4">View</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><i class="fa fa-subway fa-5x text-secondary"></i></div>
                            <div class="service-content">
                                <h4 class="mb-4">Give Feedback</h4>
                                <p class="mb-4">Give the feedback what you think about us.
                                </p>
                                <a href="contact.html" class="btn btn-light rounded-pill text-primary py-2 px-4">Give</a>
                            </div>
                        </div>
                    </div>
                    
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
                            <a href=""> Create Account</a>
                            <a href=""> Pigmy Account</a>
                            <a href=""> Apply Loans</a>
                            
                            <a href=""> Feedback</a>
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
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">B K Priyanka</a>
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