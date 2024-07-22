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
            <caption>List of Flats</caption>
                <thead thead class="thead-dark">
                    <tr>
                        <th scope="col">Complaint_no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Complaint</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <?php 
                include 'conn.php';
                $query="select *from complaint";
                $result=mysqli_query($conn,$query);
                while($res=mysqli_fetch_array($result)){
                ?>
                <tbody>
                     <tr>
                        <td><?php echo $res['Complaint_no']?></td>
                        <td><?php echo $res['Name']?></td>
                        <td><?php echo $res['Complaint']?></td>
                        <td><a href="deleteco.php?Complaint_no=<?php echo $res['Complaint_no']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
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



