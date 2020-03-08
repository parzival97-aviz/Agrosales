<?php
session_start();
if(isset($_POST['bidprice'])&&isset($_POST['buying_date']))
{
$bid_price =$_POST['bidprice'];
$buydate=$_POST['buying_date'];
}
if (!empty($bid_price) || !empty($buydate))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "agrosales";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }


    else
    {
        $query="select phone,first_name,last_name from vendors where userid= $_SESSION[name]";
        $result=mysqli_query($conn,$query);
        $rows=mysqli_fetch_assoc($result);
        $fullname=$rows['first_name']." ".$rows['last_name'];

        $INSERT = "INSERT Into buying_details(userid,bidprice,buying_date,vendors_phn,name,farmerid)values('$_SESSION[name]','$bid_price','$buydate','$rows[phone]','$fullname','$_SESSION[farmerid]')";
        if($conn->query($INSERT)===TRUE)
        {
      header("Location: http://localhost/Home%20page/buying%20page/vthanks.php"); 
            exit; 
          
         }
      else
      {
        echo $conn->error;
      }  

    }
}
else
{
    echo "All fields are required";
}

