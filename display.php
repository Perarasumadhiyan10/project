<link rel="stylesheet" href="style.css">

<?php
include 'demo.html';
$con = mysqli_connect("localhost","root","","webdesign");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}

$sql = "SELECT * FROM customer";
$res = mysqli_query($con, $sql);

if (!$res) {
    die("Query Failed: " . mysqli_error($con));
}

if (mysqli_num_rows($res) >= 0) {
    echo "<center>";
    echo "<table border='1'>
    <tr><th>Customer id</th>
    <th>Full Name</th>
    <th>Email id</th>
    <th>Address</th>
    <th>Product Name</th>
    <th>Delivery Date</th>
    <th>Payment</th>
    <th>Contact No</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($res)) { 

    echo "<tr>
        <td>" .$row['customer id']."</td>
        <td>" . $row['full name']."</td>
       <td>" . $row['email id']." </td>
      <td> " .$row['address'] ."</td>
       <td>" . $row['product name']." </td>
      <td>" . $row['deliver date']." </td>
      <td> " .$row['payment'] ."</td>
      <td>" . $row['contact number']." </td>
    </tr>";
    }
echo "</table>";
 echo "</center>";
} else {
    echo "NO records in the Table";
}

mysqli_close($con);
?>




