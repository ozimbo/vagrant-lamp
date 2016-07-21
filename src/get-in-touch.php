<?php
require_once("header.php");
?>
        <div class="main-container transition--fade">
            <section class="height-70 bg--dark imagebg page-title page-title--animate parallax" data-overlay="6">
                <div class="background-image-holder">
                    <img alt="image" src="img/hero16.jpg" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3>Let's make something great</h3>
                            <p class="lead">We love working on great ideas. Let get connected and schedule a free consultation. </p>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <section class="features features-10">
                <div class="feature bg--white col-md-4 text-center">
                    <i class="icon icon--lg icon-Map-Marker2"></i>
                    <h4>Drop on in</h4>
                    <p>
                        429 Lenox Ave Miami FL 33139, USA
                        <br /> Cara Dušana 173/2/10 Belgrade Sr 11000, Serbia
                    </p>
                </div>
                <div class="feature bg--secondary col-md-4 text-center">
                    <i class="icon icon--lg icon-Phone-2"></i>
                    <h4>Give us a call</h4>
                    <p>
                        USA Office: +1 347 776 0603
                        <br /> Europe Office: +381 60 3227 034
                    </p>
                </div>
                <div class="feature bg--dark col-md-4 text-center">
                    <i class="icon icon--lg icon-Computer"></i>
                    <h4>Connect online</h4>
                    <p>
                        Email:
                        <a href="#">hello@propulsionapps.com</a>
                        <br /> Twitter:
                        <a href="#">@propulsionapps</a>
                    </p>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form class="form--square form-email" data-success="Thanks for your enquiry, we'll be in touch soon" data-error="Please fill all required fields">
                                <h4 class="text-center">Or reach us right here&hellip;</h4>
                                <div class="input-with-icon col-sm-12">
                                    <i class="icon-MaleFemale"></i>
                                    <input class="validate-required" type="text" name="name" placeholder="Your Name" />
                                </div>
                                <div class="input-with-icon col-sm-6">
                                    <i class="icon-Email"></i>
                                    <input class="validate-required validate-email" type="email" name="email" placeholder="Email Address" />
                                </div>
                                <div class="input-with-icon col-sm-6">
                                    <i class="icon-Phone-2"></i>
                                    <input type="tel" name="telephone" placeholder="Phone Number" />
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="validate-required" name="message" placeholder="Your Message" rows="8"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn--primary">
                                        Submit Form
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php
require_once("footer.php");
?>
        </div>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>