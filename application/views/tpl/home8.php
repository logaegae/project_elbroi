<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Version 8</title>

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
<body class="cms-index-index page-layout-1columns home-page8">
    <div class="wrapper">
        
        <div id="header" class="site-header style4">
            <div class="header-top">
                <div class="container clearfix">

                    <div class="dropdown header-link">
                        <a class="dropdown-toggle switcher-trigger" href="#" role="button" data-toggle="dropdown"><span>My Account</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu " >
                            <li>
                                <a class="link-account" href="#">My Account</a>
                            </li>
                            <li>
                                <a class="link-wishlist" href="#">Wishlist </a>
                            </li>
                            <li>
                                <a class="link-cart" href="#">My Cart</a>
                            </li>

                            <li>
                                <a class="link-checkout" href="#">Check Out</a>
                            </li>
                            <li>
                                <a class="link-login" href="#">Login</a>
                            </li>
                        </ul>
                    </div><!-- My Account  -->

                    
                    <div class="dropdown switcher  switcher-language">
                        <a class="dropdown-toggle switcher-trigger" href="#" role="button" data-toggle="dropdown"><span>English</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu switcher-options " >
                            <li class="switcher-option">
                                <a href="#">
                                    English
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    vietnam
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    English
                                </a>
                            </li>
                        </ul>
                    </div><!-- Switcher-Language  -->
                    
                    <div class="dropdown switcher  switcher-currency">
                        <a class="dropdown-toggle switcher-trigger" href="#" role="button" data-toggle="dropdown"><span>Usd</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu switcher-options " >
                            <li class="switcher-option">
                                <a href="#">
                                    USD
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    VND
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    USD
                                </a>
                            </li>
                        </ul>
                    </div><!-- Switcher-Currency  -->

                </div>
            </div>
            <div class=" header-content">
                <div class="container clearfix">

                    <div id="switcher-block-search" class="block-search dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="pe-7s-search"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form id="search_mini_form" class="form minisearch">
                                <div class="control">
                                    <input type="text"  class="input-search" placeholder="Search here..." id="search">
                                </div>
                                <button class="action search" title="Search" type="submit">
                                    <span>Search</span>
                                </button>
                                <a class="close-search" href="#" role="button" data-toggle="dropdown">x</a>
                            </form>
                        </div>
                    </div><!-- Search box -->
                    
                    <div class="logo">
                        <a href="home.html"><img alt="" src="images/logo.png"></a>
                    </div><!-- logo  -->

                    <span data-action="toggle-nav" class="action nav-toggle"><span class="pe-7s-menu"></span></span> <!-- toggle menu mobile -->

                    <div class="minicart-wrapper dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="pe-7s-shopbag"></span>
                            <span class="counter qty">(
                                <span class="counter-number">2</span>
                                <span class="text">items</span>)
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
                    <div class="wishlist-link">
                        <a href=""><span class="pe-7s-like"></span><span class="count">(0)</span></a>
                    </div>
                    
                </div>
            </div>

            <div class="header-nav mid-header">
                <div class="container">

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

            <div class="container">
                <div class="row">

                    <div class="col-sm-8">

                        <div class="block-slides slide-sm">
                            <div class="owl-carousel " data-nav="false" data-dots="true" data-margin="0" 
                                data-items='1' data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                                <div class="item-slide item-slide1" >
                                    <img alt="" src="images/slide/slide8-1.jpg">
                                    <div class="figcaption">
                                        <div class="box-table">
                                            <div class="box-td">
                                                <div class="box-des">
                                                    <span class="text-medium">The Best Ecommerce Wordpress Theme</span>
                                                    <h1 class="text-large">we are adella</h1>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slide item-slide2" >
                                    <img alt="" src="images/slide/slide8-2.jpg">
                                    <div class="figcaption">
                                        <div class="box-table">
                                            <div class="box-td">
                                                <div class="box-des">
                                                    <span class="text-medium">Mid Season On Sale</span>
                                                    <h1 class="text-large">real for men</h1>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-slide item-slide5" >
                                    <img alt="" src="images/slide/slide8-3.jpg">
                                    <div class="figcaption">
                                        <div class="box-table">
                                            <div class="box-td">
                                                <div class="box-des">
                                                    <span class="text-medium">Collection For Women</span>
                                                    <h1 class="text-large">hot & trendy clothes</h1>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                                                    <a href="" class="btn btn-inline">shop now</a>
                                                    <a href="" class="btn btn-inline-sub">promotion</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- slide home8 -->
                    </div>

                    <div class="col-sm-4">
                        <div class=" block-banner2 ">
                            <img alt="" src="images/banner/banner8-3.jpg">
                            <div class="des">
                                <div class="des1">
                                    <div class="des2">
                                        <span class="title"> the trendy 2016</span>
                                        <span >save up to 30%</span>
                                        <a href="" class="btn btn-link">shop now</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div><!-- widget -  banner --> 

                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-8">
                        <div class="block-banner3">
                            <img alt="" src="images/banner/banner8-1.jpg">
                            <div class="des">
                                <div class="des1">
                                    <div class="des2">
                                        <span class="title">specail for this season</span>
                                        <span >women’s collection</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="block-banner4">
                            <img alt="" src="images/banner/banner8-2.jpg">
                            <div class="des">
                                <div class="des1">
                                    <div class="des2">
                                        <span class="title">the BIGGEST</span>
                                        <span >WINTTER collection</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="block-products-tab tab-filter tab-style1">

                    <div class="block-title">

                        <ul class="nav nav-pills" >
                            <li class="active">
                                <a href="" >ALL products</a>
                            </li>
                            <li class="">
                                <a href="" >WOMEN</a>
                            </li>
                            <li class="">
                                <a href="" >MEN</a>
                            </li>
                            <li class="">
                                <a href="" >collection</a>
                            </li>
                        </ul><!-- Nav Category -->
                        
                        <div class="box-search">
                            <div class="has-feedback">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="pe-7s-search form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div><!-- Search Product -->

                        <div class="dropdown filter">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                               <span>filter</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="filter-item filter-sort">
                                            <h3 class="title">sort by</h3>
                                            <div class="content">
                                                <ul>
                                                    <li><a href=""> Default    </a></li>
                                                    <li><a href="">Popularity</a></li>
                                                    <li><a href="">The latest</a></li>
                                                    <li><a href="">Average rating</a></li>
                                                    <li><a href="">Price:  to Hight</a></li>
                                                    <li><a href="">Price: Hight to Low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="filter-item filter-price">
                                            <h3 class="title">price</h3>
                                            <div class="content">
                                                <ul>
                                                    <li><a href=""> $0.00 - 50.00       </a></li>
                                                    <li><a href="">$50.00 - $100.00</a></li>
                                                    <li><a href="">$100.00 - $150.00</a></li>
                                                    <li><a href="">$150.00 - $200.00</a></li>
                                                    <li><a href="">$200.00 - $250.00</a></li>
                                                    <li><a href="">$250.00 +</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="filter-item filter-color">
                                            <h3 class="title">color</h3>
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #262626;"></span>
                                                            <span class="text">Black</span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #ffffff;"></span>
                                                            <span class="text"> White    </span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #f69600;"></span>
                                                            <span class="text">Orange</span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #00c7c5;"></span>
                                                            <span class="text">Blue</span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #fced00;"></span>
                                                            <span class="text">Yelow</span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="icon" style="background-color: #755500;"></span>
                                                            <span class="text">Brown</span> 
                                                            <span class="count">(10)</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="filter-item filter-tags">
                                            <h3 class="title">products tags</h3>
                                            <div class="content">
                                                <ul>
                                                    <li><a href="">Top</a></li>
                                                    <li><a href="">Fashion</a></li>
                                                    <li><a href="">Collection Men</a></li>
                                                    <li><a href="">Collection Women</a></li>
                                                    <li><a href="">Gallery</a></li>
                                                    <li><a href="">New</a></li>
                                                    <li><a href="">Top</a></li>
                                                    <li><a href="">Fashion</a></li>
                                                    <li><a href="">Collection Men</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Filter Product -->

                        
                    </div>

                    <div class="block-content">
                        <div class="tab-content">
                            <div class="tab-pane active" >
                                <div class="products-grid">

                                    <ol class="product-items">

                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product1.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                        <span class="product-item-label label-sale">sale</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="price-from"> 
                                                                <span class="price">$61.00</span> 
                                                            </span>
                                                            <span class="price-to">
                                                                <span class="price">$77.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product2.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="price-from"> 
                                                                <span class="price">$61.00</span> 
                                                            </span>
                                                            <span class="price-to">
                                                                <span class="price">$77.00</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product3.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="price">$61.00</span> 
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product2.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">
                                                                <span class="price">$20.00</span>
                                                            </span>
                                                            <span class="special-price">
                                                                <span class="price">$15.00</span>
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product2.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">
                                                                <span class="price">$20.00</span>
                                                            </span>
                                                            <span class="special-price">
                                                                <span class="price">$15.00</span>
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product3.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="price">$61.00</span> 
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product2.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">
                                                                <span class="price">$20.00</span>
                                                            </span>
                                                            <span class="special-price">
                                                                <span class="price">$15.00</span>
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-info">
                                                <div class="product-item-head">
                                                    <a href="" class="product-item-photo">
                                                        <img alt="The Name Product Demo" src="images/media/product2.jpg" class="product-image-photo">
                                                        <span class="product-item-label label-new">new</span>
                                                    </a>
                                                    <a href="" class="action quick-view"><span class="pe-7s-search"></span></a>
                                                </div>
                                                <div class="product-item-details">
                                                    <a href="" class="product-item-category">Men' clothing </a>
                                                    <strong class="product-item-name">
                                                        <a href="" class="product-item-link">The Name Product Demo </a>
                                                    </strong>
                                                    <div class="product-item-info-price">
                                                        <div class="product-reviews-summary">
                                                            <div class="rating-summary">
                                                                <div class="rating-result" title="70%">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">
                                                                <span class="price">$20.00</span>
                                                            </span>
                                                            <span class="special-price">
                                                                <span class="price">$15.00</span>
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <div class="actions-primary">
                                                            <button class="btn btn-default" title="Add to Cart" type="submit">
                                                                <span>select option</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <button class="action tocart" title="Add to Cart" type="submit">
                                                                <span>Add to Cart</span>
                                                            </button>
                                                            <a title="Wish List" class="action towishlist" href="#">
                                                                <span>Wish List</span>
                                                            </a>
                                                            <a title="Compare" class="action tocompare" href="#">
                                                                <span>Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol><!-- list product -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-bottom">
                        <a href="" class="btn btn-default">view more</a>
                    </div>
                </div>
            </div>

        </div><!-- site-main -->

        <div id="footer" class="site-footer style1 style-black">

           
            <div class="footer-content">
                <div class="container">
                    <div class="social">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-rss" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </div><!-- Link - Social -->

                    <ul class="footer-links">
                        <li><a href="">Help & Contact</a></li>
                        <li><a href="">Shipping & taxes</a></li>
                        <li><a href="">Return policy</a></li>
                        <li><a href="">affiliates</a></li>
                        <li><a href="">legalnotice</a></li>
                    </ul><!-- links -->

                    <div class="copyright">
                        Copyright @ 2015 <a href="">ADELLA</a>. All rights reserved.
                    </div><!-- Copyright -->
                </div>
            </div>
            
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

    <!-- Main -->  
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>