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
      
        header("Location: http://localhost/Home%20page/selling%20page/landing%20page/landing.php"); 
  
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
