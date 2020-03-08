<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$Date_of_birth=$_POST['Date_of_birth'];
$userid=$_POST['userid'];
$phone_number=$_POST['phone_number'];
$Country=$_POST['Country'];
$Gender=$_POST['Gender'];
$Aadhar_number=$_POST['Aadhar_number'];
$reqPassword=$_POST['crPassword'];
$hash=password_hash($reqPassword,PASSWORD_ARGON2I);

if (!empty($first_name) || !empty($userid) || !empty($Aadhar_number) || !empty($phone_number) || !empty($reqPassword))
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
        // $SELECT = "SELECT userid From vendors Where userid = ? Limit 1";

        $dataTime=date("Y-m-d H:i:s");
        // $SELECT = "SELECT userid From vendors Where userid = ? Limit 1";
        $INSERT = "INSERT Into vendors (first_name, last_name, Date_of_birth,Country, phone,userid, Gender, Aadhar_number, reqPassword,created_date,STRpwd) values('$first_name', '$last_name', '$Date_of_birth', '$Country', $phone_number, $userid, '$Gender', $Aadhar_number, '$reqPassword','$dataTime','$hash')";
     // $stmt = $conn->prepare($SELECT);
     // $stmt->bind_param("s", $userid);
     // $stmt->execute();
     // $stmt->bind_result($userid);
     // $stmt->store_result();
     // $rnum = $stmt->num_rows;
     if($conn->query($INSERT)===TRUE)
     {
       header("Location: http://localhost/Home%20page/vendors_login.html"); 
  
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