<?php
include 'conn.php';


$Phone = $_POST['contact'];
$Email_id= $_POST['email'];
$Ten_reg_no=$_POST['id'];
if(count($_POST)!=0)
{
    extract($_POST);
    extract($_GET);
    $query="update tenant set Phone='$Phone',Email_id='$Email_id' where Ten_reg_no='$Ten_reg_no'";
    $result=mysqli_query($conn,$query);
    if($result==true)
    {
        echo "updated details";
        header('location:display.php');
    }
    else
    {
        echo "failed";
    }
}

?>
