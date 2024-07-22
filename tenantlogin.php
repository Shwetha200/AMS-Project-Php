<html>
    <head>
        <title> APARTMENT MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" href="stylelogin.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log-In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>    
                </div>
        <div class="social-icons">
            <img src="fb.png">
            <img src="tw.png">
            <img src="gp.png">
        </div>    
        <form id="login" class="input-group" action="tenantloginphp.php" method="post">
            <input type="email" name="Email" class="input-field" placeholder="Email-id" >
            <br>
            <input type="password"  name="password" class="input-field" placeholder="Enter Password " >
            <button type="submit" name="login" class="submit-btn">Log-In</button>
        </form>
        <form id="register" class="input-group" action="tenantregisterphp.php" method="post">
            <input type="text" name="name" class="input-field" placeholder="Name "><br>
            <input type="text" name="contact" class="input-field" placeholder="Phone " ><br>
            <input type="email" name="email" class="input-field" placeholder="Email-id" ><br>
            <input type="password" name="password" class="input-field" placeholder="Enter Password ">
            <button type="submit" name="register" class="submit-btn" >Register</button>
        </form>
        <!-- <form id="register" class="input-group" action="tenantregisterphp.php" method="post">
            <input type="text" name="name" class="input-field" placeholder="Name "><br>
            <input type="text" name="contact" class="input-field" placeholder="Phone " ><br>
            <input type="email" name="email" class="input-field" placeholder="Email-id" ><br>
            <input type="password" name="password" class="input-field" placeholder="Enter Password ">
            <button type="submit" name="register" class="submit-btn" >Register</button>
        </form> -->
    </div>
        </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
    </body>
</html>