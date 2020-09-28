<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="css/index-css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

</head>

<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <!-- Header Start -->
    <input type="checkbox" name="mobile-nav" id="mobile-nav" class="gaadiexp-check" onchange="this.blur()">
    <label for="mobile-nav" class="gaadiexp white" tabindex="0"><span></span></label>
    <nav role="navigation" class="header-nav">

        <div class="menu" style="margin-left: -16px;">
            <ul style="width: 267px; text-align: start;">

                <li class="page_item page-item-2">
                    <a href="index.php" class="list-group-item">Home</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="profile.html" class="list-group-item ">Activities</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="wishlist.html" class="list-group-item">The Resort</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="wishlist.html" class="list-group-item">Accommodation</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="interest.html" class="list-group-item">Environmental Policies</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="bids.html" class="list-group-item">Ayurveda</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Weedings</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Reservations</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="bid-history.html" class="list-group-item">Our Partners</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Awards & Recognition</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Gallery</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">What's New</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Special Offers</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">About us</a>
                </li>
                <li class="page_item page-item-2">
                    <a href="dashboard.html" class="list-group-item">Contact Us</a>
                </li>

            </ul>
        </div>

    </nav>

    <div class="slideshow-container1">
        <div class="mySlides fade1">
            <img src="images/index-imgs/ranweli_header1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade1">
            <img src="images/index-imgs/ranweli_header2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade1">
            <img src="images/index-imgs/ranweli_header3.jpg" style="width:100%">
        </div>

        <div style="text-align:center; margin-top: -50px;">
            <div>

                <body onload="startTime()" style="text-align: center; margin-top: -50px; font-size: 37px; "></body>
                <div id="txt" style="color: white;"></div>
            </div>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>

            <div class="navbar1" style="background-color: #ffffff42;  position: fixed; ">
                <div style="margin-left: 95px;">
                    <a href="#home" style="background-color: ##ffffffe0; float: left;">Accommodation</a>
                    <a href="#news" style="background-color: ##ffffffe0; float: left;">Dining</a>
                    <a href="#contact" style="background-color: ##ffffffe0; float: left;">Offers</a>

                    <a href="#book now" style="background-color: #dc3545; float: right;">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Body Start -->



        <!-- Type your code here -->




        <!-- Page Body End -->



        <!-- Footer Start -->
        <?php include "./footer.php" ?>
        <!-- Footer End -->

        <!-- JavaScripts -->
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 10000); // Change image every 10 seconds
            }

            //Clock
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                    h + ":" + m;
                var t = setTimeout(startTime, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }; // add zero in front of numbers < 10
                return i;
            }


            $(window).on("load", function() {
                $(".loader-container").fadeOut(1000);
            });


            $(window).load(function() {
                loadClock("clock");
            });
        </script>
</body>

</html>