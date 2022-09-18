<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <script defer src="js/validation.js"></script>
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
                                                        <a class="dropdown-item" href="summer-women.html">SUMMER COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="winter-women.html">WINTER COLLECTION</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">MEN &raquo;</a>
                                                <ul class="dropdown-menu dropdown-submenu">
                                                    <li>
                                                        <a class="dropdown-item" href="summer-men.html">SUMMER COLLECTION</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="winter-men.html">WINTER COLLECTION</a>
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
                        <a href="contact.html">
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
    <section>
        <div class="container">
            <form id="form" action="/OnlineStore/register" method="POST">
                <?php echo csrf_field(); ?>

                <h1>Registration</h1>
                <div class="input-control">
                    <label class="fa fa-user fa-lg" for="username"> Username</label>
                    <input id="username" name="username" type="text" placeholder="Abc2">
                    <div class="error"></div><br>
                </div>
                <div class="input-control">
                    <label class="fa fa-envelope fa-lg" for="email"> Email</label>
                    <input id="email" name="email" type="text" placeholder="Abc@domain.com">
                    <div class="error"></div><br>
                </div>
                <div class="input-control">
                    <label class="fa fa-lock fa-lg" for="password"> Password</label>
                    <input id="password" name="password" type="password" placeholder="Abcde12">
                    <div class="error"></div><br>
                </div>
                <div class="input-control">
                    <label class="fa fa-lock fa-lg" for="password2">Re-enter Password</label>
                    <input id="password2" name="password2" type="password" placeholder="password again">
                    <div class="error"></div><br>
                </div>
                <button type="submit">Sign Up</button>
                <br><br>
                <a style="text-decoration:none;" class="fa fa-user fa-lg"
                    href="login.blade.php"> Already have an Account? Log In!</a>
            </form>
        </div>
    </section>
    <br><br>

</body>

</html><?php /**PATH C:\Project\attire\resources\views/OnlineStore/register.blade.php ENDPATH**/ ?>