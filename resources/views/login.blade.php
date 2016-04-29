<html>
<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
<link href="../images/comida.png" rel="shortcut icon">
<head>
<title>AnniesKitchen</title>
</head>

<body>
<center>
<div class="titulo">Annie's Kitchen</div>
<mensaje>The best quality</mensaje>
<br><br><br><br>
<form action="home.html" method="POST">
<input type="text" placeholder="User" name="usuario" style="background:transparent; width:250px; height:40px; font-size:18px;">
<br><br><br>
<input type="password" placeholder="Password" name="password" style="background:transparent; width:250px; height:40px; font-size:18px;">
<br><br><br>
<input type="submit" class="button" value="login">
</form>
<br>
<a href="forgot.html">Forgot password?</a>
<form action= "register.php" method="POST"> 
<input type ="submit" class="button2" value="Register" /> 
</form>
<img  id="cuadro" src="../images/cuadro.png"></img>

</center>
@include('partials.navegacion')
</body>
</html>