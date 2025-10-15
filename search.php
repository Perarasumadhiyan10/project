<link rel="stylesheet" href="style.css">
<?php
include 'demo.html';

$con = mysqli_connect("localhost", "root", "", "webdesign");

$cust = '';
if (isset($_GET['cust'])) {
    $cust = trim($_GET['cust']);
}

if (isset($_GET['search'])) {
    $sql = "SELECT * FROM customer WHERE `customerid`='$cust'";
    $res = mysqli_query($con, $sql);

    if ($res && mysqli_num_rows($res) >= 0) {
        $row = mysqli_fetch_assoc($res);
        echo "<center>";
        echo "<table border='1'>
        <tr>
            <th>Customer ID</th>
            <th>Full Name</th>
            <th>Email ID</th>
            <th>Address</th>
            <th>Product Name</th>
<<<<<<< HEAD
=======
            // <th>Deliver Date</th>
            // <th>Payment</th>
>>>>>>> c58ca6aab58226098c1a8d206a284d244b295448
            <th>Contact Number</th>
        </tr>
        <tr>
            <td>" . $row['customerid'] . "</td>
            <td>" . $row['fullname'] . "</td>
            <td>" . $row['emailid'] . "</td>
            <td>" . $row['address'] . "</td>
<<<<<<< HEAD
            <td>" . $row['productname'] . "</td>
            <td>" . $row['contactnumber'] . "</td>
=======
            <td>" . $row['product name'] . "</td>
            // <td>" . $row['deliver date'] . "</td>
            // <td>" . $row['payment'] . "</td>
            <td>" . $row['contact number'] . "</td>
>>>>>>> c58ca6aab58226098c1a8d206a284d244b295448
            </tr>
            </table>";
         echo "</center>";
    } else {
        echo "<p>No record found!</p>";
    }
}
?>

<link rel="stylesheet" href="style2.css">
<body>
    
    <form method="get">
        <h2>Search Customer</h2>
        <h4>Enter Customer ID:</h4> 
        <input type="text" name="cust"><br><br>
        <button type="submit" name="search">Search</button>
    </form>
    <br>
</body>