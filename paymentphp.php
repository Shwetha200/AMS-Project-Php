<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdatabase');
$Pay_id_no = $_POST['idno'];
$Tenant_name = $_POST['name'];
$Ten_id_no = $_POST['ten_id'];
$Accm_type	 = $_POST['acc-type'];
$House_type	= $_POST['htype'];
$Pay_amt= $_POST['payamt'];
$Pay_type	 = $_POST['paytype'];
$s = "select * from payment where Pay_id_no ='$Pay_id_no'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);


if($num ==1)
{
    echo"Payment id  aldready taken";
}
    else
    {
      $register= "insert into payment values('$Pay_id_no','$Tenant_name','$Ten_id_no','$Accm_type','$House_type','$Pay_amt','$Pay_type')";	
      mysqli_query($con,$register);
      header('Location:homelogin.php', TRUE, 302);
      echo"regitration successful";
      

    }
    
?>

	
