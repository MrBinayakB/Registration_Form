<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="registrn.css" />
    <script src="regisValid.js"></script>
</head>

<body style="background-image: linear-gradient( rgb(47, 109, 105), rgb(27, 90, 90), rgb(236, 193, 108))">
    <img id="flag" src="https://www.flags-and-anthems.com/images/flags/flag-nepal-wehende-flagge-60x45.gif" alt="">
    <h1 id="head1">REGISTRATION !!</h1>
    <div class="reg-form" style="font-family: cursive">
        <form action="login.php" method="POST">

            <div class="formprop">
                <input type="text" id="username" name="username" placeholder="Username" size="45" required onblur="clickFunc()" />
            </div>
            <div class="formprop">
                <input type="mail" id="email" name="email" placeholder="Email" size="45" required onblur="clickFunc()" />
            </div>
            <div class="formprop">
                <input type="password" id="password" name="password" placeholder="Password" size="45" required onblur="clickFunc()" />
            </div>
            <div class="formprop">
                <input type="text" id="address" name="adrress" placeholder="Address" size="45" />
            </div>
            <div class="formprop">
                <input value="+977" size="1" readonly><input type="tel" id="phonenum" placeholder="Enter Phone Number" name="phonenum" size="40" />
            </div>
            <div class="formprop">
                <h4>Enter Your DOB:<input type="date" id="DOB" name="DOB" size="35" /></h4>
            </div>
            <div id="gender">
                <label for="Gender" id="gndr"><h3>Gender:</span></label>
                <label for="male"><input type="radio" name="gender" id="male" checked />Male</label
            >
            <label for="female"
              ><input type="radio" name="gender" id="female" />Female</label
            >
            <label for="other"
              ><input type="radio" name="gender" id="other" />Other</label
            ></h3>
          </div> 
            <div>
                <input type="submit" id="button" value="Register"style="font-family: cursive" />
            </div>
        </form>
    </div>
    <div id="error">
        <span id="userError"></span><br>
        <span id="mailError"></span><br>
        <span id="passError"></span>
    </div>
    <img id=image " src="https://www.pngarts.com/files/5/Coder-PNG-High-Quality-Image.png " alt=" ">
    <script>alert("Welcome to Registration Page");</script>
</body>

</html>