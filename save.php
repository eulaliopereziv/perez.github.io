<?php

require('dbhelper.php');

$cust_name = $_POST['cust_name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$country = $_POST['country'];
$images = $_POST['images'];


$conn->query("INSERT INTO customers set cust_name='$cust_name', sex='$sex', age='$age', contact='$contact', barangay='$barangay', city='$city', country='$country', images='$images'  ");
if ($conn->affected_rows >= 0) {
    header("location: index.php");
} else {
    echo "Error inserting customer. ";
    echo '<a href="index.php">Back to Customer Table</a>';
}