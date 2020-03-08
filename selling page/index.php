
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
     header("Location: http://localhost/Home%20page/index.html");  
     exit;      
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Selling Page</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Sell your product here</h2>
                </div>
                <div class="card-body">
                   <form action="selling.php" method="POST"  id="selling-form">
                        <div class="form-row">
                            <div class="name">Product Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="product_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Product Quantity</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Quantity"placeholder="eg :- 20kg">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="Description" placeholder="Enter the product description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Starting price(In Rupees)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="price"placeholder="eg :- 1000">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Auction due date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="due_date">
                                </div>
                            </div>
                        </div>
<div class="card-footer">
                    <input type="submit" value="Submit" class="btn btn--radius-2 btn--blue-2" id="submit" name="submit"/>
                </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->