<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hotel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css?v-1">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        /* Overlay and form styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            display: none; /* Initially hidden */
            justify-content: center;
            align-items: center;
            z-index: 999; /* Ensure the overlay is above other content */
        }

        .form-container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin-top:50px;
            margin-left:250px;
            margin-right:250px;
            padding-top:10px;
            padding-bottom:10px;
            padding-left:20px;
            padding-right: 20px;
        }
        .close-button {
            margin-left: 800px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index"><img style="height: 90px;" src="assets/img/chitra logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index">Home</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="services">Service</a></li>
                                        <li><a href="blog">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog">Blog</a></li>
                                                <li><a href="single-blog">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="rooms">Rooms</a>
                                        </li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="#" class="btn btn1 d-none d-lg-block btn-contact" onclick="toggleFormVisibility('myform')">Book Online</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <!-- Overlay and form -->
    <div class="overlay" id="overlay">
        <div class="form-container">
            <span class="close-button" onclick="closeModal()">X</span>
            <h2 style="text-align: center;font-family:sans-serif;">Book Now</h2><br>

            <form class="myform">
                <label for="name">Customer Name:</label><br>
                <input type="text" id="name" name="name" class="form-control w-100"><br>
                <div class="form-row">
                    <div class="col">
                        <label for="in" >Check In Date:</label>
                        <input type="date" class="form-control" name="in" id="in">
                    </div><br>
                    <div class="col">
                        <label for="out">Check Out Date:</label>
                        <input type="date" class="form-control" name="out" id="out">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="adults" >Adults:</label>
                        <input type="number" class="form-control" name="adults" id="adults">
                    </div>
                    <div class="col">
                        <label for="childrens">Childrens:</label>
                        <input type="number" class="form-control" name="childrens" id="childrens">
                    </div>
                </div>
                <label for="rooms">Rooms:</label><br>
                <input type="number" id="rooms" name="rooms" class="form-control w-100"><br>

                <button type="button" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function toggleFormVisibility(myform) {
            var overlay = document.getElementById("overlay");
            if (overlay.style.display === "none" || overlay.style.display === "") {
                overlay.style.display = "flex";
            } else {
                overlay.style.display = "none";
            }
        }

        function closeModal() {
            var modal = document.getElementById('modal');
            document.getElementById("overlay").style.display = "none";
            modal.style.display = 'none';
        }
    </script>

</body>
</html>
