<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail&amp;display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio, Personal Website">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Cristian Cadis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="queries.css">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Portfolio | Cristian Cadis </title>
  </head>

  <body>
    <div class="page-container">
        <section id="home" class="sticky">
          <div class="dark">
          </div>

          <header class="header-component">
            <a class="profile" href="#home">
              <span class="my-image"></span>
              <span class="my-name">Cristian Cadis</span>
            </a>
            <div class="mobile-nav-icon js--nav-icon">
              <i class="fas fa-bars"></i>
            </div>
              <ul class="menu js--main-nav">
                <li class="menu-item item-home active">
                    <a href="#home" class="nav-link js--scroll-to-home">Home</a>
                </li>
                <li class="menu-item item-about">
                    <a href="#about" class="nav-link js--scroll-to-about">About</a>
                </li>
                <li class="menu-item item-skills">
                    <a href="#skills" class="nav-link js--scroll-to-skills">Skills</a>
                </li>
                <li class="menu-item item-projects">
                    <a href="#projects" class="nav-link js--scroll-to-projects">Projects</a>
                </li>
                <li class="menu-item item-edu">
                    <a href="#education" class="nav-link js--scroll-to-education">Education</a>
                </li>
                <li class="menu-item item-contact">
                    <a href="#contact" class="nav-link js--scroll-to-contact">Contact</a>
                </li>
              </ul>
            <a href="cv.pdf" class="cv-button btn" target="_blank">RESUME <span ><i class="fas fa-cloud-download-alt"></i></span> </a>
          </header>

          <div class="page-content">
            <div class="first-section">
              <div class="left-side">
                <div class="title">
                  Hello, my name is Cristian.
                </div>
                <div class="text">
                  <p> "I am a Junior Frontend Developer, graduated with a <a href="degree.pdf" target="_blank">Bachelor's degree in Computer Science</a>, seeking a role where I can grow my skills in building responsive, beautiful and dynamic web apps and become a valued contributor to the team."  </p>
                </div>
                <div class="signature">
                  — Cristian
                </div>
              </div>
              <div class="right-side">
                <div class="image">
                </div>
              </div>
            </div>
        </section>

        <section id="about">
          <div class="about_container">
            <div class="about_left">
              <div class="about_image js--image">
                <img src="images/portret4a.jpg"  alt="Portret image" >
              </div>
            </div>
            <div class="about_right">
              <div class="about_t">
                <h1 class="about_title"> About Me </h1>
                <div class="about_top_line"></div>
              </div>

                <p >I describe myself as a passionate developer who loves coding, open source, and the web platform.
                    I like to create and contribute to open source projects. That helps me to learn new stuff, grow as a developer and support other open source projects.</p>
                <p>I enjoy taking complex problems and turning them into simple and beautiful interface designs. I also love the logic and structure of coding and always trying to write
                    elegant and efficient code whether it be HTML, CSS or Jquery. </p>
                <p>In my free time you can find me at the gym <img src="images/weightlifter.png" alt="">, reading a book <img src="images/book.png" alt=""> or spending time with friends <img src="images/toast.png" alt="">.</p>
              <div class="edu_line"></div>
              <div class="about_contact">
                <div class="about_bttn">
                  <a href="cv.pdf" class="cv-button btn" target="_blank"> SEE MY RESUME <span ><i class="fas fa-cloud-download-alt"></i></span> </a>
                </div>
                <div class="about-date">
                  <div class="about_location">
                    <i class="fas fa-map-marker "></i>
                    <span>Berlin (Germany)</span>


                  </div>
                  <div class="about_phone">
                    <i class="fas fa-phone-alt "></i>
                    <span>+49 157 88329678</span>



                  </div>
                  <div class="about_s">


                    <a href="mailto:cristicadis@gmail.com"><i class="fas fa-envelope "></i><span class="social_u"> cristicadis@gmail.com</span> </a>



                  </div>
                  <div class="about_s">


                    <a href="https://github.com/cristicadis" target="_blank"><i class="fab fa-github"></i><span class="social_u">Github</span></a>

                  </div>
                  <!-- <div class="about_s">


                    <a href="https://www.facebook.com/cristi.cadis/"><i class="fab fa-facebook-square  "></i><span class="social_u">Facebook</span></a>

                  </div>
                  <div class="about_s">


                    <a href="https://www.instagram.com/cristicadis/?hl=en"><i class="fab fa-instagram-square"></i><span class="social_u">Instagram</span></a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="skills">
          <div class="skills_content">
            <div class="skills_top">


              <h1 class="skills_title">Technical Skills</h1>
              <div class="top_line"></div>

            </div>

            <div class="skills_container">
              <div class="card">
                <ion-icon name="logo-html5" style="color:#e34f26;"></ion-icon>
                <p>HTML5</p>

              </div>
              <div class="card">
                <ion-icon name="logo-css3" style="color:#0645ad;"></ion-icon>

                <p>CSS3</p>

              </div>
              <div class="card">
                <ion-icon name="logo-javascript" style="color:#f7df1e;"></ion-icon>

                <p>Javascript</p>

              </div>
              <div class="card">

                <img src="images/bootstrap.png" alt="Bootstrap">
                <p>Bootstrap</p>

              </div>
              <div class="card">
                <img src="images/Jquery.png" alt="Jquery_img">
                <p>JQuery</p>
              </div>


              <div class="card">
                <ion-icon name="logo-github" style="color: #6e5494;"></ion-icon>

                <p>Git</p>
              </div>
            </div>
          </div>
        </section>

        <section id="projects">
          <div class="projects-content">
            <div class="projects-top">
              <h1 class="projects-title">Projects</h1>
              <div class="top_line"></div>
            </div>
            <div class="projects_container">
              <div class="project project-4" >
                <div class="img-caption div4" >
                  <h3>Drive Electric</h3>
                  <span class="text-center">
                    This was one of the first projects I worked on. It focused around a fictitious electric car rental company.
                   </span>
                  <div class="prew-btn">
                    <a  href="projects/electric_car" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/ip-address-tracker" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-4.jpg" alt="Project 4">
              </div>
              <div class="project project-5" >
                <div class="img-caption div5" >
                  <h3>Simon Game </h3>
                  <span class="text-center">In this challenge, is a simple game whose goal is for the user to repeat the pattern showed by the program. </span>
                  <div class="prew-btn">
                    <a  href="projects/simon_game" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/simon-game-challenge" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-5.jpg" alt="Project 5">
              </div>

              <div class="project project-1" >
                <div class="img-caption div1" >
                  <h3>IP Address Tracker</h3>
                  <span class="text-center">In this challenge, I used two separate APIs together to create an IP Address Tracking app.</span>
                  <div class="prew-btn">
                    <a  href="projects/ip_address_tracker" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/ip-address-tracker" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-1.jpg" alt="Project 1">
              </div>
              <div class="project project-2" >
                <div class="img-caption div2" >
                  <h3>Room Homepage</h3>
                  <span class="text-center">In this challenge, I  build out a small e-commerce homepage.</span>
                  <div class="prew-btn">
                    <a  href="projects/room_homepage" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/room-homepage" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-2.jpg" alt="Project 2">
              </div>
              <div class="project project-6" >
                <div class="img-caption div6" >
                  <h3>Drum Kit</h3>
                  <span class="text-center">Some interesting layout and code challenges are baked into this design.</span>
                  <div class="prew-btn">
                    <a  href="projects/drum_kit" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/drum-kit" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-6.jpg" alt="Project 6">
              </div>
              <div class="project project-3" >
                <div class="img-caption div3" >
                  <h3>Base Apparel </h3>
                  <span class="text-center">Some interesting layout and code challenges are baked into this design.</span>
                  <div class="prew-btn">
                    <a  href="projects/base_apparel" class="prew btn" target="_blank">Preview  <span> <i class="far fa-eye icon_prew"></i></span> </a>
                    <a  href="https://github.com/cristicadis/base-apparel-coming-soon" class="git btn" target="_blank">Github  <span> <i class="fab fa-github icon_git"></i></span> </a>
                  </div>
                </div>
                <img class="project-1-img" src="images/project-3.jpg" alt="Project 3">
              </div>
            </div>
          </div>
        </section>

        <section id="edu">
          <div class="edu-container">
            <div class="edu-right">
                <h1>Education<br /> <span class="edu-icon"><i class="fas fa-graduation-cap"></i></span> </h1>
                <div class="top_line"></div>
              <div class="edu-1">
                <a href="degree.pdf" target="_blank">Bachelor's degree of Control Engineering and Applied Computer Science</a>
                <div class="uni">
                  <div class="simbol">
                    &#10148;
                  </div>
                  <div class="uni-t">
                    Technical University of Cluj Napoca
                  </div>
                </div>
              <div class="loc">
                <div class="simbol">
                &#10148;
                </div>
                <div class="uni-t">
                  Cluj Napoca (Romania)
                </div>
              </div>
              </div>
              <div class="edu_line"></div>
              <div class="edu-1">
                <a href="images/udemy.pdf" target="_blank">HTML5 and CSS3 course in the official Udemy</a>
                <div class="uni">
                  <div class="simbol">
                    &#10148;
                  </div>
                  <div class="uni-t">
                    www.udemy.com
                  </div>
                </div>
              </div>
              <div class="edu_line"></div>
              <div class="edu-1">
                <a href="https://www.udemy.com/join/login-popup/?next=/course/the-complete-web-development-bootcamp" target="_blank">The Complete 2021 Web Development Bootcamp</a>
                <div class="uni">
                  <div class="simbol">
                  &#10148;
                  </div>
                  <div class="uni-t">
                    www.udemy.com
                  </div>
                </div>
              </div>
            </div>
            <div class="edu-left">
              <i class="fas fa-graduation-cap js--image-edu"></i>
            </div>
          </div>
        </section>

        <section id="contact" >
          <div class="contact-page" id="form">
            <h1>Get In Touch</h1>
            <div class="top_line"></div>

            <?php
            if ($_GET['success'] == 1) {
              echo "<div class=\"form-messages succes\">
                Thank you! Your message has been sent!
              </div>";
            }
            if ($_GET['success'] == -1) {
              echo "<div class=\"form-messages error\">
                Error!!!!!!!!!!!1
              </div>";
            }
            ?>

            <form class="contact-form" action="mailer.php" method="post">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control1" placeholder="name" required>
                <input type="email" name="email" id="email" class="form-control1" placeholder="email" required>
                <textarea name="message" id="message" rows="5" placeholder="message" class="form-control1"></textarea>
              </div>
              <button type="submit" class="submit-btn btn" value="Send it">submit here</button>
            </form>
          </div>
        </section>

        <section id="footer">
          <div class="footer-content" >
            <a href="https://www.facebook.com/cristi.cadis/" target="_blank" title="Facebook"><i class="fab fa-facebook-square social-fab fa-2x"></i></a>
            <a href="https://www.instagram.com/cristicadis/?hl=en" target="_blank" title="Instagram"><i class="fab fa-instagram social-fab fa-2x" ></i></a>
            <a href="https://github.com/cristicadis" target="_blank"><i class="fab fa-github social-fab fa-2x"></i> </a>
          </div>
          <div class="rights">
            © 2021 <span>Cristian Cadis</span>. All rights reserved.
          </div>
        </section>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="jquery.ba-outside-events.js" type="text/javascript"></script>
    <script src="index.js" type="text/javascript"></script>
    <app-root></app-root>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>
</html>
