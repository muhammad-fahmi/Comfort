<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Landing Page</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/Comfort/" target="_self"><img src="./img/comfort-logo.png"
                alt="comfort-logo" width="100px"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Customer Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            <form method="post" action="./login/Login.php" class="form-inline my-2 my-lg-0 login">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Login</button>
            </form>

        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide view" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner view">
            <div class="carousel-item active view">
                <img src="./img/gambar-carousel-1.jpg" class="d-block w-100" alt="gambar-carousel-1">
                <div class="carousel-caption d-none d-md-block image-1 text-1">
                    <h5>Men Apparel November<br>Discount up to 60%<br><br><a href="#" class="btn btn-outline-light animated fadeInUp scrollto">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item view">
                <img src="./img/gambar-carousel-2.jpg" class="d-block w-100" alt="gambar-carousel-2">
                <div class="carousel-caption d-none d-md-block image-2 text-2">
                    <h5>Men and Women Apparel<br>Get it now and get 25% discount<br><br><a href="#" class="btn btn-outline-dark animated fadeInUp scrollto">Purchase</a></h5>
                </div>
            </div>
            <div class="carousel-item view">
                <img src="./img/gambar-carousel-3.jpg" class="d-block w-100" alt="gambar-carousel-3">
                <div class="carousel-caption d-none d-md-block image-3 text-3">
                    <h5 class="char-3">November Deals<br>Women Top<br>Buy 2 get 1<br><br><a href="#" class="btn btn-outline-dark animated fadeInUp scrollto purchase-3">Purchase</a></h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev view" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next view" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>






    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>