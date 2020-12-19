<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style-index.css">
    <title>Landing Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="assets/img/comfort-logo.png" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-2">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="product/index.php">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION['login'])) : ?>
                <form class="form-inline my-2 my-lg-0" method="post" action="login/login.php">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
                </form>
            <?php else : ?>
                <form class="form-inline my-2 my-lg-0" method="post" action="logout/logout.php">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
                </form>
            <?php endif ?>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/gambar-carousel-1.jpg" class="d-block w-100" alt="gambar-carousel-1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-1">Men Apparel November<br>Discount up to
                        60%<br><br><a href="#" class="btn btn-outline-light">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/gambar-carousel-2.jpg" class="d-block w-100" alt="gambar-carousel-2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-2">Men and Women Apparel<br>Get it now and
                        get 25% discount<br><br><a href="#" class="btn btn-outline-dark">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/gambar-carousel-3.jpg" class="d-block w-100" alt="gambar-carousel-3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-3">November Deals<br>Women Top<br>Buy 2 get
                        1<br><br><a href="#" class="btn btn-outline-dark">Purchase</a></h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container col-12 mt-5 d-flex justify-content-center">
        <div class="about">
            <h4>About Us</h4>
            <p>
                Comfort is a brand from 3 man from Indonesia who want a nice,
                trendy, and cheap apparel but with High
                Quality Fabric for <br>Comfort come with Men and Women Apparel
                thats other mainstream online clothing
                shop doesn't have<br>We believe that people who wear comfort
                apparel they will got comfort and feel
                happy everyday</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <!-- Social Buttons -->

            <!-- Social buttons -->

        </div>
        <div class="footer-copyright text-center py-3">&copy; Comfort 2020
            Copyright</div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>