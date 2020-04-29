<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'headers.php';?>
</head>

<body id="page-top">

    <!-- Navigation-->
    <?php include 'nav.php';?>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Hey my name is Rounak!</div>
            <div class="masthead-heading text-uppercase">And I'm <br> <span class="type"></span></div>
            <script src="js/typed.js"></script>
            <script>
                var typed = new Typed('.type', {
                    strings: ['Programmer',
                        'Ethical hacker',
                        'Gamer'
                    ],
                    typeSpeed: 80,
                    backSpeed: 50,
                    loop: true
                });
            </script>
            <br>
            <br>
            <h6 class="nav-item"><a class="nav-link js-scroll-trigger">You are <?php include("counter.php");?>
                    Visitor<a></a></h6>
            <br>
            <div class="container">
                <div class="arrow-holder">
                    <a href="#resume">
                        <div id="arrow" class="circle bounce" data-target="#introText">
                            <i class="fa fa-angle-double-down fa-4x drop-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Services-->

    <!-- resume Grid-->
    <section class="page-section" id="resume">
        <h1 data-aos="zoom-in-up" class="text-divider text-uppercase"><span>Resume</span></h1>

        <?php include 'skills.php';?>
        <?php include 'moreskills.php';?>
        <br>

        <div class="text-center">
            <div class="container">
                <h4 data-aos="fade-up" class="text-uppercase subtits">Education</h4>
                <ul data-aos="fade-up" class="timeline">
                    <li data-aos="fade-up">
                        <div class="timeline-image"><img class="lozad rounded-circle img-fluid"
                                src="assets/img/school.jpg" alt="" /></div>
                        <div data-aos="fade-right" class="timeline-panel">
                            <div class="timeline-heading">
                                <div class="timeline-body">
                                    <p class="text-muted">2012-2017</p>
                                </div>
                                <h4 class="subheading">St. Xavier’s High School, Borivali (East)
                                </h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Marks : 75%</p>
                            </div>
                        </div>
                    </li>
                    <li data-aos="fade-up" class="timeline-inverted">
                        <div class="timeline-image"><img class="lozad rounded-circle img-fluid"
                                src="assets/img/tpoly.jpg" alt="" /></div>
                        <div data-aos="fade-left" class="timeline-panel">
                            <div class="timeline-heading">
                                <div class="timeline-body">
                                    <p class="text-muted">2017-2020</p>
                                </div>
                                <h4>Thakur Polytechnic</h4>
                                <h4 class="subheading">Diploma in Computer Engineering</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Pursuing 3rd year (76%)</p>
                            </div>
                        </div>
                    </li>

                    <li data-aos="fade-up" class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>To Be<br />Continued<br /></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="text-center">
                <h4 data-aos="fade-up" class="text-uppercase subtits">Work Experince</h4>

            </div>
            <ul class="timeline">
                <li data-aos="fade-up">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid" src="assets/img/nibodh.jpg"
                            alt="" /></div>
                    <div data-aos="fade-left" class="timeline-panel">
                        <div class="timeline-heading">
                            <div class="timeline-body">
                                <p class="text-muted">6 weeks internship</p>
                            </div>
                            <h4 class="subheading">Nibodh Educare Private Limited</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nibodh is an education sector startup which caters to fulfill the
                                flaws of the Indian Education System,associated to engineering system.</p>
                            <a href="assets\img\certificates/CERTIFICATES[2].jpg" class="image-link">Click here to view
                                certificate</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <br>
    <!-- portfolio-->
    <section class="page-section" id="portfolio">
        <div class="container">
            <h1 data-aos="zoom-in-up" class="text-divider text-uppercase"><span>Portfolio</span></h1>
            <!-- <div data-aos="fade-right" class="row"> -->
            <div class="container">
                <br>
                <h4 data-aos="fade-down" class="text-uppercase subtits">Certification</h4>
                <div data-aos="fade-up" class="tabset">
                    <!-- Tab 1 -->
                    <input type="radio" name="tabset" id="tab1" aria-controls="completion" checked>
                    <label for="tab1">Completion</label>
                    <!-- Tab 2 -->
                    <!-- <input type="radio" name="tabset" id="tab2" aria-controls="won">
                    <label for="tab2">Won</label> -->
                    <!-- Tab 3 -->

                    <input type="radio" name="tabset" id="tab3" aria-controls="participation">
                    <label for="tab3">Participation</label>
                    <p style="font-size: 10px;">*click on photo to zoom</p>
                    <div class="tab-panels">
                        <section id="completion" class="tab-panel">

                            <div class="certification-cards-section">

                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[4].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[4].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">The Fundamentals of Digital Marketing by
                                            Google </p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[12].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[12].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">FreeCodeCamp.org Responsive Web Design</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[11].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[11].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">The Complete Ethical Hacking Course:
                                            Beginner to Advanced!</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[10].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[10].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">The Complete JavaScript Course For Web
                                            Development Beginners</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[9].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[9].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">The Complete C Programming Tutorial</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[8].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[8].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">All in one HTML CSS and JQuery</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[7].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[7].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">SOLOLEARN HTML Fundamentals course</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[6].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[6].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">SOLOLEARN JavaScript Tutorial course</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates/CERTIFICATES[5].jpg" class="image-link"><img
                                            src="assets\img\certificates/CERTIFICATES[5].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">SOLOLEARN PHP Tutorial course</p>
                                    </div>
                                </div>

                            </div>
                        </section>

                        <section id="participation" class="tab-panel">
                            <div class="certification-cards-section">

                                <div class="card certificate-card">

                                    <a href="assets\img\certificates\CERTIFICATES[1].jpg" class="image-link"><img
                                            src="assets\img\certificates\CERTIFICATES[1].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">Multi-tech Hackaton 2020</p>
                                    </div>
                                </div>
                                <div class="card certificate-card">
                                    <a href="assets\img\certificates\CERTIFICATES[3].jpg" class="image-link"><img
                                            src="assets\img\certificates\CERTIFICATES[3].jpg" class="lozad"
                                            alt="..."></a>
                                    <div class="card-body">
                                        <p class="card-text">VYRO 2019 Bug-Debug.</p>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 data-aos="fade-down" class="text-uppercase subtits">My Projects</h4>
            <div data-aos="fade-left" class="card mb-3">
                    <img src="assets/img/project1.jpg" class="card-img-top" style="max-height: 400px;" alt="...">
                    <div style="text-align: center;" class="card-body">
                        <h5 class="card-title">Object Recognition Tool for Visually Impaired</h5>
                        <p> This object detection module uses Google Cloud Vision API and Raspberry Pi which gives the output in audio format. This could be helpful for people with impaired vision or the ones who have visibility problems.</p>

                        <a data-toggle="modal" class="btn btn-warning" style="color: white;" data-target="#exampleModal">More
                            information</a>
                    </div>
                </div>
            <!-- <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>

                </ul>
               
                <div data-aos="fade-right" class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="">
                        <div class="carousel-caption">
                            <h6>Object Recognition Tool for Visually Impaired </h6>

                            <a data-toggle="modal" class="btn btn-dark" data-target="#exampleModal">More
                                information</a>

                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div> -->
            <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/project1.jpg" class="d-block w-100" style="width: auto; height: auto;"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Object Recognition Tool for Visually Impaired </h5>
                            <p>I have developed this object detection module using Google Cloud Vision API and Raspberry
                                Pi which gives the output in audio format. This could be helpful for people with
                                impaired vision or the ones who have visibility problems.
                            </p>
                            <a data-toggle="modal" data-target="#exampleModal">Click here for more information</a>

                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->
        </div>
        <!-- project 1 modal start -->
        <?php include 'projectmodal.php'; ?>
        <!-- project 1 modal end -->
    </section>


    <!-- Contact-->

    <section class="page-section" id="contact">
        <div class="container">

            <div class="text-center">
                <!-- <h2 data-aos="zoom-in-up" class="text-divider section-heading text-uppercase"><span>Contact Me</span></h2> -->
                <h2 data-aos="zoom-in-up" class="text-divider section-heading text-uppercase"><span>Contact Me</span>
                </h2>

            </div>
            <br>

            <h4 data-aos="zoom-in-up" style="color: white;" class="text-uppercase contact-me-sub subtits">Social media
            </h4>
            <div class="social-media-icon-section">
                <a data-aos="fade-right" href="https://www.facebook.com/RSwaT.69/" target="_blank"
                    class="fa fa-facebook"></a>
                <a data-aos="fade-left" href="https://twitter.com/Thakur_Rounak" target="_blank"
                    class="fa fa-twitter"></a>
                <a data-aos="fade-right" href="https://github.com/rounakthakur13" target="_blank"
                    class="fa fa-github"></a>
                <a data-aos="fade-left" href="https://www.linkedin.com/in/rounakthakur13/" target="_blank"
                    class="fa fa-linkedin"></a>
                <a data-aos="fade-right" href="https://www.instagram.com/rounakthakur/?hl=en" target="_blank"
                    class="fa fa-instagram"></a>
                <a data-aos="fade-left" href="https://www.snapchat.com/add/rswat.69" target="_blank"
                    class="fa fa-snapchat-ghost"></a>
            </div>
            <br>
            <br>
            <h4 data-aos="zoom-in-up" style="color: white;" class="text-uppercase contact-me-sub subtits">Contact me
                directly
            </h4>
            <br>
            <form method="post" action="#contact" data-aos="zoom-in-up">
                <!-- <form method="post" data-aos="zoom-in-up" id="contactForm" name="sentMessage" novalidate="novalidate"> -->

                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Your Name *"
                                required data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email *"
                                required
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" placeholder="Your Message *"
                                required
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <input type="submit" class="btn btn-primary btn-xl text-uppercase" name="submit" value="Send message">
                </div>
            </form>
            <?php include 'email.php'; ?>

        </div>
    </section>
    <!-- Footer-->
    <?php include 'footer.php';?>
    <?php include 'ip.php';?>
</body>

</html>