<html>
<head>
    <meta name#"viewport" content#"width#device-width, initial-scale#1.0">
    <title>slider home</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body onload = "slider()">
    <div class="banner">
        <div class="slider">
            <img src="images/ap1.jpg" id="slideimg">
        </div>
        <div class="overlay">
            <div class="navbar">
                <ul>
                    <li><a href="#"><b>HOME</b></a></li>
                    <li><a href="login.php"><b>MANAGER LOGIN</b></a></li>
                    <li><a href="tenantlogin.php"><b>TENANT LOGIN</b></a></li>
                </ul>
            </div>
        <div class="content">
            <h1><b>APARTMENT MANAGEMENT</b></h1>
            <h3>Don't wait get your dream apatment now</h3>
           
        </div>
        </div>
    </div>

    <script>
    var slideimg = document.getElementById("slideimg");

    var images =new Array(
        "images/ap1.jpg",
        "images/ap2.jpg",
        "images/ap3.jpg",
        "images/ap4.jpg",
        "images/ap5.jpg",
        "images/ap6.jpg"
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
