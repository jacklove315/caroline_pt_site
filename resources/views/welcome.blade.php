<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caroline Green Personal Trainer</title>

    {{--    <!-- boostrap -->--}}
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
    {{--          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">--}}


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- custom styles -->
    <link href="{{asset('css/walter.css')}}" rel="stylesheet">

</head>
<body>


<!-- PRE LOADER -->
{{--<section class="preloader">--}}
{{--    <div class="spinner">--}}
{{--        <span class="spinner-rotate"></span>--}}
{{--    </div>--}}
{{--</section>--}}


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand">Caroline Green </a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About me</a></li>
                <li><a href="#class" class="smoothScroll">Classes</a></li>
                <li><a href="#gallery" class="smoothScroll">Gallery</a></li>
                <li><a href="#contact" class="smoothScroll">Contacts</a></li>
            </ul>
        </div>

    </div>
</section>


<!-- HOME -->
<section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="home-info">
                    <h3>Meet Caroline Green!</h3>
                    <h1>an award winning Fitness trainer, Yoga teacher and model.</h1>
                    <a class="video-link popup-youtube" href="https://www.youtube.com/watch?v=1LF6bd51778"><i
                            class="fa fa-play"></i> Play Video</a>
                    <div class="home-btn">
                        <a href="#class" class="section-btn btn btn-default smoothScroll">Join My Class</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-12">
                <div class="about-info">
                    <div class="section-title">
                        <h2>about caroline</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim.</p>

                    <div class="skill-thumb">
                        <strong>Fitness</strong>
                        <span class="pull-right">95%</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="95"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>

                        <strong>Body & Squad</strong>
                        <span class="pull-right">100%</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>

                        <strong>Yoga</strong>
                        <span class="pull-right">75%</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="65"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12">
                <div class="about-image">
                    <img src="images/home-bg.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CLASS -->
<section id="class" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Join my class</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="class-info">
                    <img src="images/class-image.jpg" class="img-responsive" alt="">
                    <h3>Cardio & Core</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="class-info">
                    <img src="images/class-image.jpg" class="img-responsive" alt="">
                        <h3>Kettlebells</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="class-info">
                    <img src="images/class-image.jpg" class="img-responsive" alt="">
                    <h3>Pelvic Floor & Deep Core</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- GALLERY -->
<section id="gallery" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Check my photos</h2>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- GALLERY THUMB -->
                <div class="gallery-thumb">
                    <a href="images/gallery-image.jpg" class="image-popup">
                        <img src="images/gallery-image.jpg" class="img-responsive" alt="">

                        <div class="gallery-info">
                            <h3>Photo title</h3>
                            <small>Fitness, Personal</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- GALLERY THUMB -->
                <div class="gallery-thumb">
                    <a href="images/gallery-image.jpg" class="image-popup">
                        <img src="images/gallery-image.jpg" class="img-responsive" alt="">

                        <div class="gallery-info">
                            <h3>Photo title</h3>
                            <small>Fitness</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- GALLERY THUMB -->
                <div class="gallery-thumb">
                    <a href="images/gallery-image.jpg" class="image-popup">
                        <img src="images/gallery-image.jpg" class="img-responsive" alt="">

                        <div class="gallery-info">
                            <h3>Photo title</h3>
                            <small>Yoga</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- GALLERY THUMB -->
                <div class="gallery-thumb">
                    <a href="images/gallery-image.jpg" class="image-popup">
                        <img src="images/gallery-image.jpg" class="img-responsive" alt="">

                        <div class="gallery-info">
                            <h3>Photo title</h3>
                            <small>Body, Squad</small>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-7">
                <div class="section-title">
                    <h2>get in touch with me</h2>
                </div>

                <!-- CONTACT FORM HERE -->
                <form id="contact-form" role="form">

                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <h6 class="text-success">Your message has been sent successfully. </h6>

                    <!-- IF MAIL SENDING UNSUCCESSFULL -->
                    <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                    <div class="col-md-4 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="cf-name"
                               placeholder="Enter your name">
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <input type="email" class="form-control" id="cf-email" name="email"
                               placeholder="Enter an email address">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="subject"
                               placeholder="your subject">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" rows="8" id="cf-message" name="cf-message"
                                  placeholder="Tell about your project"></textarea>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                    </div>

                </form>
            </div>

            <div class="col-md-4 col-sm-5">
                <div class="contact-info">
                    <h2>do you need personal trainer?</h2>
                    <p>+01 90 852 74250</p>
                    <p><a href="mailto:youremail.com">hello@caroline.com</a>
                    </p>
                    <address>
                        <p>Main Street Derrygonnelly</p>
                    </address>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- FOOTER -->
<footer data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="copyright-text">
                    <h4>Caroline Green</h4>
                </div>

                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>


{{--<!-- include compiled assets -->--}}
{{--<script src="{{asset('/js/app.js')}}"></script>--}}
{{--<!-- boostrap js -->--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"--}}
{{--        crossorigin="anonymous"></script>--}}

</body>
</html>
