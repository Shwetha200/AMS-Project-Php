<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdatabase');
$Ten_reg_no = $_POST['regno'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Managername = $_POST['mgrname'];
$Payment = $_POST['payment'];
$Block = $_POST['block'];
$s = "select * from tenant where Email_id ='$Email_id'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);
if($num ==1)
{
    echo"email-id aldready taken";
}
    else
    {
      $register= "insert into tenant values('$Ten_reg_no','$Name','$Address','$Phone','$Email_id','$Managername','$Payment','$Block')";
      mysqli_query($con,$register);
      header('Location:homelogin.php', TRUE, 302);
      echo"regitration successful";
      

    }
    
?>