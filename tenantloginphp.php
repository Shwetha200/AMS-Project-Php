<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'amsdatabase');
if(isset($_POST['login']))
{
    $Email_id= $_POST['Email'];
    
    $Password = $_POST['password'];
    $sql=mysqli_query($con,"SELECT * FROM tenant where Email_id ='$Email_id' and  Password ='$Password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        
        $_SESSION["Email"]=$row['Email_id'];
        $_SESSION["Name"]=$row['Name'];
        foreach( $row as $key => $value) {
            $value = trim($value);
            if(empty($value)) {
                header("Location:tenantlogin.php");
            } else {
                header("Location:homelogin.php");
            }
        }
    }
    else
    {
         echo"<script>alert('Invalid login details')</script>" ;
       
        header("Location:tenantlogin.php"); 
    }
}
?>