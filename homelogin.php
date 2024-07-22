<html>
<head>
    <title>APARTMENT MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="stylehomelogin.css">
</head>
<body onload = "slider()">
    <div class="banner">
    <div class="slider">
            <img src="images1/ap7.jpg" id="slideimg">
        </div>
        <div class="navbar">
            <img src="toplogo.jpg" class="logo">
            <ul>
                <li><a href="tenant.php">TENANT</a></li>
                <li><a href="Payment.php">PAYMENT</a></li>
                <li><a href="flat.php">FLATS</a></li>
                <li><a href="complaint.php">COMPLAINTS</a></li>
                <li><a href="home.php">LOGOUT</a></li>

                
            </ul>
        </div>
        <div class="content">
            <h1>APARTMENT MANAGEMENT</h1>
            <p>DONT STOP UNTIL THE GOAL IS REACHED,<br></p>
            <div>
                <button type="button"><span></span>PANCHAMI</button>
                <button type="button"><span></span>SHARAVI</button>
            </div>
        </div>
    </div>
    <script>
    var slideimg = document.getElementById("slideimg");

    var images =new Array(
        "images1/ap7.jpg",
        "images1/ap8.jpg",
        "images1/ap9.jpg",
        "images1/ap10.jpg",
        "images1/ap11.jpg",
        "images1/ap12.jpg"
    );

    var len = images.length;
    var i = 0;
    
    function slider(){
        if(i > len-1){
            i = 0;
        }
        slideimg.src = images[i];
        i++;
        setTimeout('slider()',3000);
    }

    </script>
</body>
</html>
