<?php
include 'conn.php';
extract($_GET);
$query="delete from tenant where Ten_reg_no='$Ten_reg_no'";
mysqli_query($conn,$query);
header('location:display.php');

?>