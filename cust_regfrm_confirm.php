

<html lang="en">
<?php 
			session_start();
			if(!isset($_SESSION['$cust_acopening'])){
				
				header('location:cus_acc.php');
				
			}

			if(isset($_POST['submit'])){

				
				$_SESSION['$cust_acopening'] = TRUE;
				$_SESSION['cust_name']=$_POST['name'];
				$_SESSION['gender']=$_POST['gender'];
				$_SESSION['mobile']=$_POST['mobile'];
				$_SESSION['email']=$_POST['email'];

				$_SESSION['dob']=$_POST['dob'];
				$_SESSION['pan_no']=$_POST['pan_no'];
				$_SESSION['adharno']=$_POST['adharno'];
				$_SESSION['homeaddrs']=$_POST['homeaddrs'];

				
				$_SESSION['city']=$_POST['city'];
				
				$_SESSION['pass']=$_POST['pass'];
				
				header('location:cust_regfrm_confirm.php');
			}
			?>
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
		<link rel="stylesheet" type="text/css" href="css/cust_regfrm_confirm.css" />
    </head>

    <body >

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
                    <h1 class="display-6 text-primary m-0"><img src="img/logo.png" alt="Logo"></i>Fusion Finance</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link ">Home</a>
                        <a href="about.html" class="nav-item nav-link active">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        
                        
                    </div>
                    <a href="login.html" class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log In</a>
                    
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
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Confirm your Details</h1>
                    
            </div>
        </div>
        <!-- Header End -->
	
		<div class="cust_regfrm_cnfrm_container">
		<div class="cnfrm_info">
			 <span><?php echo "Name : ".$_SESSION ['cust_name']."<br>"; ?> </span>
			 <span><?php echo "Gender : ".$_SESSION['gender']."<br>"; ?> </span>
			 <span><?php echo "Mobile No : ".$_SESSION['mobile']."<br>"; ?> </span>
			 <span><?php echo "Email Id : ".$_SESSION['email']."<br>"; ?> </span>

			 <span><?php echo "DOB : ".$_SESSION['dob']."<br>"; ?> </span>
			 <span><?php echo "PAN No : ".$_SESSION['pan_no']."<br>"; ?>  </span>
			 <span><?php echo "Adharno No : ".$_SESSION['adharno']."<br>"; ?> </span>
			 <span><?php echo "Home Address : ".$_SESSION['homeaddrs']."<br>"; ?>  </span>
			
			 <span><?php echo "City : ".$_SESSION['city']."<br>"; ?> </span>
			 
			  
			 <form action="reg_ac.php" method="post">
			 <div class="cnfrm-btn">
			 <div class="btn_innerdiv">
			 <input class="cnfrm-submit-btn" type="submit" name="cnfrm-submit" value="Confirm" />
			 <input class="cnfrm-submit-btn" type="button" value="Go back" onclick="history.back()"/>
			 </div>
			 </div>
			 </form>
		 </div>	 
		</div>
		
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>



	
