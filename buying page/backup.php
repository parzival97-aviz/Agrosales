<?php
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
$query="select * from product_details";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Agrosales Auction page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="popup/style.css">

  
</head>

<body>
  <! ========================  
    Syed Sahar Ali Raza   	 
  ========================	!>
<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                        <h1>Auction Page</h1>
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
    ?> 
        <div class="container">
            
            <!--BLOCK ROW START-->
            <div class="row">
                <div class="col-md-4">
                
                	<!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                            	<!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span><?php echo $rows['productname']; ?></span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">	
                                <span class="price">
                                    <span class="sign">Rs.</span>
                                    <span class="currency"><?php echo $rows['price']; ?></span>
                                    <span class="month">/Total kg</span>
                                    
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                        	<ul>
                            	<li><span><?php echo $rows['quantity']; ?>Kg&nbsp;&nbsp;&nbsp;&nbsp;</span>Quantity</li>
                                <li><span><?php echo $rows['userid']; ?></span> &nbsp;&nbsp; UserId</li>
                                <li><span><?php echo $rows['current']; ?></span> &nbsp;&nbsp; Upload date</li>
                                <li><span><?php echo $rows['duedate']; ?></span> &nbsp;&nbsp;  Due Date</li>
                                
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                        	<button class="open-button" onclick="openForm()">Open Form</button>
                            


                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <?php     
        }
    ?>
                
    </section>             
	
</div>
  
  
</body>
</html>
