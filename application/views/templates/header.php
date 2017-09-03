<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300|Lato:400,300,300italic,400italic,700,700italic|Playfair+Display:400,400italic,700,700italic|Droid+Serif:400,700,400italic,700italic|Roboto:400,700">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css"> 	
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/static/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/static/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/static/css/helper.css">
    <link rel="stylesheet" type="text/css" href="/static/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/static/css/flat/_all.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="/static/css/responsive.css">
	
	<!-- jQuery -->    
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    
    <style>
    	body{
    		font-family: "Nanum Gothic";
    	}
    </style>
</head>
<body class="cms-index-index page-layout-1columns home-page9">

    <div class="wrapper">
            
        <div id="header" class="site-header style4">
            <div class="header-top">
                <div class="container clearfix">

                    <div class="dropdown header-link">
                        <a class="dropdown-toggle switcher-trigger" href="#" role="button" data-toggle="dropdown"><span>My Account</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu " >
                            <li>
                                <a class="link-account" href="#">마이페이지</a>
                            </li>
                            <li>
                                <a class="link-wishlist" href="#">위시리스트 </a>
                            </li>
                            <li>
                                <a class="link-cart" href="#">장바구니</a>
                            </li>
                            <li>
                                <a class="link-cart" href="#">결제하기</a>
                            </li>
							<?php if($this->session->logged_in) { ?>
                            <li>
                                <a class="link-checkout" href="#">로그아웃</a>
                            </li>
                            <?php } else { ?>
                            <li>
                                <a class="link-login" href="#">로그인</a>
                            </li>
                            <?php }?>
                        </ul>
                    </div><!-- My Account  -->

                    
                    <div class="dropdown switcher  switcher-language">
                        <a class="dropdown-toggle switcher-trigger" href="#" role="button" data-toggle="dropdown"><span>Korean</span> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu switcher-options " >
                            <li class="switcher-option">
                                <a href="#">
                                    Korean
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    Chinese
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
                                    English
                                </a>
                            </li>
                        </ul>
                    </div><!-- Switcher-Language  -->                  

                </div>
            </div>
            <div class=" header-content">
                <div class="container clearfix">

                    <div id="switcher-block-search" class="block-search dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="pe-7s-search"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form id="search_mini_form" class="form minisearch">
                                <div class="control">
                                    <input type="text"  class="input-search" placeholder="상품 검색..." id="search">
                                </div>
                                <button class="action search" title="Search" type="submit">
                                    <span>검색</span>
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
                                <span class="text">개 상품</span>)
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
                                                        <span >삭제</span>
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
                                                        <span >삭제</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="subtotal">
                                    <span class="label">총</span>
                                    <span class="price">$400.00</span>
                                </div>
                                <div class="actions">
                                    <button class="btn btn-default checkout" type="button" title="Check Out">
                                        <span>결제하기</span>
                                    </button>
                                    <a  class="btn btn-default viewcart" href="">
                                        <span>장바구니</span>
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
