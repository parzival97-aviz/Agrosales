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
$query="select * from buying_details where farmerid=$_SESSION[name]";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Selling Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
 </head>
 <body>

<section>
  <!--for demo wrap-->
  <h1 style="color: blue;text-align: center;bottom: 20px;">BUYER DETAILS</h1>
  <div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
  
<div class="table100 ver3 m-b-110">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">Vendor's ID</th>
                  <th class="cell100 column2">Vendor's Name</th>
                  <th class="cell100 column3">Buy Date</th>
                  <th class="cell100 column4">Contact</th>
                  <th class="cell100 column5">bid price</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table100-body js-pscroll">
            <table>
      <tbody>
        <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
    ?> 
        <tr class="row100 body">
                  <td class="cell100 column1"><?php echo $rows['userid']; ?></td>
                  <td class="cell100 column2"><?php echo $rows['name']; ?></td>
                  <td class="cell100 column3"><?php echo $rows['buying_date']; ?></td>
                  <td class="cell100 column4"><a href="tel:<?php echo $rows['Vendors_phn']; ?>"><?php echo $rows['Vendors_phn']; ?></td>
                  <td class="cell100 column5">Rs. <?php echo $rows['bidprice']; ?> /-</td>
                </tr>
                  <?php     
        }
    ?>
       

     </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- follow me template -->


<script src="script.js"></script>
</body>
</html>
