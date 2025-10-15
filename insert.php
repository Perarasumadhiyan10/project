<?php
include 'demo.html';

$customer = $_POST['cust'];
$fname = $_POST['name'];
$email = $_POST['emailid'];
$address = $_POST['address'];
$product = $_POST['product'];
$number = $_POST['cont'];
$con = mysqli_connect("localhost","root","","webdesign");

if(!$con)
{
    die("connection Error".mysqli_connect_error());
}
else
{
$sql="INSERT INTO customer VALUES('$customer','$fname','$email','$address','$product','$number')";
$res =mysqli_query($con,$sql);

}

if($res)
{
    echo("Data inserted Successfully");
}
else{
    echo("Not inserted data");
}
mysqli_close($con);
?>