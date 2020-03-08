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
<html>
    <head>
        <title> Fetch Data From Database </title>
    </head>
<body>
    
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Products on Sale</h2></th>
        </tr>
        <t>
            <th> userid </th>
            <th> price </th>
            <th> productname </th>
            <th> duedate </th>
        </t>
    <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>        
            <tr>
                <td><?php echo $rows['userid']; ?></td>
                <td><?php echo $rows['price']; ?></td>
                <td><?php echo $rows['productname']; ?></td>
                <td><?php echo $rows['duedate']; ?></td>
            </tr>
    <?php     
        }
    ?>    
    </table>
    
</body>
</html>