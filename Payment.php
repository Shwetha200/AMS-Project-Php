<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Enrolling New Tenant</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<title>PAYMENT</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="ap3.jpg" style="height:300px;width:500px" alt="">
    </a>
    
    <div class="collapse navbar-collapse" id="">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item pe-2">
          <a class="btn btn-outline-dark active w-100 pe-2" href="homelogin.php">Home</a>
          <a class="btn btn-outline-dark w-100" href="home.php">Log out</a>
        </li>
      </ul> 
    </div>
  </div>
</nav>
<div class="container mt-3">
<h1 class="display-1 text-info text-center text-uppercase mb-2">Enter Payment Details</h1>


<div class="row justify-content-center">
    <form class="col-lg-8 col-md-10 col-sm-12 shadow-lg p-3" action="paymentphp.php" method="post">
        <div class="form group">
            <label for="regno">Payment ID-Number</label>
            <input type="text" name="idno" placeholder="Enter the Payment-Id here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="stu_name">Tenant Name</label>
            <input type="text" name="name" placeholder="Enter Tenant name here" class="form-control" required>
        </div>
        <div class="form group">
          <label for="stu_name">Tenant Id-Number</label>
          <input type="text" name="ten_id" placeholder="Enter Tenant ID-Number name here" class="form-control" required>
      </div>
        <div class="form-checked">
            <div class="form-inline">
            <label for="acc-type" class="col">Accomadation Type</label><br>
                <input type="radio" name="acc-type" value="veg" >Bachelor<br>
                <input type="radio" name="acc-type" value="nonveg">Family<br>
            </div>

            
        <div class="form-checked">
            <div class="form-inline">
            <label for="htype" class="col">House Type</label><br>
                <input type="radio" name="htype" value="AC" >Furnished<br>
                <input type="radio" name="htype" value="nonac">Un-Furnished<br>
                </div>
        <div class="form group">
            <label for="payamt">Payment Amount</label>
            <input type="text" name="payamt" placeholder="Enter your Payment Amount here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="paytype">Payment Type</label>
            <select name="paytype" class="form-select">
                <option>Select Payment Type</option>
                <option>CASH</option><option>BANKING</option><option>PHONEPAY/GPAY</option>
            </select>
        <div class="mt-3 row justify-content-center">
            <button class="col-4 btn btn-outline-primary"  type="submit">Submit</button>
            <button class="col-4 btn btn-outline-dark" type="reset">Clear</button>
        </div>
    </form>
</div>
</div>
</body>
</html>


