<?php
session_start(); 
if (!isset($_SESSION['donatur_email']) && !isset($_SESSION['admin_email'])) {

    error_reporting(0);
    include("../config.php");

    if ($identifier == 0) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistem Informasi TheClothesBox</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
            <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
            <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
            <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
            <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../assets/css/master.css" rel="stylesheet">
            <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
            <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../css/styles.css">
        </head>

        <body>

            <section class="header">
                <div class="headline">
                    <a>
                        TheClothesBox
                    </a>
                </div>
            </section>

            <section class="s1">
                <div class="main-container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">

                            <a class="navbar-brand">

                                Selamat Datang!
                                
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../php/index.php">DASHBOARD
                                        </a>
                                    </li>
                                    

                                    <li class="nav-item">
                                        <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <?php } else {
                ?>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Sistem Informasi TheClothesBox</title>
                        <link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
                        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                        <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                        <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
                        <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
                        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                        <link href="../assets/css/master.css" rel="stylesheet">
                        <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                        <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
                        <link rel="stylesheet" href="../css/styles.css">
                    </head>

                    <body>

                        <section class="header">
                            <div class="headline">
                                <a>
                                TheClothesBox
                                </a>
                            </div>
                        </section>

                        <section class="s1">
                            <div class="main-container">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="container-fluid">

                                        <a class="navbar-brand">
                                        Selamat Datang!
                                        </a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav ml-auto">
                                                <?php if ($identifier == 1) { ?>

                                                    <li class="nav-item">
                                                        <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                    </li>
                                                    
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                                    </li>
                                            </ul>

                                        

                                        <?php }
                                                if ($identifier == 3) { ?>
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                            </li>
                                            
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="../php/laporan.php">LAPORAN</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../php/index.php #about">ABOUT US</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="login" href="../php/signin.php"><b>SIGN IN</b></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="login" href="../php/signup.php"><b>SIGN UP</b></a>
                                            </li>
                                            </ul>


                                        <?php } ?>

                                        </div>

                                    </div>
                                </nav>

                            <?php
                        }
                    } elseif (isset($_SESSION['donatur_email'])) {       //logged in as donatur

                        include("../config.php");
                        $account = $_SESSION["donatur_email"];
                        $account_result = mysqli_query($con, "select Name from donatur where Email = '$account'");

                        if ($identifier == 0) {

                            ?>
                                <!DOCTYPE html>
                                <html lang="en">

                                <head>
                                    <meta charset="UTF-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Sistem Informasi TheClothesBox</title>
                                    <link rel="preconnect" href="https://fonts.googleapis.com">
                                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
                                    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                    <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                                    <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
                                    <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
                                    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                    <link href="../assets/css/master.css" rel="stylesheet">
                                    <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                                    <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
                                    <link rel="stylesheet" href="../css/styles.css">
                                    <!--favicon index pas masuk-->
                                    <link rel="shortcut icon" href="http://1.bp.blogspot.com/-b88RXBMiS88/T6TyHkFohII/AAAAAAAABgc/A9gNaDjM_vs/s1600/1335651580_heart.gif">
                                </head>

                                <body>

                                    <section class="header">
                                        <div class="headline">
                                            <a>
                                                TheClothesBox
                                            </a>
                                        </div>
                                    </section>

                                    <section class="s1">
                                        <div class="main-container">
                                            <nav class="navbar navbar-expand-lg navbar-light">
                                                <div class="container-fluid">

                                                    <a class="navbar-brand" >
                                                        Selamat Datang!
                                                    </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                        <ul class="navbar-nav ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                            </li>
                                                            <!--
                                                                Donation
                                                            -->
                                                            <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown">
                                                                    <span>
                                                                        DONATION
                                                                    </span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <ul class="nav">
                                                                        <li><a href="../donatur/donatur_donation.php" class="dropdown-item">Donate Sekarang</a></li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li><a href="../donatur/donatur_upload.php" class="dropdown-item">Donasi Ku</a></li>
                                                                        <div class="dropdown-divider"></div>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </li>


                                                            
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                            </li>
                                                            <li class="nav-item dropdown">
                                                                <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                    <span>
                                                                        <?php // untuk mendapatkan nama donatur terkait dari hasil query dan mencetak huruf besar dari kata pertama dalam nama donatur tersebut.
                                                                        while ($info = $account_result->fetch_assoc()) {
                                                                            $myvalue = $info['Name'];
                                                                            $arr = (explode(' ', trim($myvalue)));
                                                                            echo strtoupper($arr[0]);
                                                                        }
                                                                        ?>
                                                                    </span>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <ul class="nav">
                                                                        <li><a href="../donatur/donatur_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li><a href="../donatur/donatur_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>

                                        <?php } else {
                                        ?>
                                            <!DOCTYPE html>
                                            <html lang="en">

                                            <head>
                                                <meta charset="UTF-8">
                                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                <title>Sistem Informasi TheClothesBox</title>
                                                <link rel="preconnect" href="https://fonts.googleapis.com">
                                                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
                                                <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                                <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                                                <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
                                                <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
                                                <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                                <link href="../assets/css/master.css" rel="stylesheet">
                                                <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                                                <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
                                                <link rel="stylesheet" href="../css/styles.css">
                                            </head>

                                            <body>

                                                <section class="header">
                                                    <div class="headline">
                                                        <a>
                                                            TheClothesBox
                                                        </a>
                                                    </div>
                                                </section>

                                                <section class="s1">
                                                    <div class="main-container">
                                                        <nav class="navbar navbar-expand-lg navbar-light">
                                                            <div class="container-fluid">

                                                                <a class="navbar-brand">
                                                                    Selamat Datang!
                                                                </a>
                                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                                    <span class="navbar-toggler-icon"></span>
                                                                </button>
                                                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                                    <ul class="navbar-nav ml-auto">
                                                                        <?php if ($identifier == 1) { ?>

                                                                            <li class="nav-item">
                                                                                <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                            </li>

                                                                            <!--Pas login dan di tab Donation-->
                                                                            <li class="nav-item dropdown">
                                                                                <a class="nav-link dropdown-toggle text-grey active" data-toggle="dropdown">
                                                                                    <span>
                                                                                        DONATION
                                                                                    </span>
                                                                                </a>
                                                                                <div class="dropdown-menu ">
                                                                                    <ul class="nav ">
                                                                                        <li><a href="../donatur/donatur_donation.php" class="dropdown-item">Donate Sekarang</a></li>
                                                                                        <div class="dropdown-divider"></div>
                                                                                        <li><a href="../donatur/donatur_upload.php" class="dropdown-item">Donasi Ku</a></li>
                                                                                        <div class="dropdown-divider"></div>
                                                                                        
                                                                                    </ul>
                                                                                </div>
                                                                            </li>

                                                                            
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                                            </li>
                                                                            <li class="nav-item dropdown">
                                                                                <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                                    <span>
                                                                                        <?php
                                                                                        while ($info = $account_result->fetch_assoc()) {
                                                                                            $myvalue = $info['Name'];
                                                                                            $arr = (explode(' ', trim($myvalue)));
                                                                                            echo strtoupper($arr[0]);
                                                                                        }
                                                                                        ?>
                                                                                    </span>
                                                                                </a>
                                                                                <div class="dropdown-menu">
                                                                                    <ul class="nav">
                                                                                        <li><a href="../donatur/donatur_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                                        <div class="dropdown-divider"></div>
                                                                                        <li><a href="../donatur/donatur_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </li>
                                                                    </ul>

                                                                <?php }
                                                                        if ($identifier == 2) { ?>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle text-grey active" data-toggle="dropdown">
                                                                            <span>
                                                                                DONATION
                                                                            </span>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <ul class="nav">
                                                                                <li><a href="../donatur/donatur_donation.php" class="dropdown-item">Donate Sekarang</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li><a href="../donatur/donatur_upload.php" class="dropdown-item">Donasi Ku</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </li>

                                                                    
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                            <span>
                                                                                <?php
                                                                                while ($info = $account_result->fetch_assoc()) {
                                                                                    $myvalue = $info['Name'];
                                                                                    $arr = (explode(' ', trim($myvalue)));
                                                                                    echo strtoupper($arr[0]);
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <ul class="nav">
                                                                                <li><a href="../donatur/donatur_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li><a href="../donatur/donatur_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    </ul>

                                                                <?php }
                                                                        if ($identifier == 3) { ?> <!--saat buka bagian laporan-->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown">
                                                                            <span>
                                                                                DONATION
                                                                            </span>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <ul class="nav">
                                                                                <li><a href="../donatur/donatur_donation.php" class="dropdown-item">Donate Sekarang</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li><a href="../donatur/donatur_upload.php" class="dropdown-item">Donasi Ku</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </li>

                                                                    
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" href="../php/laporan.php">LAPORAN</a>
                                                                    </li>
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                            <span>
                                                                                <?php
                                                                                while ($info = $account_result->fetch_assoc()) {
                                                                                    $myvalue = $info['Name'];
                                                                                    $arr = (explode(' ', trim($myvalue)));
                                                                                    echo strtoupper($arr[0]);
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <ul class="nav">
                                                                                <li><a href="../donatur/donatur_profile.php" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                                                                <div class="dropdown-divider"></div>
                                                                                <li><a href="../donatur/donatur_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    </ul>

                                                                <?php } ?>

                                                                </div>
                                                            </div>
                                                        </nav>
                                                    <?php
                                                }
                                            } else {       //logged in admin

                                                include("../config.php");
                                                $account = $_SESSION["admin_email"];
                                                $account_result = mysqli_query($con, "select Name from admin where Email = '$account'");

                                                if ($identifier == 0) {
                                                    ?>
                                                        <!DOCTYPE html>
                                                        <html lang="en">

                                                        <head>
                                                            <meta charset="UTF-8">
                                                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                            <title>Sistem Informasi TheClothesBox</title>
                                                            <link rel="preconnect" href="https://fonts.googleapis.com">
                                                            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
                                                            <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                                                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                                            <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                                                            <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
                                                            <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
                                                            <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                                            <link href="../assets/css/master.css" rel="stylesheet">
                                                            <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                                                            <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
                                                            <link rel="stylesheet" href="../css/styles.css">
                                                        </head>

                                                        <body>

                                                            <section class="header">
                                                                <div class="headline">
                                                                    <a>
                                                                        TheClothesBox
                                                                    </a>
                                                                </div>
                                                            </section>

                                                            <section class="s1">
                                                                <div class="main-container">
                                                                    <nav class="navbar navbar-expand-lg navbar-light">
                                                                        <div class="container-fluid">

                                                                            <a class="navbar-brand">
                                                                                Selamat Datang!
                                                                            </a>
                                                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                                                <span class="navbar-toggler-icon"></span>
                                                                            </button>
                                                                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                                                <ul class="navbar-nav ml-auto">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="../php/available.php">DONATION</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="../php/tujuan_donasi.php">TUJUAN DONASI</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                                                    </li>
                                                                                    
                                                                                    <li class="nav-item dropdown">
                                                                                        <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                                            <span>
                                                                                                <?php
                                                                                                while ($info = $account_result->fetch_assoc()) {
                                                                                                    $myvalue = $info['Name'];
                                                                                                    $arr = (explode(' ', trim($myvalue)));
                                                                                                    echo strtoupper($arr[0]);
                                                                                                }
                                                                                                ?>
                                                                                            </span>
                                                                                        </a>
                                                                                        <div class="dropdown-menu">
                                                                                            <ul class="nav">
                                                                                                
                                                                                                <div class="dropdown-divider"></div>
                                                                                                <li><a href="../admin/admin_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </nav>

                                                                <?php } else {
                                                                ?>
                                                                    <!DOCTYPE html>
                                                                    <html lang="en">

                                                                    <head>
                                                                        <meta charset="UTF-8">
                                                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                                        <title>Sistem Informasi TheClothesBox</title>
                                                                        <link rel="preconnect" href="https://fonts.googleapis.com">
                                                                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=>
                                                                        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
                                                                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                                                        <link href="../assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                                                                        <link href="../assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
                                                                        <link href="../assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
                                                                        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                                                        <link href="../assets/css/master.css" rel="stylesheet">
                                                                        <link href="../assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
                                                                        <link href="../assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
                                                                        <link rel="stylesheet" href="../css/styles.css">
                                                                    </head>

                                                                    <body>

                                                                        <section class="header">
                                                                            <div class="headline">
                                                                                <a>
                                                                                    TheClothesBox
                                                                                </a>
                                                                            </div>
                                                                        </section>

                                                                        <section class="s1">
                                                                            <div class="main-container">
                                                                                <nav class="navbar navbar-expand-lg navbar-light">
                                                                                    <div class="container-fluid">

                                                                                        <a class="navbar-brand">
                                                                                            Selamat Datang!
                                                                                        </a>
                                                                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                                                            <span class="navbar-toggler-icon"></span>
                                                                                        </button>
                                                                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                                                            <ul class="navbar-nav ml-auto">
                                                                                                <?php if ($identifier == 1) { ?> <!--saat login di bagian donation-->

                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link active" href="../php/available.php">DONATION</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link" href="../php/tujuan_donasi.php">TUJUAN DONASI</a>
                                                                                                    </li>
                                                                                                    <li class="nav-item">
                                                                                                        <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                                                                    </li>
                                                                                                    
                                                                                                    <li class="nav-item dropdown">
                                                                                                        <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                                                            <span>
                                                                                                                <?php
                                                                                                                while ($info = $account_result->fetch_assoc()) {
                                                                                                                    $myvalue = $info['Name'];
                                                                                                                    $arr = (explode(' ', trim($myvalue)));
                                                                                                                    echo strtoupper($arr[0]);
                                                                                                                }
                                                                                                                ?>
                                                                                                            </span>
                                                                                                        </a>
                                                                                                        <div class="dropdown-menu">
                                                                                                            <ul class="nav">
                                                                                                                
                                                                                                                <div class="dropdown-divider"></div>
                                                                                                                <li><a href="../admin/admin_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </li>
                                                                                            </ul>

                                                                                        <?php }
                                                                                                if ($identifier == 2) { ?> <!--saat login di bagian tujuan donasi-->
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" href="../php/available.php">DONATION</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link active" href="../php/tujuan_donasi.php">TUJUAN DONASI</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" href="../php/laporan.php">LAPORAN</a>
                                                                                            </li>
                                                                                            
                                                                                            <li class="nav-item dropdown">
                                                                                                <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                                                    <span>
                                                                                                        <?php
                                                                                                        while ($info = $account_result->fetch_assoc()) {
                                                                                                            $myvalue = $info['Name'];
                                                                                                            $arr = (explode(' ', trim($myvalue)));
                                                                                                            echo strtoupper($arr[0]);
                                                                                                        }
                                                                                                        ?>
                                                                                                    </span>
                                                                                                </a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <ul class="nav">
                                                                                                        
                                                                                                        <div class="dropdown-divider"></div>
                                                                                                        <li><a href="../admin/admin_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </li>
                                                                                            </ul>

                                                                                        <?php }
                                                                                                if ($identifier == 3) { ?> <!--saat login di bagian laporan-->
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" aria-current="page" href="../php/index.php">DASHBOARD</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" href="../php/available.php">DONATION</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link" href="../php/tujuan_donasi.php">TUJUAN DONASI</a>
                                                                                            </li>
                                                                                            <li class="nav-item">
                                                                                                <a class="nav-link active" href="../php/laporan.php">LAPORAN</a>
                                                                                            </li>
                                                                                            
                                                                                            <li class="nav-item dropdown">
                                                                                                <a class="nav-link dropdown-toggle text-grey" data-toggle="dropdown"><i style="padding-right:10px;" class="fas fa-user"></i>
                                                                                                    <span>
                                                                                                        <?php
                                                                                                        while ($info = $account_result->fetch_assoc()) {
                                                                                                            $myvalue = $info['Name'];
                                                                                                            $arr = (explode(' ', trim($myvalue)));
                                                                                                            echo strtoupper($arr[0]);
                                                                                                        }
                                                                                                        ?>
                                                                                                    </span>
                                                                                                </a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <ul class="nav">
                                                                                                        
                                                                                                        <div class="dropdown-divider"></div>
                                                                                                        <li><a href="../admin/admin_signout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign out</a></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </li>
                                                                                            </ul>

                                                                                        <?php } ?>

                                                                                        </div>
                                                                                    </div>
                                                                                </nav>
                                                                        <?php
                                                                    }
                                                                }
