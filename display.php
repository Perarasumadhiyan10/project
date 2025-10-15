<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

<?php
include 'demo.html';
$con = mysqli_connect("localhost", "root", "", "webdesign");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}
$sql = "SELECT * FROM customer";
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Query Failed: " . mysqli_error($con));
}
echo "<center><h2>Customer Records</h2>";
if (mysqli_num_rows($res) > 0) {
    echo "<table border='1'>
    <tr>
        <th>Customer ID</th>
        <th>Full Name</th>
        <th>Email ID</th>
        <th>Address</th>
        <th>Product Name</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($res)) {
              $customer_id = $row['customerid'];

        echo "<tr>
            <td>" . $customer_id . "</td>
            <td>" . $row['fullname'] . "</td>
            <td>" . $row['emailid'] . "</td>
            <td>" . $row['address'] . "</td>
<<<<<<< HEAD
            <td>" . $row['productname'] . "</td>
            <td>" . $row['contactnumber'] . "</td>
=======
            <td>" . $row['product name'] . "</td>
            <td>" . $row['contact number'] . "</td>
>>>>>>> c58ca6aab58226098c1a8d206a284d244b295448
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