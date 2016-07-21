<?php
require_once("header.php");
?>
        <div class="main-container transition--fade">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h6>Case Study</h6>
                            <h3>Accelmo - Bridging the gap between devices, the cloud, web and mobile development</h3>
                            <p class="lead">
                                Propulsion developed an Internet of Things platform from scratch - our work covered conceptualization and development of full service platform allowing two way communication between Internet enabled devices and Cloud based applications.
                                <br /> 
                            </p>
                            <h6>Technologies used: C++, MQTT, RabbitMQ, Python, NodeJS, HTML, CSS</h6>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slider" data-arrows="false" data-paging="true" data-timing="5000">
                                <ul class="slides">
                                    <li>
                                        <img alt="pic" src="img/case-studies/accelmo_web01.jpg" />
                                    </li>
                                    <li>
                                        <img alt="pic" src="img/case-studies/accelmo_web02.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="project-single-process">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="boxed bg--white">
                                <span class="h2">1.</span>
                                <h5>Challenge:</h5>
                                <p>
                                    The challange placed in front of us was simple - we were told: "We need a way to control a lot of solar panel carriers from the cloud. We need to monitor their activity, govern their movement automatically and manually when needed, collect and store sensor and electricity production data. And we need to have that available trough a cloud based platform/backend."
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="boxed bg--white">
                                <span class="h2">2.</span>
                                <h5>Our Solution:</h5>
                                <p>
                                    The core idea was to move heavy calculation processes out of the limited computing capacity of the device into unlimitied resources environment (the cloud) and allow data to flow both ways. Simply said - make it possible for cloud/mobile app developers to have control over devices and have their data streams available directly from within the code - in terms of objects and methods.


                                     
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="boxed bg--white">
                                <span class="h2">3.</span>
                                <h5>Result:</h5>
                                <p>
                                     In order to do this we decided to develop a set of libraries to handle data transfer from the device to the Accelmo platform (C++, MQTT); to develop a cloud based platform to handle device registration, credentials and monitoring (Python, NodeJS); to develop a set of services within the platform for distribution and exchange of data between registered devices and remote application end points (NodeJS/RabbitMQ).
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <!--end of row-->
                    <div class="row project__action">
                        <div class="col-sm-12 text-center">
                            <hr>
                            <h5>Share this project:</h5>
                            <a class="btn btn--sm bg--facebook" href="#">
                                <span class="btn__text">
                                    <i class="socicon-facebook"></i> Share on Facebook
                                </span>
                            </a>
                            <a class="btn btn--sm bg--twitter" href="#">
                                <span class="btn__text">
                                    <i class="socicon-twitter"></i> Share on Twitter
                                </span>
                            </a>
                            <a class="btn btn--sm bg--googleplus" href="#">
                                <span class="btn__text">
                                    <i class="socicon-googleplus"></i> Share on GooglePlus
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </section>
            <section class="project-navigation">
                <a href="#">
                    <span class="h5">
                        <span class="larr">&larr;</span> Previous Project</span>
                </a>
                <a href="#">
                    <span class="h5">All Projects</span>
                </a>
                <a href="#">
                    <span class="h5">Next Project
                        <span class="rarr">&rarr;</span>
                    </span>
                </a>
            </section>
            <?php require_once("footer.php");?>
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