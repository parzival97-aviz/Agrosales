<?php
if(!isset($_SERVER['HTTP_REFERER'])){
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
  ========================  !>
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
                                <li><span><?php echo $rows['userid'];$_SESSION['farmerid']=$rows['userid']; ?></span> &nbsp;&nbsp; UserId</li>
                                <li><span><?php echo $rows['current']; ?></span> &nbsp;&nbsp; Upload date</li>
                                <li><span><?php echo $rows['duedate']; ?></span> &nbsp;&nbsp;  Due Date</li>
                                <li><p>Set your price
                                    <form action="buying_details.php" method="POST">
                                    <input type="number" name="bidprice" min="<?php echo $rows['price'];?>" max="<?php echo $rows['price']*5;?>" step=50></p></li>
                                <li><p>You buy Date
                                    <input type="date" name="buying_date" max="<?php echo $rows['duedate']; ?>"></p></li>
                                    <div class="generic_price_btn clearfix">
                            <!-- <a class="" href="../home page.html" id="myBtn">Bid Amount</a> -->
                            <button type="submit" value="Submit" name="submit">
                            Bid Amount
                        </button>

                        </div>
                                   
                        <!--//FEATURE LIST END-->
                            </ul>
                             </form>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                       
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <?php     
        }
    ?>
            
    </section>             
    
</div>
  
<script type="text/javascript">
    (function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
</script>
</body>
</html>

<!-- php for Buying_details-->





                       
                       
                        