<link rel="stylesheet" href="style2.css">
<?php
include 'demo.html';
$con = mysqli_connect("localhost", "root", "", "webdesign");

if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}
if (isset($_GET['id'])) {
    $customer_id = $_GET['id'];
    $sql = "SELECT * FROM customer WHERE customerid='$customer_id'";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
    } else {
        echo "Customer not found.";
        exit;
    }
} else {
    echo "No customer ID provided.";
    exit;
}

// --- Update customer info ---
if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $contact = $_POST['contact'];

    $update_sql = "UPDATE customer SET 
        fullname = '$fullname',
        emailid = '$email',
        address = '$address',
        productname = '$product',
        contactnumber = '$contact'
        WHERE customerid = '$customer_id'";

    $update_res = mysqli_query($con, $update_sql);

    if ($update_res) {
        echo "<script>
                alert(' Customer updated successfully!');
                window.location.href='display.php';
              </script>";
    } else {
        echo " Update failed: " . mysqli_error($con);
    }
}
?>
<form method="post">
    <h2>Edit Customer</h2>

    Full Name: 
    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br><br>

    Email ID: 
    <input type="email" name="email" value="<?php echo $row['emailid']; ?>"><br><br>

    Address: 
    <input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>

    Product Name: 
    <input type="text" name="product" value="<?php echo $row['productname']; ?>"><br><br>

    Contact No: 
    <input type="text" name="contact" value="<?php echo $row['contactnumber']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>
