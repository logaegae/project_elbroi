<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>사이트 공사중 </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300|Lato:400,300,300italic,400italic,700,700italic|Playfair+Display:400,400italic,700,700italic|Droid+Serif:400,700,400italic,700italic|Roboto:400,700">
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/static/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/static/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/static/css/helper.css">
    <link rel="stylesheet" type="text/css" href="/static/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/static/css/jquery.bxslider.css">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="/static/css/style.css?v0c.1">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="/static/css/responsive.css">

    
</head>
<body class="page-construction page-layout-1column ">

    <div id="header" class="site-header style1 style-black">
        <div class="container-fluid">
            <div class="header-content">
                
                <div class="logo">
                    <a href="index">
                    	<!-- <img alt="" src="/static/images/logo-home2.png"> -->
                    	<h1 style="color:white">ELBROI</h1>
                    </a>
                </div><!-- logo  -->

                
            </div>
        </div>
    </div><!-- site-header -->

    <div id="main" class="site-main">
        

        <div class="columns container">
            <div class="block-construction" style="background-image:url(/static/images/media/construction2.jpg);">
                <div class="content">

                    <h2 class="title-page">사이트 공사중</h2>
                    <p class="text-medium">현재 사이트는 공사중입니다.</p>
                    
                    <div class="countdown">
                        <span class="box"><span id="day">-</span> <span class="text">day</span></span>
                        <span class="box"><span id="hrs">-</span> <span class="text">hrs</span></span>
                        <span class="box"><span id="mins">-</span> <span class="text">mins</span></span>
                        <span class="box"><span id="secs">-</span> <span class="text">secs</span></span>
                    </div>
                </div>
            </div>
          
        </div>
        
    </div><!-- site-main -->

    <div id="footer" class="site-footer style2 style-black">


        <div class="footer-bottom">
            <div class="container">

                <div class="copyright">
                    Copyright @ 2017 <a href="">ELBROI</a>. All rights reserved.
                </div><!-- Copyright -->

            </div>
        </div><!-- Footer Bottom -->


    </div><!-- site-footer -->

    <!-- jQuery -->    
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>

    <!-- animate -->    
    <script type="text/javascript" src="/static/js/css3-animate-it.js"></script>

    <!-- countUp -->    
    
    <script type="text/javascript" src="/static/js/countUp/countUp.js"></script>
    
    <!-- Boostrap --> 
    <script type="text/javascript" src="/static/js/bootstrap.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="/static/js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="/static/js/owl.carousel.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="/static/js/jquery-ui.min.js"></script>

    <!-- Main -->  
    <script type="text/javascript" src="/static/js/main.js"></script>

    <script>
	// Set the date we're counting down to
	var countDownDate = new Date("Oct 30, 2017 23:59:59").getTime();
	
	// Update the count down every 1 second
	var x = setInterval(function() {
	
	  // Get todays date and time
	  var now = new Date().getTime();
	
	  // Find the distance between now an the count down date
	  var distance = countDownDate - now;
	
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	
	  
	  document.getElementById("day").innerHTML = days;
	  document.getElementById("hrs").innerHTML = hours;
	  document.getElementById("mins").innerHTML = minutes;
	  document.getElementById("secs").innerHTML = seconds;
	
	  // If the count down is finished, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("day").innerHTML = "0";
	    document.getElementById("hrs").innerHTML = "0";
	    document.getElementById("mins").innerHTML = "0";
	    document.getElementById("secs").innerHTML = "0";
	  }
	}, 1000);
</script>

</body>
</html>