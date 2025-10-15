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
            <th>Contact Number</th>
        </tr>
        <tr>
            <td>" . $row['customerid'] . "</td>
            <td>" . $row['fullname'] . "</td>
            <td>" . $row['emailid'] . "</td>
            <td>" . $row['address'] . "</td>
            <td>" . $row['productname'] . "</td>
            <td>" . $row['contactnumber'] . "</td>
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