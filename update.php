<?php

require('dbhelper.php');

$customer_id = $_POST['customer_id'];
$cust_name = $_POST['cust_name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$country = $_POST['country'];
$images = $_POST['images'];

$conn->query("UPDATE customers set cust_name='$cust_name', sex='$sex', age='$age',  contact='$contact', barangay='$barangay', city='$city', country='$country',  images='$images' WHERE customer_id='$customer_id' ");
if ($conn->affected_rows >= 0) {
    header("location: index.php");
} else {
    echo "Error updating product. ";
    echo '<a href="home.php">Back to Product Table</a>';
}

