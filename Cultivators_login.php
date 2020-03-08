
<?php session_start();
?>
<?php 
/*if(isset($_POST['uname']&&isset($_POST['pass'])))
{*/
$uname=$_POST['uname'];
$pass=$_POST['pass'];


$error=" ";
$success= " ";
$msg= " ";

$sql="select * from cultivators where userid = '$uname'";
$conn=mysqli_connect("localhost","root","");
if(!$conn){
    $error= "Error connecting Database";
}
mysqli_select_db($conn,"agrosales");
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
if($rows)
{
    if(password_verify($pass, $rows['STRpwd'])){
        $error="";
        $success= "Welcome".$uname."!!!";
        $msg= " ";
        $_SESSION['name']=$uname;
        header("Location: http://localhost/home%20page/selling%20page/index.html"); 
  
exit; 
    }
    else{
        $error="INVALID PASSWORD";
        $success= " ";
        $msg= "Try Again";
        echo $error;
        echo $msg;
        }
}
else
{
$error="INVALID Username!";
$success= " ";
$msg= "Try again";
echo "User Id and password Does not match";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login_cultivators</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="img/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/login/Cultivators/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="Animations/login/cultivators/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/login_css/Cultivators/util.css">
	<link rel="stylesheet" type="text/css" href="css/login_css/Cultivators/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="cultivator_login.php" class="login100-form validate-form p-l-55 p-r-55 p-t-178"method="POST" >
					<span class="login100-form-title">
						Log-In
						<br><p id="names">(Cultivators)</p>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="uname" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<!-- <span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a> -->
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" value="Submit" name="submit"class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="Registration page/cultivators/Cultivator_registration.html" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<script src="js/login/cultivators/jquery-3.2.1.min.js"></script>

	<script src="js/login/cultivators/animsition.min.js"></script>

	<script src="js/login/cultivators/popper.js"></script>
	<script src="js/login/cultivators/bootstrap.min.js"></script>

	<script src="js/login/cultivators/select2.min.js"></script>

	<script src="js/login/cultivators/moment.min.js"></script>
	<script src="js/login/cultivators/daterangepicker.js"></script>

	<script src="js/login/cultivators/countdowntime.js"></script>

	<script src="js/login/cultivators/main.js"></script>

</body>
</html>