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
            <div class="masthead-subheading">Hello my name is Rounak!</div>
            <div class="masthead-heading text-uppercase">And I'm a <br> <span class="type"></span></div>
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
        </div>
    </header>
    <!-- Services-->

    <!-- resume Grid-->
    <section class="page-section" id="resume">

        <?php include 'skills.php';?>

        <br>

        <div class="text-center">
            <h2 class="section-heading text-uppercase">Education</h2>
            <ul data-aos="fade-up" class="timeline">
                <li  data-aos="fade-right">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid" src="assets/img/school.jpg"
                            alt="" /></div>
                    <div class="timeline-panel">
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
                <li data-aos="fade-left" class="timeline-inverted">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid" src="assets/img/tpoly.jpg"
                            alt="" /></div>
                    <div class="timeline-panel">
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
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Work Experince</h2>
               
            </div>
            <ul class="timeline">
                <li data-aos="fade-up">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid" src="assets/img/nibodh.jpg"
                            alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <div class="timeline-body">
                                <p class="text-muted">6 weeks internship</p>
                            </div>
                            <h4 class="subheading">Nibodh Educare Private Limited</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Nibodh is an education sector startup which caters to fulfill the flaws of the Indian Education System,associated to engineering system.</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <!-- portfolio-->
    <section class="page-section swiper--main--container" id="portfolio">
        <div class="container">
            <h1 style="text-align: center">Portfolio</h1>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-block">
                            <h1 style="text-align: center">Certification</h1>
                            <ul class="nav nav-pills m-t-30 m-b-30">
                                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab"
                                        aria-expanded="true">Winning Certificates</a> </li>
                                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab"
                                        aria-expanded="false">Completion Certificates</a> </li>
                                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab"
                                        aria-expanded="false">Partition Certificates</a> </li>
                            </ul>
                            <div class="tab-content br-n pn">
                                <div id="navpills-1" class="tab-pane active">
                                    <div data-aos="zoom-in" class="row">
                                        <div class="card-columns">
                                            <div class="col-12">
                                           
                                                    <div class="card" style="width: 18rem;">
                                                        <a href="assets/img/trycer.jpg" class="image-link"><img
                                                                src="assets/img/trycer.jpg" alt="..."></a>
                                                        <div class="card-body">
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card" style="width: 18rem;">
                                                        <a href="assets/img/trycer.jpg" class="image-link"><img
                                                                src="assets/img/trycer.jpg" alt="..."></a>
                                                        <div class="card-body">
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                    </div>
                                                    <div class="card" style="width: 18rem;">
                                                        <a href="assets/img/trycer.jpg" class="image-link"><img
                                                                src="assets/img/trycer.jpg" alt="..."></a>
                                                        <div class="card-body">
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                    </div>
                                               

                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="navpills-2" class="tab-pane">
                                    <div class="row">
                                        <div class="card-columns">
                                            <div class="col-12">
                                                <div class="card" style="width: 18rem; !important">
                                                    <a href="assets\img\certificates\CERTIFICATES[5].jpg" class="image-link"><img
                                                            src="assets\img\certificates\CERTIFICATES[5].jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="widt$ git config --global user.nameh: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="navpills-3" class="tab-pane">
                                    <div class="row">
                                        <div class="card-columns">
                                            <div class="col-12">
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                                <div class="card" style="width: 18rem;">
                                                    <a href="assets/img/trycer.jpg" class="image-link"><img
                                                            src="assets/img/trycer.jpg" alt="..."></a>
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title and make up the bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 data-aos="zoom-in-up" class="section-heading text-uppercase">Contact Us</h2>

            </div>
            <form data-aos="zoom-in-up" id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in-up" class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send
                        Message</button>
                </div>
            </form>


    </section>
    <!-- Footer-->
    <?php include 'footer.php';?>
</body>

</html>