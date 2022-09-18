<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs-Attire Store</title>
    <link rel="stylesheet" href="css/blog.css">
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
                <a class="navbar-brand" href="home.html" style="font-size: 30px;">
                    <img src="images/log.jpg" alt="" width="35px" height="30px">
                    <span>ATT</span>IRE
                </a>
                <div class="order-lg-2 nav-btns">
                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-shopping-cart fa-lg" style="text-decoration: none;"
                                data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="shoppingcart.html">View Cart</a></li>
                            </ul>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">0</span>

                    </button>

                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-heart fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="wishlist.html">View WishList</a></li>
                            </ul>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">0</span>
                    </button>

                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-user fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="register.html">Log In/Register</a></li>
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
                                href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-primary fw-bold dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="cat_women.html">WOMEN &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="top_women.html">TOPS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="women_bottom.html">BOTTOMS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="acc.html">ACCESSORIES</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="summer-men.html">FOOTWEAR</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="cat_men.html">MEN &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="Polo.html">TOPS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="men-bottoms.html">BOTTOMS</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="summer-men.html">FOOTWEAR</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="acc.html">ACCESSORIES &raquo;</a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="#">WOMEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="Sacrfs.html">SCARFS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="bracelets.html">BRACELETS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="Earings.html">EARINGS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">MEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="Caps.html">CAPS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="RingsMen.html">RINGS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="shoe.html">
                                            SHOES &raquo;
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu">
                                            <li>
                                                <a class="dropdown-item" href="#">WOMEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="summer-women.html">SUMMER
                                                            COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="winter-women.html">WINTER
                                                            COLLECTION</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">MEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="summer-men.html">SUMMER
                                                            COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="winter-men.html">WINTER
                                                            COLLECTION</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-primary fw-bold dropdown-toggle" data-bs-toggle="dropdown"
                                    href="sale.html">Sale</a>
                                <div class="dropdown-menu">
                                    <a href="acc.html" class="dropdown-item">Accessories</a>
                                    <a href="shoe.html" class="dropdown-item">Footwear</a>
                                    <a href="women_bottom.html" class="dropdown-item">Bottoms</a>
                                    <a href="Polo.html" class="dropdown-item">T-Shirts</a>
                                    <a href="all.html" class="dropdown-item">All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link text-primary fw-bold dropdown-toggle" data-bs-toggle="dropdown"
                                    href="#">Collections</a>
                                <div class="dropdown-menu">

                                    <a href="levi's.html" class="dropdown-item">LEVI'S</a>
                                    <a href="denim.html" class="dropdown-item">DENIM</a>
                                    <a href="zara.html" class="dropdown-item">ZARA</a>
                                    <a href="Polo.html" class="dropdown-item">POLO</a>
                                    <a href="all.html" class="dropdown-item">All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary fw-bold" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary fw-bold" href="contact.html">Contact Us</a>
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
                        <a href="home.html">
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
                                <a href="cat_women.html">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        WOMEN
                                    </button>
                                </a>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="top_women.html">Tops</a></li>
                                        <li><a href="women_bottom.html">Bottoms</a></li>
                                        <li><a href="acc.html">Accessories</a></li>
                                        <li><a href="summer-women.html">Footwear</a></li>
                                    </ul>
                                </div>
                                <a href="cat_men.html">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        MEN
                                    </button>
                                </a>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="Polo.html">Tops</a></li>
                                        <li><a href="men-bottoms.html">Bottoms</a></li>
                                        <li><a href="summer-men.html">Footwear</a></li>
                                    </ul>
                                </div>
                                <a href="acc.html">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        ACCESSORIES
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="Earings.html">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    WOMEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="Sacrfs.html">Sacrfs</a></li>
                                                    <li><a href="bracelets.html">Bracelets</a></li>
                                                    <li><a href="Earings.html">Earings</a></li>
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
                                                    <li><a href="Caps.html">Caps</a></li>
                                                    <li><a href="RingsMen.html">Rings</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                </a>

                                <a href="shoe.html">
                                    <button class="btn btn-toggle align-items-center rounded collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                        aria-expanded="false">
                                        SHOES
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="summer-women.html">
                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false">
                                                    WOMEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="summer-women.html">Summer Collection</a></li>
                                                    <li><a href="winter-women.html">Winter Collection</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <a href="summer-men.html">

                                                <button class="btn btn-toggle align-items-center rounded collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#dashboard-collapse"
                                                    aria-expanded="false" &nbsp; &nbsp;>
                                                    MEN
                                                </button>
                                            </a>
                                            <div class="collapse" id="dashboard-collapse">
                                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                                    <li><a href="summer-men.html">Summer Collection</a></li>
                                                    <li><a href="winter-men.html">Winter Collection</a></li>
                                                </ul>
                                            </div>

                                        </ul>
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#orders-collapse" aria-expanded="false">
                            Sale
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="acc.html" class="rounded">Accessories</a></li>
                                <li><a href="shoe.html" class="rounded">Footwear</a></li>
                                <li><a href="women_bottom.html" class="rounded">Bottoms</a></li>
                                <li><a href="Polo.html" class="rounded">T-shirts</a></li>
                                <li><a href="all.html" class="rounded">All</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                            data-bs-target="#home-collapse" aria-expanded="false">
                            Collections
                        </button>
                        <div class="collapse" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                                <li><a href="levi's.html" class="rounded">Levis</a></li>
                                <li><a href="denim.html" class="rounded">Denim</a></li>
                                <li><a href="zara.html" class="rounded">Zara</a></li>
                                <li><a href="Polo.html" class="rounded">Polo</a></li>
                                <li><a href="all.html" class="rounded">All</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <a href="blog.html">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="collapse" aria-expanded="false">
                                Blogs
                            </button>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="contact.html">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="collapse" aria-expanded="false">
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
        <span>Latest Blogs</span>
    </div>
    <div class="container">
        <div class="text-center">
            <br><br>
            <h1>Latest Blogs</h1>
            <br>
        </div>
        <div class="container">
            <div class="card-columns">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
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
                    <div class="col-sm-6 col-md-3 col-lg-3">
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
                    <div class="col-sm-6 col-md-3 col-lg-3">
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
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1601924928357-22d3b3abfcfb?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">How Much To Budget For Clothes</h5>
                                    <p class="card-text">The Eco-Age founder and campaigner Livia Firth has gone further
                                        and repurposed four of her mother’s vintage Hermès scarves from the 70s and 80s
                                        into two maxi skirts, commissioning a seamstress she works with a lot to sew
                                        them.</p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1554568218-0f1715e72254?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> How To Wear The Same Outfit For 30 Days</h5>
                                    <p class="card-text">Sometimes bad fastenings happen to good garments, whether it’s
                                        the button that repeatedly catches in your hair or my own personal repeat
                                        wardrobe fail, the aforementioned jumpsuit with its basically useles. </p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1502389614483-e475fc34407e?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Sample Sales In Your City </h5>
                                    <p class="card-text">All can be replaced, says Bennett, whether you’re swapping a
                                        button for a decorative ribbon or putting a zip in or trying corset-style
                                        lacing. Or, if there is another fastening elsewhere on the garment, stitching up
                                        the seam altogether.
                                    </p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1512413316925-fd4b93f31521?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Season Trends To Know
                                    </h5>
                                    <p class="card-text">In these perilous times, a truth-seeking global news
                                        organisation like the Guardian is essential. We have no shareholders or
                                        billionaire owner, meaning our journalism is free from commercial and political
                                        influence – this makes us different. </p>
                                    <p class="card-text"><small class="text-muted"><i class="fa fa-eye"></i>1000<i
                                                class="fa fa-user"></i>admin<i class="fa fa-calendar-alt"></i>Jan 20,
                                            2018</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top"
                                    src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Summer Festival Outfit Ideas
                                    </h5>
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
                </div>



            </div>
        </div>
    </div>

    <footer>
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

</html><?php /**PATH C:\Project\attire\resources\views/blog.blade.php ENDPATH**/ ?>