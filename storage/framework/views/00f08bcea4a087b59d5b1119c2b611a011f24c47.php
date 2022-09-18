<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Delete Products</title>
</head>
<style>
    .form-group {
        position: relative;
        left: 90px;
    }
    
    .hidden {
        display: none;
    }
    
    .thank-you {
        padding: 160px;
        font-size: 32px;
        text-align: center;
    }
</style>

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
                            <a class="fa fa-user fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"> Admin</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="">Sign Out</a></li>
                                <li><a class="dropdown-item" href="adminDashboard.html">Dashboard</a></li>
                            </ul>
                        </div>
                    </button>
                    <button type="button" class="btn position-relative" style="color: blue;">
                        <div class="dropdown">
                            <a class="fa fa-bar-chart fa-lg" style="text-decoration: none;" data-bs-toggle="dropdown"> </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="adminDashboard.html">View Statictics</a></li>
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

    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="addProduct.html" class="btn btn-primary w-100" >ADD</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="updateProduct.html" class="btn btn-primary w-100" >UPDATE</a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="delProduct.html" class="btn btn-primary w-100" >DELETE</a>
            </div>
        </div>
    </div>
    <br><br>
    <section style="background-color:#55acee; width: 1100px; margin: auto;">
        <div class="container center-block">
            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend style="text-align: center;font-size: 32px; font-weight: bold; text-decoration: underline; padding: 30px 0px;">DELETE PRODUCTS</legend>

                    <!-- Text input-->
                    <div class="form-group container">
                        <label class="col-md-10 control-label" for="product_name">PRODUCT NAME</label>
                        <div class="col-md-10">
                            <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" type="text">
                            <div class="error-hint hidden" style="color:red">Product Name is Required</div>
                        </div>
                    </div>
                    <br>

                    <!-- Text input-->
                    <div class="form-group container">
                        <label class="col-md-10 control-label" for="online_date">DATE</label>
                        <div class="col-md-10">
                            <input id="online_date" name="online_date" placeholder="mm/dd/yyyy" class="form-control input-md" type="text">
                            <div class="error-hint hidden" style="color:red">Product Deletion Date is required </div>
                        </div>
                    </div>
                    <br>
                    
                    <!-- Button -->
                    <div class="form-group container" style="position: relative; bottom: 25px">
                        <label class="col-md-10 control-label" for="singlebutton"></label>
                        <div class="col-md-10">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">DELETE PRODUCT</button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <div class="thank-you hidden">Product Deleted Successfully!!!</div>
        </div>
    </section>
    <br><br>
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
</body>
<script src="js/del.js"></script>

</html><?php /**PATH C:\Project\attire\resources\views/delProduct.blade.php ENDPATH**/ ?>