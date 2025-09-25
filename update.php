
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">
<?php
include 'demo.html';
$con = mysqli_connect("localhost", "root", "", "webdesign");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $customer = $_POST['customer'];
    $fname    = $_POST['fullname'];
    $email    = $_POST['emailid'];
    $address  = $_POST['address'];
    $product  = $_POST['product'];
    $date     = $_POST['date'];
    $payment  = $_POST['payment'];
    $number   = $_POST['number'];
    
    $sql = "UPDATE customer 
            SET `full name` = '$fname', 
                `email id` = '$email', 
                `address` = '$address', 
                `product name` = '$product', 
                `deliver date` = '$date', 
                `payment` = '$payment', 
                `contact number` = '$number' 
            WHERE `customer id` = '$customer'";

$res = mysqli_query($con, $sql);

if ($res) {
        $query = "SELECT * FROM customer WHERE `customer id` = '$customer'";
        $result = mysqli_query($con, $query);
        if ($row = mysqli_fetch_assoc($result)) {
             echo "<center>";
            echo "<table border='1'>
                    <tr>
                    <th>Customer ID</th>
                        <th>Full Name</th>
                        <th>Email ID</th>
                        <th>Address</th>
                        <th>Product Name</th>
                        <th>Deliver Date</th>
                        <th>Payment</th>
                        <th>Contact Number</th>
                    </tr>
                    <tr>
                        <td>{$row['customer id']}</td>
                        <td>{$row['full name']}</td>
                        <td>{$row['email id']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['product name']}</td>
                        <td>{$row['deliver date']}</td>
                        <td>{$row['payment']}</td>
                        <td>{$row['contact number']}</td>
                        </tr>
                        </table>";
                   echo "</center>";
                } else {
            echo "Customer not found after update.";
        }
    } else {
        echo "Update failed: ";
    }
}
mysqli_close($con);
?>
<div class="customer">
    <form method="post" action="">
        Customer ID: <input type="text" name="customer"><br><br>
        Full Name: <input type="text" name="fullname"><br><br>
        Email: <input type="text" name="emailid"><br><br>
        Address: <input type="text" name="address"><br><br>
        Product Name: <input type="text" name="product"><br><br>
        Delivery Date: <input type="date" name="date"><br><br>
        Payment: <input type="text" name="payment"><br><br>
       Contact Number: <input type="text" name="number"><br><br>
        <center><button type="submit" name="update">Update</button></center>
    </form>
</div>

