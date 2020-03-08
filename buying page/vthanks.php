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
$query="select first_name,last_name,phone from cultivators where userid= $_SESSION[farmerid]";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($result)
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Thank you </title>
  
  	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <body>
<style type="text/css">
  ul {
  list-style-type:none;
}
</style>

<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Contact Your Farmer </strong>Please contact for further instructions on how to complete your purchase.</p>
  <hr>
   <ul>
    <li>Farmer's Name:&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $rows['first_name']; ?>&nbsp;<?php echo $rows['last_name']; ?></span></li>

    <li>Contact No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $rows['phone']; ?></span></li>
  </ul> 
  

  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://localhost/Home%20page/buying%20page/index.php" role="button">Return to Product Page</a>
  </p>
</div>
</body>
</head>
</html>