<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ssn = $_POST['ssn'];
    $name = mysqli_real_escape_string($con, $_POST['Name']);
    $phoneNo = mysqli_real_escape_string($con, $_POST['PhoneNo']);

    // Update query
    $updateQuery = "UPDATE WALLET_ACCOUNT SET Name = '$name', PhoneNo = '$phoneNo' WHERE SSN = '$ssn'";

    if (mysqli_query($con, $updateQuery)) {
        echo "<script>alert('Information updated successfully.'); window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Update failed. Please try again.');</script>";
    }
}
?>
