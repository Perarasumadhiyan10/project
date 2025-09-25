<link rel="stylesheet" href="style2.css">
<?php
include 'demo.html';

$con = mysqli_connect("localhost","root","","webdesign");

if(!$con)
{
    die("connection Error".mysqli_connect_error());
}
if(isset($_POST['delete']))
{
    $customer = $_POST['cust'];

$sql = "Delete from customer where `customer id` = '$customer'";
$res =mysqli_query($con,$sql);


if($res)
{
    echo(" ");
}
}
else
    {
        echo(" No Data Deleted ");
        
}



mysqli_close($con);
?>

<form method="post">
    <h1>Delete Cuctomer Details</h1>
    <h4> Enter Customer Id:</h4><br>
    <input type="text" name="cust" value=" " style=" size=20,"> 
    <br><br>
    <button type="submit" name="delete" >Delete</button>
  </form>