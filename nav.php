<!-- MENU BAR -->
<?php session_start(); ?>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
             CALAKAN ID
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link contact">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="program.php" class="nav-link contact">Program Belajar</a>
                    </li>
                    <?php if (empty($_SESSION['username'])) { ?>
                    <li class="nav-item ">

                         <a href="login.php" class="nav-link contact">Log In</a>
                     </li>
                    <li class="nav-item">
                        <a href="regis.php" class="nav-link contact">Registrasi</a>
                    </li>
                    <?php }; ?>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li class="nav-item ">
                        <a href="logout.php" class="nav-link contact">Logout</a>
<!--                          Selamat datang, <?php echo $_SESSION['username']; ?>
 -->                 </li>
                    <?php }; ?>
                </ul>
            </div>
        </div>
    </nav>