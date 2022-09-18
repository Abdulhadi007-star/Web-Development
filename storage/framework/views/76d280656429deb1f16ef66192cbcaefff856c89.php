<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attire Online Store</title>

    <link rel="stylesheet" href="css/seller.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/offcanvas.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/home" style="font-size: 30px;">
                    <img src="images/log.jpg" alt="" width="35px" height="30px">
                    <span>ATT</span>IRE
                </a>
                <div class="order-lg-2 nav-btns">
                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-shopping-cart fa-lg" style="text-decoration: none;"
                                data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="/shoppingcart">View Cart</a></li>
                            </ul>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">0</span>

                    </button>

                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-heart fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="/wishlist">View WishList</a></li>
                            </ul>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">0</span>
                    </button>

                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-user fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="/login">Sign In</a></li>
                                <li><a class="dropdown-item" href="/register">Sign Up</a></li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>
                        </div>
                    </button>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon navbar-right"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active text-primary fw-bold" aria-current="page"
                                href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-primary fw-bold dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="/maincategory?categoryId=2">WOMEN &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=4">TOPS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=5">BOTTOMS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=7">ACCESSORIES</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=6">FOOTWEAR</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="/maincategory?categoryId=1">MEN &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=1">TOPS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=2">BOTTOMS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=3">FOOTWEAR</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/maincategory?categoryId=3">ACCESSORIES &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=7">WOMEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=8">SCARFS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=9">BRACELETS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=10">EARINGS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">MEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=11">CAPS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=12">RINGS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/maincategory?categoryId=4">
                                            SHOES &raquo;
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=6">WOMEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=15">SUMMER COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=16">WINTER COLLECTION</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/category?subCategoryId=3">MEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=13">SUMMER COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="/category?subCategoryId=14">WINTER COLLECTION</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary fw-bold" href="/sale">Sale</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-primary fw-bold dropdown-toggle" data-bs-toggle="dropdown"
                                    href="/all">Collections</a>
                                <div class="dropdown-menu">

                                    <a href="/category?subCategoryId=17" class="dropdown-item">LEVI'S</a>
                                    <a href="/category?subCategoryId=18" class="dropdown-item">DENIM</a>
                                    <a href="/category?subCategoryId=19" class="dropdown-item">ZARA</a>
                                    <a href="/category?subCategoryId=20" class="dropdown-item">POLO</a>
                                    <a href="/all" class="dropdown-item">ALL</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary fw-bold" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2 outline-primary" type="search" placeholder="Search Product"
                            aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- 
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            Button with data-bs-target
        </button> -->

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body px-0">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <a href="/home">
                            <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse"
                                data-bs-target="#home-collapse" aria-expanded="true">
                                Home
                            </button>
                        </a>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Shop
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-bold pb-1 small">
                                <a href="/maincategory?categoryId=2">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        WOMEN
                                    </button>
                                </a>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="/category?subCategoryId=4">Tops</a></li>
                                        <li><a href="/category?subCategoryId=5">Bottoms</a></li>
                                        <li><a href="/category?subCategoryId=7">Accessories</a></li>
                                        <li><a href="/category?subCategoryId=6">Footwear</a></li>
                                    </ul>
                                </div>
                                <a href="/maincategory?categoryId=1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        MEN
                                    </button>
                                </a>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="/category?subCategoryId=1">Tops</a></li>
                                        <li><a href="/category?subCategoryId=2">Bottoms</a></li>
                                        <li><a href="/category?subCategoryId=3">Footwear</a></li>
                                    </ul>
                                </div>
                                <a href="/maincategory?categoryId=3">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        ACCESSORIES
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="/category?subCategoryId=7">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    WOMEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="/category?subCategoryId=8">Sacrfs</a></li>
                                                    <li><a href="/category?subCategoryId=9">Bracelets</a></li>
                                                    <li><a href="/category?subCategoryId=10">Earings</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="Caps.html">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    MEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="/category?subCategoryId=11">Caps</a></li>
                                                    <li><a href="/category?subCategoryId=12">Rings</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                </a>

                                <a href="/maincategory?categoryId=4">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        SHOES
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="/category?subCategoryId=6">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    WOMEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="/category?subCategoryId=15">Summer Collection</a></li>
                                                    <li><a href="/category?subCategoryId=16">Winter Collection</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="/category?subCategoryId=3">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false" &nbsp; &nbsp;>
                                                    MEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="/category?subCategoryId=13">Summer Collection</a></li>
                                                    <li><a href="/category?subCategoryId=14">Winter Collection</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <a href="/sale">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#orders-collapse" aria-expanded="false">
                            Sale
                        </button>
                        </a>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#home-collapse" aria-expanded="false">
                            Collections
                        </button>
                        <div class="collapse" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                
                                <li><a href="/category?subCategoryId=17" class="rounded">Levis</a></li>
                                <li><a href="/category?subCategoryId=18" class="rounded">Denim</a></li>
                                <li><a href="/category?subCategoryId=19" class="rounded">Zara</a></li>
                                <li><a href="/category?subCategoryId=20" class="rounded">Polo</a></li>
                                <li><a href="/all" class="rounded">All</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <a href="/contact">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="collapse" aria-expanded="false">
                            Contact Us
                        </button>
                        </a>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="shoppingcart.html" class="rounded">Cart</a></li>
                                <li><a href="wishlist.html" class="rounded">Wishlist</a></li>
                                <li><a href="login.html" class="rounded">Sign In</a></li>
                                <li><a href="#" class="rounded">Sign out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
   

    <!-- *********************************************categories section***************************************************** -->
    <section class="categories">
        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="200" style="background-image: url(images/1.avif);">
                    <div class="overlay-image" style="background-image: url(images/1.avif);">

                    </div>
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>SUMMER 2022</h1>
                            <h3>NEW ARRIVAL COLLECTION</h3>
                            <p><a class="btn btn-lg btn-dark" href="#">EXPLORE NOW</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="200">
                    <div class="overlay-image" style="background-image: url(images/2.avif);">
                    </div>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>NEW SEASON</h1>
                            <h3>LOOKBOOK COLLECTION</h3>
                            <p><a class="btn btn-lg btn-danger" href="#">VISIT STORE</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="200">
                    <div class="overlay-image" style="background-image: url(images/3.avif);">
                    </div>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>SUMMER SALE</h1>
                            <h3>SAVE UP TO 70%</h3>
                            <p><a class="btn btn-lg btn-primary" href="#">BROWSE GALLERY</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="head-1">
                    <div class="col-12 ">
                        <br>
                        <a href="">
                            <h2> <b>CATEGORIES</b></h2>
                            <br>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories_item categories_large_item">
                        <a href="/maincategory?categoryId=2"><img src="images/category-1.jpg" alt=""
                                class="img-fluid img-responsive "></a>
                        <div class="categories_text">
                            <a href="/maincategory?categoryId=2"><button class="btn btn-lg btn-primary" href="/maincategory?categoryId=2">WOMEN</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 p-0">
                            <div class="categories_item">
                                <a href="/sale"><img src="images/sale.avif" alt=""
                                        class="img-fluid img-responsive hover-zoom"></a>
                                <div class="categories_text">
                                    <a href="/sale"><button class="btn btn-lg btn-primary"
                                            href="/sale">SALE</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 p-0">
                            <div class="categories_item">
                                <a href="/maincategory?categoryId=3"><img src="images/category-5.jpg" alt=""
                                        class="img-fluid img-responsive"></a>
                                <div class="categories_text">
                                    <a href="/maincategory?categoryId=3"><button class="btn btn-lg btn-primary"
                                            href="/maincategory?categoryId=3">ACCESSORIES</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 p-0">
                            <div class="categories_item">
                                <a href="/maincategory?categoryId=1"> <img src="images/category-2.jpg" alt=""
                                        class="img-fluid img-responsive"></a>
                                <div class="categories_text">
                                    <a href="/maincategory?categoryId=1"><button class="btn btn-lg btn-primary"
                                            href="/maincategory?categoryId=1">MEN</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 p-0">
                            <div class="categories_item">
                                <a href="/maincategory?categoryId=4"> <img src="images/p1.avif" alt=""
                                        class="img-fluid img-responsive"></a>
                                <div class="categories_text">
                                    <a href="/maincategory?categoryId=4"><button class="btn btn-lg btn-primary"
                                            href="/maincategory?categoryId=4">SHOES</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- *****************************************featured products section********************************************** -->

    <section class="section-2">
    
        <br><br>
        <h2>Featured <b>Products</b></h2><br><br>
        <div class="row">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <a href="singleProduct.html"><img class="pic-1" src = "<?php echo e($item->image1); ?>"></a>
                                <a href="singleProduct.html"><img class="pic-2" src = "<?php echo e($item->image2); ?>"></a>
                            </a>
                            <a href="" class="product-like-icon"><i class="fa fa-heart"></i></a>
                            <ul class="product-links">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                                <li><a href="singleProduct.html"><i class="fa fa-eye"></i></a></li>
                                <li><a href="singleProduct.html"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#"><?php echo e($item ->name); ?></a></h3>
                            <div class="price"><?php echo e('Rs.'.$item -> price); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

            <h2>Best <b>Seller</b></h2><br><br>
            <div class="row">
                <?php $__currentLoopData = $bestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <a href="singleProduct.html"><img class="pic-1" src = "<?php echo e($bestProduct->image1); ?>"></a>
                                    <a href="singleProduct.html"><img class="pic-2" src = "<?php echo e($bestProduct->image2); ?>"></a>
                                </a>
                                <a href="" class="product-like-icon"><i class="fa fa-heart"></i></a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="singleProduct.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="singleProduct.html"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#"><?php echo e($bestProduct ->name); ?></a></h3>
                                <div class="price"><?php echo e('Rs.'.$bestProduct -> price); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </section>
    <br><br>
    <!-- *******************************************blog section********************************************************** -->
    <section class="section-3" id="section-blog">
        <h2>Latest <b>Blogs</b></h2><br><br>
        <div class="container">
            <div class="card-columns">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1537832816519-689ad163238b?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1159"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Wardrobe Hacks</h5>
                                    <p class="card-text">
                                        As a society, we are so removed from the process of making an item of clothing
                                        that we don’t even understand what is possible using the clothes we already
                                        own,” says Layla Sargent, who last year launched The Seam, to connect customers
                                        with local seamstresses.

                                    </p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1479064555552-3ef4979f8908?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">How Much To Budget For Clothes</h5>
                                    <p class="card-text">If your wardrobe is full of dresses that would be great if only
                                        they had different sleeves, or jumpsuits whose chic necklines are undermined by
                                        saggy bottoms, you could try repurposing them using the half you like.</p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1490114538077-0a7f8cb49891?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Seasons For Top Fashion Brands</h5>
                                    <p class="card-text">If you have any silk scarves around that you do not wear,
                                        Bennett recommends turning them into a scrunchie, a simple process that can be
                                        done by hand, she says.“Get a piece of elastic, sew your favourite vintage scarf
                                        into a long tube”. </p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <a href="blog.html"><button type="button" class="btn btn-light" id="btn">Show More</button></a>
            </div>
        </div>
    </div>
    <br>

    <script>
        $(document).ready(function () {
            $(".wish-icon i").click(function () {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });	
    </script>
    <!-- **************************************services section******************************************************* -->
    <section class="section-4">
        <div class="container-fluid text-center">
            <h2>SERVICES <br> <b>What we offer</b></h2>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <i class="fa fa-plane fa-2x"></i>
                    <h4>Free Shipping</h4>
                    <p>For all oder over $99</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-truck fa-2x"></i>
                    <h4>Fast delivery</h4>
                    <p>Within 4-5 working days</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-money fa-2x"></i>
                    <h4>Money Back Guarantee</h4>
                    <p>If good have Problems</p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <i class="fa fa-product-hunt fa-2x"></i>
                    <h4>Quality Products</h4>
                    <p>100% Quality products</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-money fa-2x"></i>
                    <h4>Payment Secure</h4>
                    <p>100% secure payment</p>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-support fa-2x"></i>
                    <h4>Online Support 24/7</h4>
                    <p>Dedicated support.</p>
                </div>

            </div>
        </div>
    </section>
    <br>
    <!-- **************************************about us section******************************************************* -->
    <section class="section-5">
        <div class="container">
            <div class="row">

                <h2>ABOUT <b>US</b></h2>
                <br><br>
                <div class="col-lg-4">

                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/2746187/pexels-photo-2746187.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Our Team</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/381843/pexels-photo-381843.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Our Editors</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-0">
                        <div class="card-image">
                            <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Our Designs</h4>
                            <h5>Creative Desinger</h5>

                            <ul class="social-icons d-flex justify-content-center">
                                <li style="--i:1">
                                    <a href="#">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li style="--i:2">
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li style="--i:3">
                                    <a href="#">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ******************************************footer section********************************************************* -->
    <footer>
        <div class="container-fluid bg-primary py-3">
            <div class="row">
                <div class="col-3 text-end my-2 fw-bold ">
                    <h4>BE IN TOUCH WITH US:</h4>
                </div>
                <div class="col-3 my-2 text-center">
                    <input class="form-control me-2" type="join" placeholder="Enter your E-mail" aria-label="join">

                </div>
                <div class="col-3 my-2">
                    <button class="btn btn-dark" type="join">Join Us</button>
                </div>
                <div class="col-3 my-2">
                    <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i
                            class="fa fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i
                            class="fa fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"><i
                            class="fa fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-5 py-5 my-5 border-top">
                <div class="col-4">
                    <h5 class="text-center fw-bold">Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">WOMEN</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">MEN</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">SALE</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">ACCESSORIES</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">SHOES</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <h5 class="text-center fw-bold">Our Address</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">121, Clear Water Bay <br>
                                Road <br> Clear Water Bay, Kowloon <br> HONG KONG.</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tel: +852 1234 5678</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fax: +852 8765 4321</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Email: <br>
                                shop@attire.com</a></li>
                    </ul>
                </div>

                <div class="col-4">
                    <h5 class="text-center fw-bold">Follow Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Google+</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Facebook</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">LinkedIn</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Youtube</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html><?php /**PATH C:\Users\Aech\Downloads\web\attire\resources\views/home.blade.php ENDPATH**/ ?>