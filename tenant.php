<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Enrolling Yourself</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<title>Enrolling yourself</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="apartment.jpg">
        <img src="apartment.jpg" style="height:300px;width:600px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="ashik" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
<h1 class="display-1 text-info text-center text-uppercase mb-2">Enroll Yourself</h1>


<div class="row justify-content-center">
    <form class="col-lg-8 col-md-10 col-sm-12 shadow-lg p-3" action="tenantphp.php" method="post">
        
        <div class="form group">
            <label for="stu_name"> Name</label>
            <input type="text" name="name" placeholder="Enter name of the tenant here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="address">Reference Address</label>
            <textarea name="address" class="form-control" required placeholder="Enter Reference  address here"></textarea>
        </div>
        <div class="form group">
            <label for="contact">Phone Number</label>
            <input type="text" name="contact" placeholder="Enter contact number here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="email">Email Id</label>
            <input type="text" name="email" placeholder="Enter email id here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="Warden">Manager name</label>
            <input type="text" name="mgrname" placeholder="Enter Manager name here" class="form-control" required>
        </div>
        <div class="form group">
            <label for="puc">Payement</label>
            <input type="text" name="payment" placeholder="Payment-Id" class="form-control" required>
        </div>
        <div class="form group">
            <label for="dept"> Block</label>
            <select name="block" class="form-select">
                <option>Select Block</option>
                <option>BLOCK-B1</option><option>BLOCK-B2</option><option>BLOCK-B3</option>
            </select>
        <div class="mt-3 row justify-content-center">
            <button class="col-4 btn btn-outline-primary" type="submit">Enroll</button>
            <button class="col-4 btn btn-outline-dark" type="reset">Clear</button>
        </div>
    </form>
</div>
</div>
</body>
</html>