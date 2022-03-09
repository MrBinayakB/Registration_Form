<?php
if(isset($_POST['username']) && isset($_POST['email'])&& isset($_POST['password'])){
    $uname=$_POST['username'];
    $umail=$_POST['email'];
    $upass=$_POST['password'];

}else{
    header("Location: registration.php");
    exit();
}
?>
<html>
    <head>
        <title>Welcome Page</title>
        <style>
            .div1{
                text-align:center;
                margin-top:8%;
            }
            #logout{
                position: fixed;
                bottom:20px;
                right:20px;
                height:30px;
            }
            #btn{
                opacity:0.9;
                font-family: cursive;
                border-radius:5px;
                color:black;
                background-color:grey;
            }
        </style>
    </head>
    <body style="background-image: linear-gradient( rgb(47, 109, 105), rgb(27, 90, 90), rgb(236, 193, 108))">
        <div class="div1" style="font-family: cursive">
            <?php
                echo "Hello ".$uname."<br>";
                echo "You are registered Now!!";
            ?>
            <br>
            
        </div>
        <span id="logout"><a href="registration.php"><input id="btn" style="height:30px; width:80px;"type="button" value="Logout"></a></span>
    </body>
</html>