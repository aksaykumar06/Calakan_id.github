
<!DOCTYPE html>
<html lang="en">
<head>

    <title>REGISTRASI</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style-regis.css">
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

     <!-- MENU BAR -->
    <?php require 'nav.php' ?>
	<div class="main">

         <?php
        require 'config/koneksi.php';
        /* handle error */
        if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Warning!</strong> <?= base64_decode($_GET['error']); ?>
            </div>
        <?php endif; ?>

		<h2>REGISTRASI</h2>
		<div class="border"></div>
		<form method="post" action="send_regis.php">
			<div>
				<input type="text" name="nama" required="" placeholder="Nama">
			</div>
				<div>
				<input type="text" name="ttl" required="" placeholder="TTL">
			</div>
				<div>
				<input type="text" name="jk" required="" placeholder="Jenis kelamin">
			</div>
				<div>
				<input type="text" name="alamat" required="" placeholder="Alamat">
			</div>
				<div>
				<input type="text" name="nomor_telepon" required="" placeholder="Nomor telepon">
			</div>
				<div>
				<input type="text" name="email" required="" placeholder="Email">
			</div>
			<div>
				<input type="password" name="password" placeholder="password"
    	minlength="8" maxlength="20"><br>
			</div>
			<input type="submit" name="submit" value="submit">
				  <label>Anda Sudah Punya akun?<a href="login.php" class="text-link"> Login Di Sini</a></label>
      </div>
		</form>	
	</div>
</body>
</html>