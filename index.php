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
                    <div id="arrow" class="circle bounce" data-target="#introText">
                        <i class="fa fa-angle-double-down fa-4x drop-arrow"></i>
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

        <div style class="col-md-12">
            <div class="row">
                <div data-aos="fade-right" class="col-md-4 p-r-40 m-t-30 m-b-30">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#programming" aria-expanded="false" aria-controls="programming">
                                        Programming Skills <i class="arrow bounce fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="programming" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        <span>C</span>
                                        <span style="float: right;">75%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%; height:6px;"></div>
                                        </div>
                                        C++
                                        <span style="float: right;">65%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 65%; height:6px;"></div>
                                        </div>
                                        Java
                                        <span style="float: right;">65%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 65%; height:6px;"></div>
                                        </div>
                                        Python
                                        <span style="float: right;">75%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%; height:6px;"></div>
                                        </div>
                                        PHP
                                        <span style="float: right;">85%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 85%; height:6px;"></div>
                                        </div>
                                        HTML/CSS
                                        <span style="float: right;">95%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 95%; height:6px;"></div>
                                        </div>
                                        JavaScript
                                        <span style="float: right;">60%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 60%; height:6px;"></div>
                                        </div>
                                        Linux Programming
                                        <span style="float: right;">85%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 85%; height:6px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div data-aos="fade-left" class="col-md-4 p-r-40 m-t-30 m-b-30">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#software" aria-expanded="true" aria-controls="software">
                                        Software and tools knowledge <i class="arrow bounce fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="software" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        Photoshop
                                        <span style="float: right;">75%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 95%; height:6px;">75%</div>
                                        </div>
                                        VS Code
                                        <span style="float: right;">75%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 55%; height:6px;"></div>
                                        </div>
                                        Sublime
                                        <span style="float: right;">55%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 55%; height:6px;"></div>
                                        </div>
                                        Visual studio
                                        <span style="float: right;">55%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 55%; height:6px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div data-aos="fade-right" class="col-md-4 p-r-40 m-t-30 m-b-30">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#OS"
                                        aria-expanded="true" aria-controls="OS">
                                        Operating Systems Skills <i class="arrow bounce fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="OS" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        Linux(Debain.Arch Linux,Florida)
                                        <span style="float: right;">85%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 85%; height:6px;">
                                            </div>
                                        </div>
                                        Windows
                                        <span style="float: right;">95%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 95%; height:6px;">
                                            </div>
                                        </div>
                                        Macintosh
                                        <span style="float: right;">55%</span>
                                        <div class="progress m-t-30" style="height:auto;">
                                            <div data-aos="fade-right"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 55%; height:6px;">
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
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>

                </ul>
                <div data-aos="fade-right" class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/project1.jpg">
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
            </div>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalexampleModalLabelScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Object Recognition Tool for Visually
                            Impaired</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <h4>IJSRD Certificate</h4>
                            <img src="assets\img\certificates\ijsrd.jpg" class="lozad">
                            Abstract— Since the 1970, beholding technologies have matured to a degree at which exciting
                            applications have become possible for visual substitution. In fact, industry has created a
                            ramification of computer vision products and services by developing new electronic aids for
                            the blind in order to overcome the difficulties that the dog and cane do not respond. This
                            paper provides an outline of assorted visual substitution systems developed in the recent
                            years. It aims also to introduce a proposed method that restores a central function of the
                            visual system which is the identification of surrounding objects. This method relies on
                            video analysis and interpretation. Thus, our contribution is to present a visual
                            substitution system supported evaluating fast and robust algorithms to recognize and locate
                            objects in images. Keywords: Google API, Blind User, Object Recognition
                            I. INTRODUCTION Visually Impaired People confront many problems in moving from one place to
                            another i.e. navigation. Vision is human’s power to notify him of the obstacles in his way.
                            A solution which is easily available is needed to solve the problems of blind people. The
                            application developed can detect the objects in the user surroundings. It can alert the user
                            of the obstacles in his pathway and this fashion helps the user to navigate from one place
                            to another saving him from tripping anywhere. It will also solve the matter of keeping a
                            special device or a walking stick. The reason it is more reliable is because it is developed
                            on the Android operating system and Android-based smartphones are very common and highly
                            available almost everywhere. In fact it is one of the most used mobile operating system.
                            This makes the application convenient to get. Thus in this project, a model has been
                            proposed which makes the use of smartphone, a common device available to anyone and used
                            technology to make an application which can help the blind user detect objects in his
                            surroundings and help him in navigating from one place to another. The output of the system
                            is in audio form that can be easily understandable for a blind user. These Visual impairment
                            present severe consequences on certain capabilities related to visual function:  The daily
                            living activities (that require a vision at a medium distance)  Communication, reading,
                            writing (which requires a vision closely and average distance) − Evaluation of space and
                            also the displacement (which require a vision far)  The pursuit of an activity requiring
                            prolonged maintenance of visual attentions.
                            II. LITERATURE SURVEY This project proposes a system in which two cameras are put on the
                            glasses of a blind person. The proposed work has a wearable device and consists of a blind
                            stick and sensor based detection circuit. It uses an infrared sensor which uses
                            infrared waves to scan the surroundings of a person. It uses object detection and gives them
                            audio information about it. The system must be trained about object information. Feature
                            extraction is also a part of the process. Another system proposed is focuses on giving the
                            information about what are the different types of obstacles in front of the user, their size
                            and their distance from the user. Software is used for signal processing. The camcorder is
                            used for recording videos. Video processing methods using LED display are used after that.
                            <img src="assets\img\project\pic1.jpg" class="lozad" alt="..."></a>

                            It is a system where N object detectors are trained for N different objects. When an image
                            is sent to the system, all object detectors do their work. If an object is found by a
                            detector, it will mark its boundary and label the item name. After the process completes for
                            all N detectors, the image is displayed with all the tags. Moving a cursor over an object in
                            the image shows the complete boundary of the article with its label beside. This system is a
                            little slower than other systems because a lot of object detectors are working on a single
                            image.
                            <img src="assets\img\project\pic2.jpg" class="lozad" alt="..."></a>
                            When the button is pressed, it captures an image of the object through the camera which is
                            connected to it and sends it to Google Cloud. Then Google’s Cloud Vision API uses artificial
                            intelligence and provides relevant results of what the object can be. The output is then
                            converted into audio format through Google’s Text-to-Speech (gTTS). And finally, the
                            converted audio is played using VLC. From a video, objects are detected by taking templates
                            out of the video. It works if the object is present in the whole video.
                            III. PROPOSED WORK The objective of this project is to provide a security for visually
                            impaired people, by adapting methods for face recognition, object detection and currency
                            identification which makes their life easy in today's computer vision
                            technology and also helps in security aspect. Normally, a blind person uses cane as a guide
                            of him to protect him from obstacles. Most of area of surrounding is covered by the cane,
                            especially the area near to his legs like stairs etc. But certain areas such as near to his
                            head, especially when he is entering or leaving the door which is short in height. This
                            system is specially designed to protect the area near to his head. It guides the user about
                            obstacles as well as also provides information about appropriate or obstacle free path.
                            Logical structure: The logical structure of our system is shown in following fig 1. The can
                            be divided into three main parts: the user control i.e image to be captured, sensor control
                            i.e detect the object, and the output to the user i.e speech listen by the blind person.
                            <img src="assets\img\project\pic3.jpg" class="lozad" alt="..."></a>
                            The control such as user control that includes the switches that allow the user to choose
                            project’s mode of operation. Sensor control determines when to tell the sensor to take a
                            measurement and receives the output from the sensor and normalizes it to control value for
                            the sensors.
                            IV. WORKING The work that present in this system is based on the use of new technologies to
                            improve visually impair people mobility. Our research is on obstacle detection so as to cut
                            back navigation difficulties for visually impaired people. Moving through an unknown
                            environment becomes a real challenge after we can’t trust our own eyes. Since dynamic
                            obstacles usually produce noise while moving, blind people develop the flexibility of
                            hearing to localize them.
                            <img src="assets\img\project\pic4.jpg" class="lozad" alt="..."></a>
                            However they're reduced to their sense of touch when the matter is to see where an inanimate
                            object exactly is. The common way for navigating of visionless person is using a walking
                            stick cane or walking cane. The walking cane is a simple and computer dedicated to detect
                            static
                            obstacles on the ground, uneven surfaces, and holes via simple tactile-force feedback. This
                            device is light, portable, but range limited and it's not usable for the protection from
                            obstacles as regards to head area. Another option that has the most effective travel aid for
                            the blind is the guide dogs. Based on the symbiosis between the disabled owner and his dog,
                            the training and also the relationship to the animal are the keys to success for this
                            method. The dog is able to detect and analyse complex situations: cross walks, stairs,
                            potential danger, know paths and more. Most of the information is passing through tactile
                            feedback by the handle fixed on the animal. The user is able to feel the attitude of his
                            dog, analyse matters and also give him appropriate orders. But guide dogs are still off from
                            being affordable, around the price of a nice car, and their average working time is
                            proscribed, an average of 7 years. The work they present in this system is based on the use
                            of new technologies to improve visually impair people mobility. Our research is on obstacle
                            detection so as to scale back navigation difficulties for visually impaired people. Moving
                            through an unknown environment becomes a real challenge after we can’t think about our own
                            eyes. Since dynamic obstacles usually produce noise while moving, blind people develop the
                            flexibility of hearing to localize them.
                            V. CONCLUSION In this paper have presented an architecture for the facial & currency
                            identification geared toward people with visual disabilities. The architecture has been
                            designed and developed with the aim of achieving a sturdy and computationally light result
                            that might be embedded in elements with a moderate computing capacity. It is quite simple,
                            efficient and simple to be understand clearly.
                            REFERENCES [1] Y. Wu J. Lim, and M.-H. Yang, “Online object tracking: A benchmark,” IEEE
                            2013. [2] Hersh M., Johnson M. Assistive technology for visually impaired and blind people”,
                            Springer, 2012. [3] Rodriguez, “Assisting the Visually Impaired: Obstacle Detection and
                            Warning System by Acoustic Feedback 17476 – 17496, Sensors”, IEEE, 2012. [4] Nanayakkara S.
                            C., Shilkrot R. and Maes P., “EyeRing: a watch on a Finger,”IEEE, 2012. [5] Joseph Schlecht,
                            Björn Ommer, “Contour-based Object Detection” IEEE, 2011
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
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
            <form method="post" data-aos="zoom-in-up" name="sentMessage" novalidate="novalidate">
                <!-- <form method="post" data-aos="zoom-in-up" id="contactForm" name="sentMessage" novalidate="novalidate"> -->

                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Your Name *"
                                required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email *"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" placeholder="Your Message *"
                                required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" name="submit" type="submit">Send
                        Message</button>
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