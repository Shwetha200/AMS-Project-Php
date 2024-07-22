<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'phpmyadmin');
$Flat_id = $_POST['regno'];
$Name = $_POST['name'];
$Block = $_POST['Block'];
$Manager_name= $_POST['mgrname'];
$s = "select * from flats where Flat_id ='$Flat_id'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);


if($num ==1)
{
    echo"Flat   aldready taken";
}
    else
    {
      $register= "insert into flats values('$Flat_id','$Name','$Block','$Manager_name')";	
      mysqli_query($con,$register);
      header('Location:homelogin.php', TRUE, 302);
      echo"regitration successful";
      

    }
    
?>



	
