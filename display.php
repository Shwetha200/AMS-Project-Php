<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="containeer">
        <div class="row">
            <div class="col-lg-12">
            <table class="table caption-top">
            <caption>List of Tenants</caption>
                <thead thead class="thead-dark">
                    <tr>
                        <th scope="col">Ten_reg_no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email_id</th>
                        <th scope="col">Managername</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Block</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <?php 
                include 'conn.php';
                $query="select *from tenant";
                $result=mysqli_query($conn,$query);
                while($res=mysqli_fetch_array($result)){
                ?>
                <tbody>
                     <tr>
                        <td><?php echo $res['Ten_reg_no']?></td>
                        <td><?php echo $res['Name']?></td>
                        <td><?php echo $res['Address']?></td>
                        <td><?php echo $res['Phone']?></td>
                        <td><?php echo $res['Email_id']?></td>
                        <td><?php echo $res['Managername']?></td>
                        <td><?php echo $res['Payment']?></td>
                        <td><?php echo $res['Block']?></td>
                        <td><a href="delete.php?Ten_reg_no=<?php echo $res['Ten_reg_no']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
                        <td><a href="updateten.php?Ten_reg_no=<?php echo $res['Ten_reg_no']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>                        
                    </tr>
                </tbody>

                <?php }?>
</table>

<center>
    <a href="homemanager.php"><button> HOME </button></a>
                </center>

            </div>
        </div>
    </div>
</body>
</html>



