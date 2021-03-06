<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="accueil.php"> <img src="img/LOGOHUNT3.png" alt="logo"> HUNT KINGDOM </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">A propos de nous</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_1"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Boutique
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                <a class="dropdown-item" href="product_list.php"> product list</a>
                                <a class="dropdown-item" href="single-product.php">product details</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_3"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                <a class="dropdown-item" href="index.php">
                                    login

                                </a>
                                <a class="dropdown-item" href="checkout.php">product checkout</a>
                                <a class="dropdown-item" href="cart.php">shopping cart</a>
                                <a class="dropdown-item" href="confirmation.php">confirmation</a>
                                <a class="dropdown-item" href="elements.php">elements</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown_2"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                <a class="dropdown-item" href="blog.php"> blog</a>
                                <a class="dropdown-item" href="single-blog.php">Single blog</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="hearer_icon d-flex align-items-center">
                    <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <a href="cart.php">
                        <i class="flaticon-shopping-cart-black-shape"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="search_input" id="search_input_box">
    <div class="container ">
        <form class="d-flex justify-content-between search-inner">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="ti-close" id="close_search" title="Close Search"></span>
        </form>
    </div>
</div>