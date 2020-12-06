<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="product/style.css">

    <title>Comfort</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Product</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Top<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jacket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shoes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-md-10">
        <h4 class="text-center font-weight-bold m-5">PRODUK TERSEDIA</h4>
        <div class="row mx-auto">
            <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="../assets/img/produk1.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Hoodie</h5>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <p class="card-text">Hoodie Off-White Unisex</p><br>
                    <a href="#" class="btn btn-primary" data-target="#produk1"
                        data-toggle="modal">Detail</a>
                    <a href="#" class="btn btn-danger">Rp. 6.999.000</a>
                </div>
            </div>

            <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="../assets/img/produk2.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Celana Panjang</h5>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="far fa-star text-warning"></i>
                    <p class="card-text">Celana Hyper Denim Pria</p><br>
                    <a href="#" class="btn btn-primary" data-target="#produk2"
                        data-toggle="modal">Detail</a>
                    <a href="#" class="btn btn-danger">Rp. 1.999.000</a>
                </div>
            </div>

            <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="../assets/img/produk3.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title">Sepatu</h5>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <p class="card-text">Sepatu Nike Air Dior</p><br>
                    <a href="#" class="btn btn-primary" data-target="#produk3"
                        data-toggle="modal">Detail</a>
                    <a href="#" class="btn btn-danger">Rp. 199.999.000</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produk1" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hoodie
                        </h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="../assets/img/produk1.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Jenis Produk</th>
                                        <td>Hoodie</td>
                                    </tr>
                                    <tr>
                                        <th>Brand Produk</th>
                                        <td>Off-White</td>
                                    </tr>
                                    <tr>
                                        <th>Size Tersedia</th>
                                        <td>M / L / XL / XXL</td>
                                    </tr>
                                    <tr>
                                        <th>Rating</th>
                                        <td>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star-half-alt text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Stock Produk</th>
                                        <td>Pre-Order</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Tutup</button>
                        <button type="button"
                            class="btn btn-success">Beli</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produk2" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Celana
                            Panjang</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="../assets/img/produk2.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Jenis Produk</th>
                                        <td>Celana Panjang</td>
                                    </tr>
                                    <tr>
                                        <th>Brand Produk</th>
                                        <td>Hyper Denim</td>
                                    </tr>
                                    <tr>
                                        <th>Size Tersedia</th>
                                        <td>S / M / L / XL / XXL</td>
                                    </tr>
                                    <tr>
                                        <th>Rating</th>
                                        <td>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="far fa-star text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Stock Produk</th>
                                        <td>>50</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Tutup</button>
                        <button type="button"
                            class="btn btn-success">Beli</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="produk3" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sepatu
                        </h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="../assets/img/produk3.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Jenis Produk</th>
                                        <td>Sepatu</td>
                                    </tr>
                                    <tr>
                                        <th>Brand Produk</th>
                                        <td>Nike Air Dior</td>
                                    </tr>
                                    <tr>
                                        <th>Size Tersedia</th>
                                        <td>7 / 7.5 / 8 / 8.5 / 9</td>
                                    </tr>
                                    <tr>
                                        <th>Rating</th>
                                        <td>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                            <i
                                                class="fas fa-star text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Stock Produk</th>
                                        <td>Pre-Order</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger"
                            data-dismiss="modal">Tutup</button>
                        <button type="button"
                            class="btn btn-success">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>