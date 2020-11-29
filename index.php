<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Comfort</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="./img/comfort-logo.png" width="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-2">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="login/index.html">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/gambar-carousel-1.jpg" class="d-block w-100" alt="gambar-carousel-1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-1">Men Apparel November<br>Discount up to 60%<br><br><a href="#"
                            class="btn btn-outline-light">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/gambar-carousel-2.jpg" class="d-block w-100" alt="gambar-carousel-2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-2">Men and Women Apparel<br>Get it now and get 25% discount<br><br><a href="#"
                            class="btn btn-outline-dark">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/gambar-carousel-3.jpg" class="d-block w-100" alt="gambar-carousel-3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-3">November Deals<br>Women Top<br>Buy 2 get 1<br><br><a href="#"
                            class="btn btn-outline-dark">Purchase</a></h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container col-12 mt-5 d-flex justify-content-center">
        <div class="about">
            <h4>About Us</h4>
            <p>
                Comfort is a brand from 3 man from Indonesia who want a nice, trendy, and cheap apparel but with High
                Quality Fabric for <br>Comfort come with Men and Women Apparel thats other mainstream online clothing
                shop doesn't have<br>We believe that people who wear comfort apparel they will got comfort and feel
                happy everyday</p>
        </div>
    </div>
    <div class="clear"></div>

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <!-- Social Buttons -->

            <!-- Social buttons -->

        </div>
        <div class="footer-copyright text-center py-3">&copy; Comfort 2020 Copyright</div>
    </footer>


    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>