<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping cart </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300|Lato:400,300,300italic,400italic,700,700italic|Playfair+Display:400,400italic,700,700italic|Droid+Serif:400,700,400italic,700italic|Roboto:400,700">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


    
</head>
<body class="checkout-cart-index page-layout-1column ">
    <div class="wrapper">
        <div id="header" class="site-header style1 style-black mid-header">
            <div class="container-fluid">
                <div class="header-content">
                    
                    <div class="logo">
                        <a href="home.html"><img alt="" src="images/logo.png"></a>
                    </div><!-- logo  -->

                    <span data-action="toggle-nav" class="action nav-toggle"><span class="pe-7s-menu"></span></span> <!-- toggle menu mobile -->

                    <div class="minicart-wrapper dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="pe-7s-shopbag"></span>
                            <span class="counter qty">
                                <span class="counter-number">0</span>
                            </span>
                        </a>
                        <div class="block-minicart dropdown-menu dropdown-menu-right">
                            <div id="minicart-content-wrapper">
                                <div class="minicart-items-wrapper">
                                    <ol class="minicart-items">
                                        <li class="product-item">
                                            <a class="product-item-photo" href="#" title="The Name Product">
                                                <img class="product-image-photo" src="images/media/minicart.jpg" alt="The Name Product">
                                            </a>
                                            <div class="product-item-details">
                                                <strong class="product-item-name">
                                                    <a href="#">The Name Product</a>
                                                </strong>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item-pricing">
                                                    <span class="price-qty">1</span>
                                                    <span class="price">$200.00</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="action delete" href="#"  title="Remove item">
                                                        <span >Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <a class="product-item-photo" href="#" title="The Name Product">
                                                <img class="product-image-photo" src="images/media/minicart.jpg" alt="The Name Product">
                                            </a>
                                            <div class="product-item-details">
                                                <strong class="product-item-name">
                                                    <a href="#">The Name Product</a>
                                                </strong>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                            <span style="width:70%">
                                                                <span><span>70</span>% of <span>100</span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item-pricing">
                                                    <span class="price-qty">1</span>
                                                    <span class="price">$200.00</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="action delete" href="#"  title="Remove item">
                                                        <span >Remove</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="subtotal">
                                    <span class="label">total</span>
                                    <span class="price">$400.00</span>
                                </div>
                                <div class="actions">
                                    <button class="btn btn-default checkout" type="button" title="Check Out">
                                        <span>Check Out</span>
                                    </button>
                                    <a  class="btn btn-default viewcart" href="">
                                        <span>go to cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Cart header -->

                    <div class="customer-setting dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="pe-7s-config"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" >
                            <div class="header-link">
                                <span class="title">Account</span>
                                <ul class="links">
                                    <li>
                                        <a href="#" class="link-account"><i class="fa fa-user" aria-hidden="true"></i>My Account</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-wishlist"><i class="fa fa-heart" aria-hidden="true"></i>My Wishlist </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Cart</a>
                                    </li>

                                    <li>
                                        <a href="#" class="link-checkout"><i class="fa fa-usd" aria-hidden="true"></i>Check Out</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-login"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Login</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="switcher-language" class="switcher switcher-language">
                                <strong class="switcher-label"><span>Language</span></strong>
                                <ul class="switcher-options">
                                    <li class="active switcher-option">
                                        <strong>
                                            <img alt="" src="images/flags/flag_english.png" class="switcher-flag">
                                            <span class="switcher-text">English   </span>
                                        </strong>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img alt="" src="images/flags/flag_french.png" class="switcher-flag">
                                            <span class="switcher-text">French</span>
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img alt="" src="images/flags/flag_spain.png" class="switcher-flag">
                                            <span class="switcher-text">Spain</span>
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img alt="" src="images/flags/flag_germany.png" class="switcher-flag">
                                            <span class="switcher-text">Germany</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="switcher-currency" class="switcher switcher-currency">
                                <strong class="switcher-label"><span>Currency</span></strong>
                                <ul class="switcher-options">
                                    <li class="active switcher-option">
                                        <strong><i class="fa fa-usd" aria-hidden="true"></i><span>- usd</span></strong>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#"><i class="fa fa-eur" aria-hidden="true"></i><span>- eur</span></a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#"><i class="fa fa-gbp" aria-hidden="true"></i><span>- gbp</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- Setting header -->

                    <div id="switcher-block-search" class="block-search dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="pe-7s-search"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form id="search_mini_form" class="form minisearch">
                                <div class="control">
                                    <input type="text"  class="input-search" placeholder="Search here..." id="search">
                                </div>
                                <button class="action search" title="Search" type="submit" disabled="">
                                    <span>Search</span>
                                </button>
                                <a class="close-search" href="#" role="button" data-toggle="dropdown">x</a>
                            </form>
                        </div>
                    </div><!-- Search box -->

                    <nav class="navigation">
                        <ul class="ui-menu" >
                            <li class="level0 level-top parent first active">
                                <a class="level-top" href="home.html">
                                    <span>home</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first">
                                        <a href="home1.html">
                                            <span>homepage 01</span>
                                        </a>
                                    </li>
                                    <li class="level1 parent">
                                        <a href="home2.html">
                                            <span>homepage 02</span>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="level1 submenu">
                                            <li class="level2 first">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2 last">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1">
                                        <a href="home3.html">
                                            <span>homepage 03</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="home4.html">
                                            <span>homepage 04</span>
                                        </a>
                                    </li>
                                    <li class="level1 parent">
                                        <a href="home5.html">
                                            <span>homepage 05</span>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="level1 submenu">
                                            <li class="level2 first">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                            <li class="level2 last">
                                                <a href="">
                                                    <span>Sub-menu 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1">
                                        <a href="home6.html">
                                            <span>homepage 06</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="home7.html">
                                            <span>homepage 07</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="home8.html">
                                            <span>homepage 08</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="home9.html">
                                            <span>homepage 09</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="home10.html">
                                            <span>homepage 10</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="home11.html">
                                            <span>homepage 11</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="home12.html">
                                            <span>homepage 12</span>
                                        </a>
                                    </li>
                                    <li class="level1 last">
                                        <a href="home13.html">
                                            <span>homepage 13</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 level-top parent">
                                <a class="level-top" href="Gird_Products.html">
                                    <span>shop</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first">
                                        <a href="Gird_Products.html">
                                            <span>Shop Full Width</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Gird_Products_Sidebar.html">
                                            <span>Shop Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="List_Products.html">
                                            <span>Shop List Products</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="List_Products_Sidebar.html">
                                            <span>Shop List Products Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Detail_Products.html">
                                            <span>Detail Products</span>
                                        </a>
                                    </li>
                                    <li class="level1 ">
                                        <a href="Gird_Products_Sidebar.html">
                                            <span>Gird Products Sidebar </span>
                                        </a>
                                    </li>
                                    <li class="level1 last">
                                        <a href="Shopping_Cart.html">
                                            <span>Shopping Cart </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 level-top parent megamenu">
                                <a class="level-top" href="">
                                    <span>elements</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first parent">
                                        <a href="">
                                            <span>Product Elements</span>
                                            
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="level1 submenu">
                                            <li class="level2 first">
                                                <a href="">
                                                    <span>Product Deal</span>
                                                    <span class="label-menu label-new">new</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Products By Category</span>
                                                    <span class="label-menu label-hot">hot</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Variable Product</span>
                                                    <span class="label-menu label-sale">sale</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Product Featured video</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Product image zoom</span>
                                                </a>
                                            </li>
                                            <li class="level2 last">
                                                <a href="">
                                                    <span>Product layout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 parent">
                                        <a href="">
                                            <span>Product Elements</span>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="level1 submenu">
                                            <li class="level2 first">
                                                <a href="">
                                                    <span>Products - Best Selling   </span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Featured - Hover Push</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Top Rate - Hover flip</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Product - recent</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Product - on sale</span>
                                                </a>
                                            </li>
                                            <li class="level2 last">
                                                <a href="">
                                                    <span>Product - columns</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 parent">
                                        <a href="">
                                            <span>Theme Elements</span>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <ul class="level1 submenu">
                                            <li class="level2 first">
                                                <a href="">
                                                    <span>Accordion / Tabs</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Google Maps</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Columns</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Team Works</span>
                                                </a>
                                            </li>
                                            <li class="level2">
                                                <a href="">
                                                    <span>Testimonials</span>
                                                </a>
                                            </li>
                                            <li class="level2 last">
                                                <a href="">
                                                    <span>Raymond banner</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 last">
                                        <div class="custom-block">
                                            <a href="" class="custom-img">
                                                <img alt="" src="images/banner/banner-menu.jpg">
                                                <span>custom block</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 level-top parent">
                                <a class="level-top" href="contact.html">
                                    <span>pages</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first">
                                        <a href="contact.html">
                                            <span>Contact Us      </span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="about-us.html">
                                            <span>About Us</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="404.html">
                                            <span>404 Error</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="login.html">
                                            <span>Login or regiter </span>
                                        </a>
                                    </li>
                                    <li class="level1 last">
                                        <a href="Under_Construction.html">
                                            <span>Under Construction</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 level-top parent">
                                <a class="level-top" href="Blogs.html">
                                    <span>blogs</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first">
                                        <a href="Blogs.html">
                                            <span>Blog Right Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Blogs.html">
                                            <span>Blog Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Blogs.html">
                                            <span>Blog 2 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Blogs.html">
                                            <span>Blog 3 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Blogs.html">
                                            <span>Blog 4 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1 last">
                                        <a href="Detail_Blogs.html">
                                            <span>detail blog</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 level-top parent last">
                                <a class="level-top" href="Portfolio.html">
                                    <span>Portfolio</span>
                                </a>
                                <span class="toggle-submenu"></span>
                                <ul class="level0 submenu">
                                    <li class="level1 first">
                                        <a href="Portfolio.html">
                                            <span>Portfolio 2 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Portfolio.html">
                                            <span>Portfolio 3 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Portfolio.html">
                                            <span>Portfolio 4 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1">
                                        <a href="Portfolio.html">
                                            <span>Portfolio 5 Columns</span>
                                        </a>
                                    </li>
                                    <li class="level1 last">
                                        <a href="Detail_Portfolio.html">
                                            <span>detail Portfolio</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- Main menu -->
                    
                </div>
            </div>
        </div><!-- site-header -->

        <div id="main" class="site-main">
            <div class="custom-title-wrapper ">
                <div class="container">
                    <div class="page-title-wrapper">
                        <h1 class="page-title" >
                            Shopping cart
                        </h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Shopping cart</li>
                    </ol>
                </div>
            </div>

            <div class="columns container">
                <div class="clearfix">

                    <div class="block-form-cart">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col item">Product   </th>
                                    <th class="col qty">Quantity </th>
                                    <th class="col unti-price">Unti price  </th>
                                    <th class="col price">Price  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col item" data-th="Product">
                                        <div class="clearfix item-product">
                                            <div class="item-photo">
                                                <a href=""><img alt="" src="images/media/cart.jpg"></a>
                                            </div>
                                            <div class="detail">
                                                <a href="" class="item-name">The Nam Products</a>
                                                <div class="item-type">
                                                    <span>Color: White</span>
                                                    <span>Size: 40</span>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="col qty" data-th="Quantity">
                                        <input type="text" class="form-control " title="Qty"  value="1" >
                                        <a href="" class="action-remove">X</a>

                                    </td>

                                    <td class="col unti-price" data-th="Unti price">
                                        $2000.00 

                                    </td>

                                    <td class="col price" data-th="Price">
                                        $200.00 

                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="col item" data-th="Product">
                                        <div class="clearfix item-product">
                                            <div class="item-photo">
                                                <a href=""><img alt="" src="images/media/cart.jpg"></a>
                                            </div>
                                            <div class="detail">
                                                <a href="" class="item-name">The Nam Products</a>
                                                <div class="item-type">
                                                    <span>Color: White</span>
                                                    <span>Size: 40</span>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="col qty" data-th="Quantity">
                                        <input type="text" class="form-control " title="Qty"  value="1" >
                                        <a href="" class="action-remove">X</a>

                                    </td>

                                    <td class="col unti-price" data-th="Unti price">
                                        $2000.00 

                                    </td>

                                    <td class="col price" data-th="Price">
                                        $200.00 

                                    </td>
                                </tr>

                                <tr>
                                    <td class="col item" data-th="Product">
                                        <div class="clearfix item-product">
                                            <div class="item-photo">
                                                <a href=""><img alt="" src="images/media/cart.jpg"></a>
                                            </div>
                                            <div class="detail">
                                                <a href="" class="item-name">The Nam Products</a>
                                                <div class="item-type">
                                                    <span>Color: White</span>
                                                    <span>Size: 40</span>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="col qty" data-th="Quantity">
                                        <input type="text" class="form-control " title="Qty"  value="1" >
                                        <a href="" class="action-remove">X</a>

                                    </td>

                                    <td class="col unti-price" data-th="Unti price">
                                        $2000.00 

                                    </td>

                                    <td class="col price" data-th="Price">
                                        $200.00 

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-options-cart">
                        

                        <!-- Nav tabs -->
                        <div class="block-title">
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#tabship" role="tab" data-toggle="tab">estimate shipping & taxe  </a></li>
                                <li role="presentation"><a href="#tabvoucher"  role="tab" data-toggle="tab">use gift voucher</a></li>
                                <li role="presentation"><a href="#tabcoupon"  role="tab" data-toggle="tab">use coupon code</a></li>
                                
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="block-content">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tabship">
                                    <p class="field note">Enter your destination to get a shipping estimate.</p>
                                    <div class="form-group">
                                        <label for="forContry">Contry <sup>*</sup></label>
                                        <select id="forContry" class="form-control">
                                            <option>--- Please select ---</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="forRegion">Region / State <sup>*</sup> </label>
                                        
                                        <select id="forRegion" class="form-control">
                                            <option>--- Please select ---</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Post Code <sup>*</sup></label>
                                        <input type="text"  class="form-control">
                                        
                                    </div>
                                    <div class="actions">
                                        <button class="btn btn-default" type="submit">GET QUOTES</button>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tabvoucher">
                                    <p class="field note">Enter discount code.</p>
                                    <div class="form-group">
                                        
                                        <input type="text"  class="form-control">
                                    </div>
                                    <div class="actions">
                                        <button class="btn btn-default" type="submit">Apply </button>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tabcoupon">
                                    <p class="field note">Enter discount code.</p>
                                    <div class="form-group">
                                        
                                        <input type="text"  class="form-control">
                                    </div>
                                    <div class="actions">
                                        <button class="btn btn-default" type="submit">Apply </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>   

                    <div class="block-cart-totals">
                        <div class="data-totals">
                            <ul>
                                <li class="totals">
                                    <span class="label">SubTotal: </span>
                                    <span class="amount">$800.00</span>
                                </li>
                                <li class="shipping">
                                    <span class="label">Shipping: </span>
                                    <span class="amount"> $20.00</span>
                                </li>
                                <li class="tax">
                                    <span class="label">Tax  (10%):   </span>
                                    <span class="amount"> $80.00</span>
                                </li>
                                <li class="grand">
                                    <span class="label">Total:   </span>
                                    <span class="amount">  $900.00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="actions clearfix">
                            <a href="" class="btn btn-inline link-shop">continue shopping</a>
                            <a href="" class="btn btn-inline link-order">confirm order</a>
                        </div>
                    </div>  
                </div>
            </div>
            
        </div><!-- site-main -->

        <div id="footer" class="site-footer style2 style-black">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col col-md-2 col-lg-3 col-sm-2">
                            <a href="" class="logo-footer"><img alt="" src="images/logo-footer-home2.png"></a>
                        </div><!-- Logo Footer -->

                        <div class="col col-md-4 col-lg-4 col-sm-5">
                            <div class="social">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-rss" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div><!-- Link - Social -->

                        <div class="col col-md-6 col-lg-5 col-sm-5 ">
                            <div class="block-newsletter">
                                <div class="container">
                                    <div class="block-title">
                                        <strong>GET newsletter</strong>
                                    </div>
                                    <div class="block-content">
                                        <form  class="form subscribe">
                                            <div class="control">
                                                <input type="email" placeholder="Type your email here"  name="email" class="input-subscribe">
                                            </div>
                                            <div class="actions">
                                                <button type="submit" title="Subscribe" class="btn subscribe">
                                                    <span>Subscribe</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Widget Newsletter -->

                    </div>
                </div>
            </div><!-- Footer Top -->

            <div class="footer-content">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-3 col-xs-6 col">
                            <ul class="contact">
                                <li>
                                    <span class="icon"> <span class="pe-7s-map-marker"></span></span>
                                    <span>ADELLA London Oxford Street 02 <br>United Kingdom.   </span>
                                </li>

                                <li>
                                    <span class="icon"> <span class="pe-7s-mail-open"></span></span>
                                    <span>emailadella@gmail.com <br> emailsupport@gmail.com</span>
                                </li>
                                <li>
                                    <span class="icon"> <span class="pe-7s-home"></span></span>
                                    <span>(+92) 3456 7890 <br> (+92) 1234 5678</span>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="col-sm-3 col-xs-6 col">
                            <ul class="links">
                                <li>
                                    <a href="">My account</a>
                                </li>
                                <li><a href="">Order history</a></li>
                                <li><a href="">Wish list</a></li>
                                <li><a href="">Returns</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Site map</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-sm-3 col-xs-6 col">
                            <ul class="links">
                                <li>
                                    <a href="">Help & Contact    </a>
                                </li>
                                <li><a href="">Shipping & taxes</a></li>
                                <li><a href="">Return policy</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Affiliate</a></li>
                                <li><a href="">Site map</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-3 col-xs-6 col">
                            <ul class="links">
                                <li>
                                    <a href="">New collection    </a>
                                </li>
                                <li><a href="">Best sellers</a></li>
                                <li><a href="">Manufacturers</a></li>
                                <li><a href="">New products</a></li>
                                <li><a href="">Supplier</a></li>
                                <li><a href="">Delivery & returns</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div><!-- Footer Content -->

            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        Copyright @ 2015 <a href="">ADELLA</a>. All rights reserved.
                    </div><!-- Copyright -->

                    <div class="paypal-img">
                        <img alt="" src="images/media/paypal1.png">
                        <img alt="" src="images/media/paypal2.png">
                        <img alt="" src="images/media/paypal3.png">
                        <img alt="" src="images/media/paypal4.png">
                    </div><!-- Image - payments -->

                </div>
            </div><!-- Footer Bottom -->

            <a class="back-to-top" href="#">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </a><!-- Back - To - Top -->

        </div><!-- site-footer -->
    </div>
    <!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- animate -->    
    <script type="text/javascript" src="js/css3-animate-it.js"></script>

    <!-- countUp -->    
    
    <script type="text/javascript" src="js/countUp/countUp.js"></script>
    
    <!-- Boostrap --> 
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <!-- Main -->  
    <script type="text/javascript" src="js/main.js"></script>

    
</body>
</html>