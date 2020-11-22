<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Landing Page</title>
</head>

<body id="section1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="http://localhost/Comfort/">
            <img src="img/logo.png" width="150px" height="90px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#section1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Man</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Woman</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="login/Login.html" class="btn btn-secondary my-2 my-sm-0">Login</a>
            </form>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide car" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/cowo cewe.jpg" class="d-block w-100 tales" alt="Artboard 1">
                <div class="carousel-caption d-none d-md-block" id="artboard1">
                    <h3>Men and Women Apparel<br>Get it now and get 25% discount<br></h3>
                    <h3><a href="#" class="btn-get-started animated fadeInUp scrollto">Purchase</a></h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cewe.jpg" class="d-block w-100 tales" alt="Artboard 2">
                <div class="carousel-caption d-none d-md-block" style="text-align: right">
                    <h1>November Deals<br>Women Top<br>Buy 2 get 1<br><a href="#" class="btn-get-started animated fadeInUp scrollto">Purchase</a></h1>



                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cowo.jpg" class="d-block w-100 tales" alt="Artboard 3">
                <div class="carousel-caption d-none d-md-block" style="color: white">

                    <h2>Men Apparel November<br>Discount up to 60%<br><a href="#" class="btn-get-started animated fadeInUp scrollto">Purchase</a></h2>

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

    <section class="collection-section">
        <div class="collection-container bd-grid">
            <div class="collection-box">
                <img src="img/cewe 1.jpg" alt="" class="colletion-img">

                <div class="colletion-data">
                    <h2 class="colletion-title"><span class="collection-subtitle">Women</span><br>Apparel</h2>
                    <a href="#" class="collection-view">View Collection</a>
                </div>
            </div>

            <div class="collection-box">


                <div class="colletion-data">
                    <h2 class="colletion-title"><span class="collection-subtitle">Men</span><br>Apparel</h2>
                    <a href="#" class="collection-view">View Collection</a>

                    <img src="img/cowo 1.jpg" alt="" class="colletion-img">
                </div>
            </div>
        </div>
        </div>



        <div class="contain">
            <div class="about">
                <h4>About Us</h4>
                <p>
                    Comfort is a brand from 3 man from Indonesia who want a nice, trendy, and cheap apparel but with High Quality Fabric for <br>Comfort come with Men and Women Apparel thats other mainstream online clothing shop doesn't have<br>We believe that people who wear comfort apparel they will got comfort and feel happy everyday</p>
            </div>
        </div>
        <div class="clear"></div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>