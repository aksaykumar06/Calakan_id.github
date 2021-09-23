<!DOCTYPE html>
<html lang="en">
<head>

     <title>Calakan Id</title>
<!--

CALAKAN ID



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
      <?php 
        if (empty($_SESSION['username'])) { 
            header("location:login.php?pesan=Silahkan login terlebih dahulu");
        }

      ?>
           <section class="hero  bg-secondary d-flex justify-content-center align-items-center">
          <div class="text-center">
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="50">
          	<button onclick="" class="button">
          	<a rel="nofollow noopener" href="https://repository.dinus.ac.id/docs/ajar/ModulDasarHTML.pdf">HTML</a></h1></button>
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="50">
          	<button onclick="" class="button">
          	<a rel="nofollow noopener" href="http://zenhadi.lecturer.pens.ac.id/kuliah/internet/CSSdasar.pdf">CSS</a></h1></button>
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="50">
          	<button onclick="" class="button">
            <a rel="nofollow noopener" href="https://endangcahyapermana.files.wordpress.com/2016/03/dasar-pemrograman-javascript.pdf">Java-Script</a></h1></button>
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="50">
          	<button onclick="" class="button">
            <a rel="nofollow noopener" href="kuis.php">Halaman Kuis</a></h1></button>
           <h1 class="text-white" data-aos="fade-up" data-aos-delay="50">
          </div>
      </section>

        


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>