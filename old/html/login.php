<?php 
session_start();
if(@$_SESSION['passw']){
    header("Location:../Html/home.html");
}
?>
<html>
<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
<script src="../js/jquery.js" type="text/javascript"> </script>
<link href="../images/comida.png" rel="shortcut icon">
<head>
<title>AnniesKitchen</title>
</head>

<body>
<center>
<div class="titulo">Annie's Kitchen</div>
<mensaje>The best quality</mensaje>
<br><br><br><br>
<!--<input type="text" placeholder="User" name="usuario" style="background:transparent; width:250px; height:40px; font-size:18px;">
<br><br><br> -->
<input type="password" placeholder="Password" name="password"  id="pass" style="background:transparent; width:250px; height:40px; font-size:18px;">
<br><br><br>
<input type="submit" class="button" value="login" onclick="login()">
<br>
<!--<a href="forgot.html">Forgot password?</a>
<form action= "register.php" method="POST"> 
<input type ="submit" class="button2" value="Register" />  
</form> -->
<img  id="cuadro" src="../images/cuadro.png"></img>
</center>

<script type="text/javascript">

				function login(){
                var jsonObject = {
                    "userPassword" : $("#pass").val()
                };

                $.ajax({
                    type: "POST",
                    url: "../php/loginService.php",
                    dataType: "json",
                    data: jsonObject,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    success: function(jsonData) {
                        alert("Welcome again Annie" + "\n Your password is safe with us.");
                            window.location.replace("../Html/home.html");
             
                    },
                    error: function(errorMsg){
                        alert(errorMsg.statusText);
                    }
                });
            }

    </script>

</body>
</html>