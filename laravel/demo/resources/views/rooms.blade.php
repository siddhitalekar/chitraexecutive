@extends('layout.main')
@section('main')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/roomspage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Rooms</span>
                                <h2>Our Rooms</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area r-padding1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                                <h3>Our Rooms</h3>
                            </div>
                            <h3 class="archivment-back">Our Rooms</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="rooms"><img src="assets/img/room.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Suite</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>4,512<span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="rooms"><img src="assets/img/room4.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Executive Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>2,527 <span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="rooms"> <img src="assets/img/room3.jpg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Premium Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>2,707<span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms"><img src="assets/img/images (2).jpeg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Studio Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>4,512<span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms"><img src="assets/img/download (1).jpeg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Premium Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>2,707  <span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="rooms"> <img style="height: 250px;" src="assets/img/images.jpeg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Executive Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>150 <span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="#" class="btn view-btn1">View more  <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- Room End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/IMG-3.JPG" alt="" style="height: 337px;"></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/IMG-4.jpeg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/IMG-5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>

   @endsection