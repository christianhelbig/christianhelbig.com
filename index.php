<?php include "resources/templates/header.php"; ?>

    <div class="jumbotron hero d-flex">
        <nav class="nav hero-navbar">
            <?php include "resources/templates/navbar.php"; ?>
        </nav>
        <div class="container text-center justify-content-center align-self-center">
            <h1 class="display-3 text-bright">Hello, I'm <span class="text-emphasize">Christian Helbig</span>!</h1>
            <p class="font-italic text-bright">computer science undergraduate // tech enthusiast // aspiring developer</p>
            <!-- LinkedIn      <a class='btn transparent-btn text-bright' target='_blank' href='https://www.linkedin.com/in/christian-helbig/'><i class='fab fa-linkedin-in'></i></a> -->
            <!-- GitHub        <a class='btn transparent-btn text-bright' target='_blank' href='https://github.com/christianhelbig'><i class='fab fa-github'></i></a> -->
            <!-- Contact form  <a class='btn transparent-btn text-bright' href='#contact'><i class='fas fa-envelope'></i></a> -->
        </div>
        <div class="container position-bottom">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>

    <!-- ABOUT SECTION -->

    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <!-- LEFT SIDE - PROFILE AREA-->
                <?php include "resources/templates/vcard.php"; ?>
                <!-- RIGHT SIDE - ABOUT SECTION-->
                <div class="col-lg-8 d-flex left about">
                    <h2 class="display-4">About me</h2>
                    <div class="text">
                        <p>For me, programming is not just a job - it’s a passion. Whenever I dive into a new project, I start to forget the world around me and hours pass without me even noticing.</p>
                        <p>Things started, when I was a kid and my mother gave me her old computer. I was instantly fascinated and wanted to understand, how such 'magic' is even possible. I started to teach myself programming, I did internships on my summer breaks and after High School, I finally started freelancing as a Front-End Web-Developer.</p>
                        <p>But I wanted more. So after I finished my year abroad in Australia, I moved to Berlin, started to study computer science at the University of Technology Berlin and got a new job at Apple.</p>
                        <p>I'm always seeking new possibilities to grow. That's why I would love to gain more experience in Software Development soon and use the techniques and programming languages I've learnt in university.</p>
                    </div>
                    <!-- TESTIMONIALS -->
                    <div class="testimonials-wrapper">
                        <ul class="testimonials">
                            <li class="element active">
                                <p class="quote">"He will be an asset to any future employer."</p>
                                <p class="author">Kerrie Brien - Secretary Manager @ Bondi Icebergs Club</p>
                            </li>
                            <li class="element">
                                <p class="quote">"Due to his quick wit, Christian was able to understand our processes fast and efficiently."</p>
                                <p class="author">Christian Kranich - Manager @ Apple Kurfürstendamm</p>
                            </li>
                            <li class="element">
                                <p class="quote">"Christian has a strong work ethic and was always looking for new tasks to learn."</p>
                                <p class="author">Kerrie Brien - Secretary Manager @ Bondi Icebergs Club</p>
                            </li>
                            <li class="element">
                                <p class="quote"> "Mr. Helbig stands out due to his thorough work."</p>
                                <p class="author">Julian Banse - Founder and CEO @ Becker Banse Medien GmbH</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section section-emphasize"">
        <div class="container">
            <h2 class="display-4">Skills</h2>
            <div class="row">
                <div class="col-md-6">
                    <h6>Web Development</h6>
                    <!-- A lot of progress bars -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">HTML</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">CSS</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Wordpress</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Javascript</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">jQuery</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">PHP</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">NodeJS</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Programming</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">C</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Java</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Python</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">MIPS Assembly</div>
                    </div>
                    <h6>Human Languages</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">German (native language)</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 84%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">English (C1)</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 16%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Spanish (A1)</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bottom-space-md">
                    <h2 class="display-4">Education</h2>
                    <ul>
                        <li class="active">
                            <h6>Oct 2018 - Present</h6>
                            <p>Computer Science undergraduate @ <a href="https://www.tu-berlin.de/menue/home/" target="_blank">University of Technology Berlin</a></p>
                        </li>
                        <li>
                            <h6>Jul 2017 - May 2018</h6>
                            <p>Work and Travel in Australia</p>
                        </li>
                        <li>
                            <h6>Jun 2017</h6>
                            <p>High School Diploma</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="display-4">Work Experience</h2>
                    <ul>
                        <li class="active">
                            <h6>Jan 2019 - Present</h6>
                            <p>Technical Specialist @ <a href="https://www.apple.com/de/retail/kurfuerstendamm/" target="_blank">Apple Kurfürstendamm Berlin</a></p>
                        </li>
                        <li>
                            <h6>Nov 2017 - Jan 2019</h6>
                            <p>Freelancing Front-End Web-Developer</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <section id="projects" class="section section-emphasize">
        <div class="container">
            <div class="row">
                <div class="col-md-9 d-flex text-center">
                    <h1 class="text-bright center">Check out my GitHub!</h1>
                </div>
                <div class="col-md-3 d-flex flex-vcenter">
                    <a class="btn btn-light btn-block btn-valign-center btn-icon" target="_blank" href="https://github.com/christianhelbig" role="button"><i class="fab fa-github"></i> GitHub</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-vcenter bottom-space-lg">
                    <h2 class="display-4">Contact</h2>
                    <?php include "resources/templates/contact.php"; ?>
                </div>
                <?php include "resources/templates/vcard.php"; ?>
            </div>
        </div>
    </section>

<?php include "resources/templates/footer.php"; ?>