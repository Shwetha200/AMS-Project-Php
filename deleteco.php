<?php
include 'conn.php';
extract($_GET);
$query="delete from complaint where Complaint_no='$Complaint_no'";
mysqli_query($conn,$query);
header('location:displayco.php');

?>