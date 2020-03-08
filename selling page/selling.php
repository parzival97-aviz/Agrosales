<?php
if(!isset($_SERVER['HTTP_REFERER'])){
     header("Location: http://localhost/Home%20page/home%20page.html");  
     exit;      
}
?>

<?php
session_start();
if(isset($_POST['product_name'])&&isset($_POST['Quantity'])&&isset($_POST['Description'])&&isset($_POST['due_date']))
{
$productname=$_POST['product_name'];
$quantity=$_POST['Quantity'];
$description=$_POST['Description'];
$due_date=$_POST['due_date'];
$price=$_POST['price'];
}

if (!empty($productname) || !empty($quantity) || !empty($description)||!empty($price))
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
         $dataTime=date("Y-m-d H:i:s");
        // $SELECT = "SELECT userid From vendors Where userid = ? Limit 1";
        $INSERT = "INSERT Into product_details(productname,quantity,description,duedate,current,price,userid)values('$productname','$quantity','$description','$due_date','$dataTime','$price','$_SESSION[name]')";

    if($conn->query($INSERT)===TRUE)
     {

         header("Location: http://localhost/home%20page/selling%20page/success.html"); 
  
exit; 
        
     }
      else
      {
        echo $conn->error;
      }    
    
    }
} else {
 echo "All field are required";
 die();
}
    
?>