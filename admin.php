<!DOCTYPE html>
<html lang="en">
<head>

        <title>loginLayout</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<!--

CALAKAN ID

https://templatemo.com/tm-538-digital-trend


-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>
  <li class="nav-item">
     <!-- MENU BAR -->
    <?php require 'nav.php' ?>
	<div id="main">
		<img src="icon.png">
		<h1>Login</h1>
    <form method="post" action="check_login.php">
    	<input type="text" name="username" placeholder="Username"><br> 
    	<input type="password" name="password" placeholder="password"
    	minlength="8" maxlength="20"><br>
    	<button onclick="" class="button">Login</button><br>
    </form><br>
      <label>Login Sebagai User?<a href="login.php" class="text-link"> Login Di Sini</a></label>
      </div>
</div>
</body>
</html>