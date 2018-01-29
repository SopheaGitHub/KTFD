<!DOCTYPE html>
<html lang="en">
<head>
	<title>Detail Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
.profile-pic {
    border-radius: 5px;
    height: 144px;
    width: 144px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic:hover {
    background-color: rgba(0,0,0,.5);
    z-index: 10000;
    color: #fff;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic span {
    display: inline-block;
    padding-top: 4.5em;
    padding-bottom: 4.5em;
}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200">

				<div class="p-t-5 p-b-20 close-form">
		        	<span aria-hidden="true"><a href="#" style="font-size:18px;"><i class="fa fa-arrow-circle-left" aria-hidden="true" title="Go to profile"></i></a></span>
		      	</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-20">
						<i class="zmdi zmdi-font"></i>
					</span>
					<span class="login100-form-title p-b-30">
						Detail Information
						<div class="form-sub-title">Tell us detail about you?</div>
					</span>

					<br />

					<div class="row">
					    <div class="col-md-6">

					    	<a href="#" class="profile-pic">
							  	<div class="profile-pic" style="background-image: url('https://s3-eu-west-1.amazonaws.com/lynks-blog/wp-content/uploads/2016/10/11153439/rsz_1shutterstock_325243652.jpg')" >

							      <span class="glyphicon glyphicon-camera"></span>
							      <span>Change Image</span>

							  </div>
							</a>

							<br />

					    	<div class="wrap-input100 validate-input" data-validate = "Enter first name">
								<input class="input100" type="text" name="first_name">
								<span class="focus-input100" data-placeholder="First Name"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter last name">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Last Name"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter company">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Company"></span>
							</div>

					    	<div class="wrap-input100 validate-input" data-validate="Enter password">
								<textarea name="textarea" class="input100 form-control" style="min-height: 122px; max-height: 122px; border:none;"></textarea>
								<span class="focus-input100" data-placeholder="Description about you"></span>
							</div>
					    </div>
					    <div class="col-md-6">

							<div class="wrap-input100 validate-input" data-validate = "Enter phone number">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Phone Number"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
								<input class="input100" type="text" name="email">
								<span class="focus-input100" data-placeholder="Email"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter address">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Address"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter city">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="City"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter post code">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Post Code"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Enter country">
								<input class="input100" type="text" name="last_name">
								<span class="focus-input100" data-placeholder="Country"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter region / state">
								<select name="select" class="input100 form-control" style="border:none;">
									<option></option>
									<option value="1">Yes</option>
									<option value="2">No</option>
								</select>
								<span class="focus-input100" data-placeholder="Region / State"></span>
							</div>

					    </div>
					</div>
					
					<br />
					<div class="row">
						<div class="col-md-9 text-right">
							<a href="#" class="btn btn-default">Skip</a>
						</div>
						<div class="col-md-3">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" style="height:39px;">
									Continue
								</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->

	<script src="js/main.js"></script>

</body>
</html>