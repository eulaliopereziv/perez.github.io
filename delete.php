<?php

require ('dbhelper.php');

$customer_id = $_GET['customer_id'];
$conn->query("DELETE FROM customers WHERE customer_id=$customer_id");
if ($conn->affected_rows >= 0) {
    header("location: index.php");
} else {
    echo "Error deleting customer. ";
    echo '<a href="index.php">Back to Customer Table</a>';
}