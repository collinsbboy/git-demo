<!doctype html>
<html lang="zxx">
    
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/bootstrap.min.css">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/owl.carousel.min.css">
		<!-- Remixicon CSS --> 
		<link rel="stylesheet" href="/front/assets/css/remixicon.css">
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="/front/assets/css/flaticon.css">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="/front/assets/css/meanmenu.min.css">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/animate.min.css">
		<!-- Odometer Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/odometer.min.css">
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/magnific-popup.min.css">
		<!-- Date Picker Min CSS --> 
		<link rel="stylesheet" href="/front/assets/css/date-picker.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="/front/assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="/front/assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="/front/assets/images/logo.png">
		<!-- Title -->
		<title>Rucst College University</title>
		
    </head>

    <body>
		<!-- Start Preloader Area -->
		
		   <!-- Start Header Area -->
           <header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<ul class="header-left-content">
								<li>
									<a href="tel:024 977 8770">
										<i class="ri-phone-fill"></i>
										024 977 8770
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="header-right-content">
								
								<div class="my-account">
									<a href="my-account.html">
										<i class="ri-user-fill"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->
			
			<!-- Start Navbar Area --> 
			<div class="navbar-area">
                <div class="mobile-responsive-nav">
                    <div class="container">
                        <div class="mobile-responsive-menu">
                            <div class="logo">
                                <a href="/">
                                    <img src="/front/assets/images/Rucst-logo.png" width="70px" height="70px" alt="Image">
								</a>
                            </div>

							<div class="others-options-for-mobile-devices">
								<ul>
									<li>
										<a href="/admission/form" class="default-btn">
											Application Form
										</a>
									</li>
								</ul>
							</div>
                        </div>
                    </div>
                </div>

                <div class="desktop-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="/">
                                <img src="/front/assets/images/Rucst-logo.png" width="70px" height="70px" alt="Image">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="/" class="nav-link">
											Home 
										</a>
									</li>

                                    <li class="nav-item">
										<a href="about" class="nav-link">
											About Us 
										</a>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											Courses  
											<i class="ri-arrow-down-s-line"></i>
										</a>

										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="#" class="nav-link">Courses</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Tuition fees</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Courses details</a>
											</li>
										</ul>
									</li>

                                    <li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Blog 
										</a>
                                    </li>
                                </ul>

                                <div class="others-options">
									<ul>
                                        <li>
                                            <a href="/login" class="default-btn">
												Login
											</a>
										</li>
										<li>
											<a href="/admission/form" class="default-btn">
												Application form
											</a>
										</li>
									</ul>
                                </div>
                            </div>
                        </nav>
                    </div>
				</div>
            </div>
			<!-- End Navbar Area -->
		</header>
		<!-- End Header Area -->

		<!-- Start Page Title Area -->
		<div class="page-title-area bg-27">
			<div class="container">
				<div class="page-title-content">
					<h2>Application</h2>

					<ul>
						<li>
							<a href="/">
								Home 
							</a>
						</li>

						<li class="active">Application</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Candidates Resume Area -->
		<section class="candidates-resume-area ptb-100">
			<div class="container">
			<?php if (session()->get("success")): ?>
					<div class="alert alert-success" role="alert">
						<?= session()->get("success") ?>
					</div>
				<?php elseif (session()->get("error")): ?>
					<div class="alert alert-danger" role="alert">
						<?= session()->get("error") ?>
					</div>
				<?php endif; ?>
				<div class="candidates-resume-content">
					<form method="POST" action="/admission/create" class="resume-info">
						<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
						<h3>Student basic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Student's Full Name</label>
									<input class="form-control" type="text" name="studName">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Select area of study</label>
									<select class="form-control" name="course">
										<option value="">Select Course</option>
										<?php foreach($course as $rowC): ?>
											<option value="<?= $rowC['courses_id'] ?>"><?= $rowC['course_name'] ?></option>
										<?php endforeach; ?>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Contact no</label>
									<input type="text" class="form-control" name="contact">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Present address</label>
									<input type="text" class="form-control" name="address">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Date Of Barth</label>
									<div class="input-group date" id="datetimepicker">
										<input type="text" name="dob" class="form-control">
										<span class="input-group-addon"></span>
										<i class="bx bx-calendar"></i>
									</div>	
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>National ID</label>
									<input type="text" class="form-control" name="national">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Student type</label>
									<select class="form-control" name="studentType">
										<option value="">Select Student Type</option>
										 <option value="Undergraduate">Undergraduate</option>
										 <option value="Postgraduate">Postgraduate</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>
						</div>

						<h3>Student academic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>School</label>
									<input class="form-control" type="text" name="school">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label>Year of completion</label>
										<div class="input-group date" id="datetimepicker-2">
											<input type="text" name="yearC" class="form-control">
											<span class="input-group-addon"></span>
											<i class="bx bx-calendar"></i>
										</div>	
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Highest qualification</label>
									<input type="text" class="form-control" name="qualification">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Current status</label>
									<select class="form-control" name="currentS">
										<option value="">Select Current status</option>
										<option value="Student">Student</option>
										<option value="Worker">Worker</option>
									</select>
									<i class="ri-arrow-down-s-line"></i>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="form-group checkboxs">
									<input type="checkbox" require id="chb2">
									<p>
										By submitting this form, you agree to the <a href="#">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy</a> notice.
									</p>
								</div>
							</div>

							<div class="col-lg-12">
								<button type="submit" class="default-btn">
									Submit application
									<i class="ri-arrow-right-line"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Candidates Resume Area -->

		<!-- Start Footer Area -->
		<footer class="footer-area black-bg-color">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget bg-f9f5f1">
							<a href="index.html" class="logo">
								<img src="/front/assets/images/Rucst-logo.png" width="100px" height="100px" alt="Image">
							</a>

							<p>The Regent University College of Science and Technology </p>

							<ul class="social-icon">
								<li>
									<span>Follow us:</span>
								</li>
								<li>
									<a href="https://www.facebook.com/" target="_blank">
										<i class="ri-facebook-fill"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/" target="_blank">
										<i class="ri-instagram-line"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/" target="_blank">
										<i class="ri-linkedin-fill"></i>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/" target="_blank">
										<i class="ri-twitter-fill"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Useful link</h3>

							<ul class="import-link">
								<li>
									<a href="javascript:void(0);">Application</a>
								</li>
								<li>
									<a href="javascript:void(0);">FAQ</a>
								</li>
								<li>
									<a href="javascript:void(0);">Alumni</a>
								</li>
								<li>
									<a href="javascript:void(0);">Terms & conditions</a>
								</li>
								<li>
									<a href="javascript:void(0);">Privacy policy</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Study</h3>

							<ul class="import-link">
								<li>
									<a href="javascript:void(0);">Find a course</a>
								</li>
								<li>
									<a href="javascript:void(0);">Admissions</a>
								</li>
								<li>
									<a href="javascript:void(0);">Scholarships</a>
								</li>
								<li>
									<a href="javascript:void(0);">Study on campus</a>
								</li>
								<li>
									<a href="javascript:void(0);">Fees and costs</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Inquiries</h3>

							<ul class="address">
								<li class="location">
									<i class="ri-map-pin-line"></i>
									<span>Address</span>
									School Address
								</li>
								<li>
									<i class="ri-mail-line"></i>
									<span>Email</span>
									<a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="6801060e07281d060b07460b0705">[email&#160;protected]</span></a>
								</li>
								<li>
									<i class="ri-phone-line"></i>
									<span>Phone</span>
									<a href="tel:0543507718">+233 24 977 8770</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<p>
					Copyright <i class="ri-copyright-line"></i> 2021 Rucst. Design & Developed By 
					<a href="javascript:void(0);">Christopher Affram</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
		<script src="/front/assets/js/jquery.min.js"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="/front/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="/front/assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="/front/assets/js/owl.carousel.min.js"></script>
		<!-- Wow Min JS -->
        <script src="/front/assets/js/wow.min.js"></script>
		<!-- Appear Min JS -->
        <script src="/front/assets/js/appear.min.js"></script>
		<!-- Odometer Min JS -->
        <script src="/front/assets/js/odometer.min.js"></script>
		<!-- Jarallax Min JS -->
        <script src="/front/assets/js/jarallax.min.js"></script>
		<!-- Bootstrap Datepicker Min JS -->
        <script src="/front/assets/js/bootstrap-datepicker.min.js"></script>
		<!-- Magnific Popup Min JS -->
        <script src="/front/assets/js/magnific-popup.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="/front/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="/front/assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="/front/assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="/front/assets/js/custom.js"></script>
		<script src="/assets/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    </body>

</html>