@extends('layout.main')


@section('main')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hotel.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" style="font-size: 56px;">Premier accommodation in the heart of the city.</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hotel.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Premier accommodation in the heart of the city.</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hotel.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Premier accommodation in the heart of the city.</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Booking Room Start-->
        <div class="booking-area">
            <div class="container">
               <div class="row ">
               <div class="col-12">
                <form action="">
                <div class="booking-wrap d-flex justify-content-between align-items-center">

                    <!-- select in date -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span> Check In Date:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker1"  placeholder="10/12/2020" />
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span>Check OutDate:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker2"  placeholder="12/12/2020" />
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Adults:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Children:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select2">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Rooms:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select3">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box pt-45 mb-30">
                        <a href="#" class="btn select-btn">Book Now</a>
                   </div>


                </div>
            </form>
               </div>
               </div>
            </div>
        </div>
        <!-- Booking Room End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img style="height: 450px;" src="assets/img/bag.jpg" class="customar-img1" alt="">
                            <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>25 Years of Service<br>Experience</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>About our hotel</span>
                            <h2>Make the customer the hero of your story</h2>
                            <div class="caption-details">
                                <p class="pera-dtails">Indulge in a delightful stay at this remarkable establishment boasting chic accommodations, a sophisticated dining venue, a top-tier fitness center, and an array of amenities. </p>
                                <p>Benefit from the convenient location just a stone's throw away from Solapur Bhuikot Fort, situated a mere 1.6 km away.

                                    Maintain your fitness regimen with ease at the cutting-edge gym facility provided on-site.

                                    Savor an extensive selection of delectable dishes to appease your appetite at the onsite </p>
                                <a href="#" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Room Start -->
        <section class="room-area">
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
                                    <span><u>₹</u>2,527<span>/ per night</span></span>
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
                                    <span><u>₹</u>2,707 <span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="rooms"><img style="height: 270px;" src="assets/img/images (2).jpeg" alt=""></a>
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
                                <a href="rooms"><img style="height: 270px;" src="assets/img/download (1).jpeg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Premium Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>2,707 <span>/ per night</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="rooms"> <img style="height: 270px;" src="assets/img/images.jpeg" alt=""></a>
                            </div>
                            <div class="room-caption">
                                <h3><a href="rooms">Executive Room</a></h3>
                                <div class="per-night">
                                    <span><u>₹</u>2,527<span>/ per night</span></span>
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

        <!-- Dining Start -->
        <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>The establishment boasts an exceptional restaurant, offering an extensive selection of mouthwatering cuisines.<br> Additionally, there is a luxurious café on the premises, providing scrumptious light meals and beverages. <br>Travelers appreciate the availability of a satisfying breakfast option at the property.</p>
                                <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Moreover, lagoon pools offer a versatile venue capable of hosting an array of activities and amenities, enhancing the economic performance of the <br> hotel or resort. These may encompass sporting endeavors such as swimming, kayaking, paddleboarding, and sailing in smaller vessels. Additionally,  <br>they lend themselves well to the provision of cocktail bars, sunbeds, and entertainment spectacles, among other offerings.</p>
                                <a href="#" class="btn border-btn">Learn More  <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dining End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>The rooms were fantastic, and the staff was exceptional, providing excellent room service. The personnel were exceedingly courteous. Adequate parking facilities were also provided.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Akhil Raut , <span>Family Traveller </span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Well located near highway. Good ambience. Good staff and nice service. Breakfast was nice. Good hotel for a short stay in solapur. One can visit nearby religious places easily.
                                    </p>
                                    <div class="testimonial-ratting">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Sameer Badakh , <span> Family Traveller </span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Blog Start -->
       <div class="blog-area blog-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Seciton Tittle  -->
                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Our Blog</h3>
                            </div>
                            <h3 class="archivment-back">Recent News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img style="height: 250px;" src="assets/img/images (5).jpeg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by <a href="#">Kapil Shewale</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html"> food was only a concern check out process was also great, need to work on the food aspects</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Mar 06, 2024 </span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                               <a href="single-blog.html"> <img src="assets/img/IMG-1.JPG" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by<a href="#">Sagar Shetye</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">It was pleasing experience. Rooms were clean and tidy. Over all it was comfortable stay.</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Mar 13, 2024</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="assets/img/IMG-2.JPG" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by<a href="#"> Bhagyesh Save</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">This hotel was unexpectedly far way better than i imagined. Rooms were clean and spacious</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span> Feb 19, 2024</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Blog End -->

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
        {{-- <form  action="" method="post" class="myForm" id="modal">
            <span class="close-button" onclick="closeModal()">X</span>
           <p class="contact">CONTACT FROM</p>
             <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" class="form-control" id="name" placeholder="name" name="name">
             </div>
             <div class="form-group">
                 <label for="exampleInputEmail1">Email </label>
                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" name="email">
             </div>
             <div class="form-group">
                 <label for="phone">Phone</label><br>
                <div class="d-inline-flex">
                 <select name="country-code" id="">
                   <option value="+91"> +91 <span class="iconify"></span></option>
                   <option value="+1"> +1</option>
                   <option value="+1"> +44</option>
               </select><br>
               <input type="tel" id="phone" placeholder="phone number" name="phone">
                </div>
             </div>
             <input type="submit" name="submit" id="submit" value="submit" class="submit">
         </form>
         <div id="overlay"></div> --}}
        {{-- <script>
            var forms = document.querySelector('.myForm');
// console.log(forms);
var buttons = document.querySelectorAll('[id^="showFormButton"]');

// Add event listeners to each button
buttons.forEach(function(button, index) {
    button.addEventListener('click', function() {
        toggleFormVisibility(forms[index]);
    });
});

// Function to toggle form visibility
function toggleFormVisibility(form) {
    var form = document.querySelector(form);
    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        overlay.style.display = 'block';
    } else {
        form.style.display = 'none';
        overlay.style.display = 'none';
    }
}


function closeModal() {
    var modal = document.getElementById('modal');
    document.getElementById("overlay").style.display = "none";
    modal.style.display = 'none';
}
        </script> --}}
        <!-- Gallery img End-->
    </main>
    @endsection


