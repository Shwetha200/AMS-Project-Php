<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdatabase');
if(isset($_POST['register']))
{
$Name = $_POST['name'];
$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Password = $_POST['password'];
$s = "select * from manager where Email_id ='$Email_id'";
$result = mysqli_query($con,$s);
$num =mysqli_num_rows($result);

if($num ==1)
{
    echo"Email-id aldready taken";
}
    else
    {
      $register= "insert into manager values('$Name','$Phone','$Email_id','$Password')";
      mysqli_query($con,$register);
      header('Location:login.php', TRUE, 302);
      echo"regitration successful";
     

    }
}   
?>



<!-- if($num ==1)
{
    echo"Email-id aldready taken";
}
    else
    {
      $register= "insert into manager values('$Name','$Phone','$Email_id','$Password')";
      mysqli_query($con,$register);
      header('Location:login.php', TRUE, 302);
      echo"regitration successful";
     

    }
}   
?> -->