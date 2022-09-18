<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALE-Attire Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select {
            display: block;
            padding: 5px 5px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background-color: blue;
            opacity: 1;
            transition: 0.3 s all;

        }
    </style>
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
    <div id="hd">
        <a href="home.html" title="back to home page">Home</a>
        <span class="breadcrumb__divider" aria-hidden="true">/</span>
        <span>Details</span>
    </div>
    
    <section class="container sproduct my-5 pt-2">
        <div class="row mt-5">
            @foreach ($items as $item)
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 h-60 pb-1" id="MainImg"
                    src="{{$item->image1}}"
                    alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img width="100%" class="small-img"
                            src="{{$item->image1}}"
                            alt="">
                    </div>
                    <div class="small-img-col" style="margin-right:265px ;">
                        <img width="100%" class="small-img"
                            src="{{$item->image2}}"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>{{'Type:'.$item -> type}}</h6>
                <h3 class="py-4">{{$item ->name}}</h3>
                <h3><span class="pr">{{'Price then: Rs.'.$item -> price}}</span></h3>
                <h2 style="color:red ;">{{'Now Rs.'.$item -> discountedPrice}}</h2>
                <select class="my-3">
                    @foreach ($items as $size)
                    <option>{{$size -> sizename}}</option>
                    @endforeach
                </select>
                <input type="number" value="1"><br> <br>
                <button class="btn btn-dark" type="join">Add To Cart</button>
                <button class="btn btn-dark" type="join">Add To Wishlist</button>
                <h4 class="mt-5 mb-5">Product Details</h4>
                <span>{{$item -> productDetails}}</span>
                <br><br>
                <h4>MATERIALS AND CARE</h4>
                <span>
                    <br>
                    <h5> JOIN LIFE</h5>
                    Care for water: produced using less water.

                    We use the Join Life label on clothing that is produced using technology and raw materials that help
                    us to reduce the environmental impact of our products.
                </SPan>
            </div>
            @break
            @endforeach
        </div>
    </section>
    

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

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
    </script>
</body>

</html>