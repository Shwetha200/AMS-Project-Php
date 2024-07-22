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
            <caption>List of Payments</caption>
                <thead thead class="thead-dark">
                    <tr>
                        <th scope="col">Pay_id_no</th>
                        <th scope="col">Tenant_name</th>
                        <th scope="col">Ten_id_no</th>
                        <th scope="col">Accm_type</th>
                        <th scope="col">House_type</th>
                        <th scope="col">Pay_amt</th>
                        <th scope="col">Pay_type</th>
                    </tr>
                </thead>
                <?php 
                include 'conn.php';
                $query="select *from payment";
                $result=mysqli_query($conn,$query);
                while($res=mysqli_fetch_array($result)){
                ?>
                <tbody>
                     <tr>
                        <td><?php echo $res['Pay_id_no']?></td>
                        <td><?php echo $res['Tenant_name']?></td>
                        <td><?php echo $res['Ten_id_no']?></td>
                        <td><?php echo $res['Accm_type']?></td>
                        <td><?php echo $res['House_type']?></td>
                        <td><?php echo $res['Pay_amt']?></td>
                        <td><?php echo $res['Pay_type']?></td>
                                              
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



