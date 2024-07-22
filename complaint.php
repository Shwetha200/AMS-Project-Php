<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>COMPLAINT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://sites.google.com/mite.ac.in/cse/activities?authuser=0">
        <img src="ap3.JPG" style="height:200px;width:200px" alt="CS">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#panchami" aria-controls="ashik" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="panchami">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item pe-2">
          <a class="btn btn-outline-info active w-100 pe-2" href="homelogin.php">Home</a>
          <a class="btn btn-outline-info w-100" href="home.php">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">
<h1 class="display-1 text-danger text-center text-uppercase mb-2">Enter  Complaint Details</h1>


<div class="row justify-content-center">
    <form class="col-lg-8 col-md-10 col-sm-12 shadow-lg p-3" action="cphp.php" method="post">
    <div class="form group">
            <label for="regno">Flat ID-Number</label>
            <input type="text" name="regno" placeholder="Enter Flat number" class="form-control" required>
        </div>
        <div class="form group">
            <label for="stu_name">Name of the Tenant</label>
            <input type="text" name="name" placeholder="Enter Tenant name here" class="form-control" required>
            <div class="form group">
            <label for="complaint">Complaint</label>
            <textarea name="complaint" class="form-control"  required placeholder="Tenant complaint here"></textarea>
        </div>
        <div class="mt-3 row justify-content-center">
            <button class="col-4 btn btn-outline-primary" type="submit">Submit</button>
            <button class="col-4 btn btn-outline-dark" type="reset">Clear</button>
        </div>
    </form>
</div>
</div>
</body>
</html>
