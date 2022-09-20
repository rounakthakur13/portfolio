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
        
            <div class="masthead-subheading ">Hey my name is Rounak!</div>
            <div class="masthead-heading text-uppercase">And I'm <br> <span class="type"></span></div>
            <script src="js/typed.js"></script>
            <script>
                var typed = new Typed('.type', {
                    strings: ['Programmer',
                        'Hacker',
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
            <canvas id="nokey">
             </canvas>
        </div>
        
    </header>

    <!-- Services-->

    <!-- resume Grid-->
    <section class="page-section" id="resume">
        <h1 data-aos="zoom-in-up" class="text-divider text-uppercase"><span>Resume</span></h1>
        <div style="text-align: center;" class="card-body">
            <a data-aos="fade-right" href="assets\img\Resume.jpg" class="image-link btn btn-outline-secondary">Quick
                View Resume<img></a>
            <a data-aos="fade-left" href="assets\documents\Rounak_Thakur_Resume.pdf" class="btn btn-outline-secondary"
                target="_blank">Download Resume</a>
        </div>

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
                                <h5 class="subheading">Diploma in Computer Engineering</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Percentage: 84.63%</p>
                            </div>
                        </div>
                    </li>
                    <li data-aos="fade-up">
                        <div class="timeline-image"><img class="lozad rounded-circle img-fluid"
                                src="assets/img/Atharva_college.jfif" alt="" /></div>
                        <div data-aos="fade-right" class="timeline-panel">
                            <div class="timeline-heading">
                                <div class="timeline-body">
                                    <p class="text-muted">2021-2023</p>
                                </div>
                                <h4 class="subheading">Atharva College of Engineering, Malad
                                </h4>
                                <h5 class="subheading">B.E. in Computer Engineering</h5>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">CGPA: 9.32</p>
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
                                <h4 class="text-muted">Summer Internship</h4>
                            </div>
                            <h5 class="subheading">Nibodh Educare Private Limited</h5>
                        </div>
                        <div class="timeline-body">
                            <p class="text-left">• Identified problems uncovered by testing or customer feedback, and
                                corrected them by mentoring a team of 4 more
                                developers to improve the performance by 35%<br>
                                • Design and implement web site security measures such as firewalls or login encryption
                            </p>
                            <a href="assets\img\certificates/CERTIFICATES[2].jpg" class="image-link">Click here to view
                                certificate</a>
                        </div>
                    </div>
                </li>
                <li data-aos="fade-up" class="timeline-inverted">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid" src="assets/img/nibodh.jpg"
                            alt="" /></div>
                    <div data-aos="fade-left" class="timeline-panel">
                        <div class="timeline-heading">
                            <div class="timeline-body">
                                <h4 class="text-muted">Web Dev Internship</h4>
                            </div>
                            <h5 class="subheading">Nibodh Educare Private Limited</h5>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">• Organized and taught hands-on training for adobe software to entire
                                technical team<br>
                                • Provided in-house IT support to the CEO and management team<br>
                                • Assisted in troubleshooting issues on web-based systems and helped in website
                                maintenance</p>
                            <a href="assets\img\certificates/Nibodh Educare Web Dev.jpg" class="image-link">Click here
                                to view
                                certificate</a>
                        </div>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <div class="timeline-image"><img class="lozad rounded-circle img-fluid"
                            src="assets/img/vaisansar.jfif" alt="" /></div>
                    <div data-aos="fade-left" class="timeline-panel">
                        <div class="timeline-heading">
                            <div class="timeline-body">
                                <h4 class="text-muted">CyberSecurity Consultant Intern</h4>
                            </div>
                            <h5 class="subheading">Vaisansar Technologies Pvt. Ltd</h5>
                        </div>
                        <div class="timeline-body">
                            <p class="text-left">● Monitored multiple projects on malware detection and protection,
                                reduced attacks on Content Delivery Networks
                                and SSL cross-site scripting by 15%<br>
                                ● Performed random security inspections<span id="dots">...</span><span id="more"> for a
                                    site containing 1500 employees users to
                                    ensure the validity and safety
                                    of all technical operations<br>
                                    ● Scanned sites for malware and security risks regularly, saving over 5000 computers
                                    from unwanted and
                                    unwarranted threats and destruction<br>
                                    ● Discovered 3+ potential vulnerabilities, threats in web servers and suggested
                                    upgrades</span></p>
                            <button type="button" class="btn btn-outline-warning" onclick="showMore()"
                                id="showMoreBtn">Read more</button><br>
                            </p>
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
            <?php include 'certification.php';?>
        </div>
        <div class="container">
            <h4 data-aos="fade-down" class="text-uppercase subtits">My Projects</h4>
            <div data-aos="fade-left" class="card mb-3">
                <img src="assets/img/project1.jpg" class="card-img-top" style="max-height: 400px;" alt="...">
                <div style="text-align: center;" class="card-body">
                    <h5 class="card-title">Object Recognition Tool for Visually Impaired</h5>
                    <p> This object detection module uses Google Cloud Vision API and Raspberry Pi which gives the
                        output in audio format. This could be helpful for people with impaired vision or the ones who
                        have visibility problems.</p>

                    <a data-toggle="modal" class="btn btn-warning" style="color: white;"
                        data-target="#exampleModal">More
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
                            <input class="form-control" name="name" type="text" placeholder="Your Name *" required
                                data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email *" required
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" placeholder="Your Message *" required
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <input type="submit" class="btn btn-primary btn-xl text-uppercase" name="submit"
                        value="Send message">
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