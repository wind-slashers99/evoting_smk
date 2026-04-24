<!DOCTYPE html>
<html lang="en">
<head>
<!-- required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI E-VOTING</title>
    <link rel="stylesheet" href="assets_depan/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets_depan/vendors//owl.carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets_depan/vendors/owl.carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets_depan/vendors/aos/css/aos.css">
    <link rel="stylesheet" href="assets_depan/vendors/jquery-flipster/css/jquery.flipster.css">
    <link rel="stylesheet" href="assets_depan/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php
    session_start();
    include 'koneksi.php';
    ?>
    <div id="mobile-menu-overlay"></div>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">e-voting</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-targer="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon><i class="mdi mdi-menu"> </i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-item-center">
                    <a class="logo-mobile-menu text-bold text-dark" href="index.php">e-voting</a>
                    <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
                    </div>
                    <ul class="navbar-nav ml-auto align-item-center">
                        <li class="nav-item active"><a class="nav-link px-2" href="home.php">Home<span class="sr-only">
                            (current)</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="quick_count.php">Quick Count</a></li> 
                        <li class="nav-item"><a class="nav-link px-2" href="kandidat.php">Kandidat</a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="voting.php">Voting</a></li>
                        <?php
                        if(isset($_SESSION['level'])&& $_SESSION['level']== "pemilih"){
                        ?>"
                        <li class="nav-item mr-md-1 ml-md-3 mx-sm-0"><a class="nav-link btn btn-outline-success">
                            <?php echo $_SESSION['nama']?> - <span class="label label-success">Pemilih</span></a></li>
                            <li class="nav-item mx-md-0 mx-sm-0"><a class="nav-link btn btn-danger"
                            href="logout.php">LOG OUT</a></li>
                            <?php
                            }else{
                                ?>
                                <li class="nav-item mr-md-1 ml-md-3 mx-sm-0"><a class="nav-link btn btn-outline-success
                                "href='login.php'>Login pemilih</a></li>
                                <li class="nav-item mx-md-0 mx-sm-0"><a class="nav-link btn btn-success"
                                 href="admin.php">Login Admin/Panitia</a></li>
                                 <?php
                            }
                            ?>
                            </ul</div></div></nav>
</body>
</html>