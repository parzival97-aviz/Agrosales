<?php
if(!isset($_SERVER['HTTP_REFERER'])){
	 session_destroy();
     header("Location: http://localhost/Home%20page/index.html");  
     exit;      
}
?>
<?php
session_start();

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "agrosales";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
?>


<?php 
/*include_once('connection.php');*/
$query="select first_name,last_name,phone from cultivators where userid= $_SESSION[name]";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script src="js/noback.js"></script>
	<meta charset="utf-8">
	<title>Farmer's login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- preloader section -->

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<h6 class="navbar-brand">Welcome <?php echo $rows['first_name']; ?>&nbsp;<?php echo $rows['last_name']; ?>(<?php echo $_SESSION['name']; ?>)</h6></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				
				<li></li>
				<li><a href="logout.php" type="button" class="smoothScroll">Logout</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>Looking to sell your product? Try uploading your product online</h3>
				<h1>AGRO SALES</h1>
				<hr>
				<a href="http://localhost/home%20page/selling%20page/index.php" class="smoothScroll btn btn-danger">Upload your Product</a>
				<a href="http://localhost/Home%20page/selling%20page/vendorbid/vendorbid.php" class="smoothScroll btn btn-default">View Cart</a>
			</div>
		</div>
	</div>		
</section>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>