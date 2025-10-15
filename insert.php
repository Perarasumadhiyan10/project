<?php
include 'demo.html';

$customer = $_POST['cust'];
$fname = $_POST['name'];
$email = $_POST['emailid'];
$address = $_POST['address'];
$product = $_POST['product'];
<<<<<<< HEAD
=======
// $date = $_POST['delivery'];
// $payment = $_POST['payment'];
>>>>>>> c58ca6aab58226098c1a8d206a284d244b295448
$number = $_POST['cont'];
$con = mysqli_connect("localhost","root","","webdesign");

if(!$con)
{
    die("connection Error".mysqli_connect_error());
}
else
{
<<<<<<< HEAD
$sql="INSERT INTO customer VALUES('$customer','$fname','$email','$address','$product','$number')";
=======
$sql="INSERT INTO customer VALUES('$customer','$fname','$email','$address','$product,'$number')";
>>>>>>> c58ca6aab58226098c1a8d206a284d244b295448
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