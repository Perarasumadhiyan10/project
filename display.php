<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

<?php
include 'demo.html';

// 1. Database Connection
$con = mysqli_connect("localhost", "root", "", "webdesign");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

// 2. SQL Query to select all customer records
$sql = "SELECT * FROM customer";
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Query Failed: " . mysqli_error($con));
}

// 3. Display Table
echo "<center><h2>Customer Records</h2>";
if (mysqli_num_rows($res) > 0) {
    echo "<table border='1'>
    <tr>
        <th>Customer ID</th>
        <th>Full Name</th>
        <th>Email ID</th>
        <th>Address</th>
        <th>Product Name</th>
        <th>Delivery Date</th>
        <th>Payment</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($res)) {
        // Use correct variable name consistently
        $customer_id = $row['customer id'];

        echo "<tr>
            <td>" . $customer_id . "</td>
            <td>" . $row['full name'] . "</td>
            <td>" . $row['email id'] . "</td>
            <td>" . $row['address'] . "</td>
            <td>" . $row['product name'] . "</td>
            <td>" . $row['deliver date'] . "</td>
            <td>" . $row['payment'] . "</td>
            <td>" . $row['contact number'] . "</td>
            <td>
                <a href='update.php?id=" . $customer_id . "'>Edit</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No records in the table";
}
echo "</center>";

mysqli_close($con);
?>