<?php
session_start();
if(empty($_SESSION['user_name'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patrik Žalman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura - v4.7.0
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <!--<li><a class="nav-link scrollto" href="#resume">Resume</a></li>-->
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto" href="#testimonials">Reviews</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto " href="#pricing">Pricing</a></li>
        <!--
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>-->
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li><a class="nav-link scrollto " href="login.php">Log out</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>Patrik Zalman</h1>
      <h2>Photographer / Cameraman / Designer / Postproductor</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
          <p>Photos in the highest quality anywhere, anytime.</p>
        </div>

        <div class="row">
          <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Patrik Žalman</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.photo.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+421 903 772 677</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kysucké Nové Mesto, Slovakia</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>17</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Student</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>patrikzalman@gmail.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                  </ul>
                </div>
              </div>
              <div class="row mt-n4">
                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="134" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> who are looking forward to further cooperation.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-file-earmark-medical" style="color: #8a1ac2;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="221" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> which were completely finished.</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock" style="color: #2cbdee;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> and there will only be more!</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award" style="color: #ffb459;"></i>
                    <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> for well done jobs.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->

            <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">Photography / Recording<i class="val">86%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Designing / Editing<i class="val">98%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Postproduction / Cooperation<i class="val">92%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->


    <!-- ======= My Resume Section ======= -->
    <!--
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Alice Barkley</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>My Services</span>
          <h2>My Services</h2>
          <p>I will do anything!</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-camera"></i></div>
              <h4 class="title"><a href="">Shooting</a></h4>
              <p class="description">High resolution, top quality, correct sharpness, knowledge in all camera functions.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-tree"></i></div>
              <h4 class="title"><a href="">Scene management</a></h4>
              <p class="description">Photos created in a witty and tailored place, where all important technology is available.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-lightbulb"></i></div>
              <h4 class="title"><a href="">Special effects</a></h4>
              <p class="description">Like from the movie! Effects, lights, fires, pyrotechnics and much more fun.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-pencil"></i></div>
              <h4 class="title"><a href="">Postproduction</a></h4>
              <p class="description">Customization for every single photo for maximum experience.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/lipa.jpg" class="testimonial-img" alt="">
                <h3>Dua Lipa</h3>
                <h4>Singer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  From a one-off order for my new album, Patrik became my new personal photographer. Thanks to his qualities, I always have albums and posts on social networks in the condition they should be.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/arnold.jpg" class="testimonial-img" alt="">
                <h3>Anold Schwarzenegger</h3>
                <h4>Actor</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  He was called to shoot several times to help us with the technique and, of course, document the shooting with photos. Hollywood liked him very much.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/gates.jpg" class="testimonial-img" alt="">
                <h3>Bill Gates</h3>
                <h4>Businessman</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Great photos! Perfect for my ad, as if they were tailor-made. I don't know how a guy does it, but he's brilliant. 10/10!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/musk.jpg" class="testimonial-img" alt="">
                <h3>Elon Musk</h3>
                <h4>CEO - SpaceX</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  This man gave our company a whole new perspective and did a lot of great work. I recommend to everyone!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/remis.jpg" class="testimonial-img" alt="">
                <h3>Peter Remiš</h3>
                <h4>Teacher</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The best photos I've ever seen. I am proud of my student.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>My Portfolio</span>
          <h2>My Portfolio</h2>
          <p>Here are some of my projects.</p>
        </div>

        <ul id="portfolio-flters" class="d-md-flex justify-content-md-center navcenter">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-nature">Nature</li>
          <li data-filter=".filter-scene">Scene adjustments</li>
          <li data-filter=".filter-macro">Macro</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
            <div class="portfolio-img"><img src="assets/img/tree.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Focus master</h4>
              <p>Tree</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-scene">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Portrait customer</h4>
              <p>Child with flower</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
            <div class="portfolio-img"><img src="assets/img/hero-bg.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Action preciser</h4>
              <p>Woman on a trip</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-macro">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Close / far objects balance</h4>
              <p>Chair on terrace</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-scene">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Scene optimizer</h4>
              <p>Coffee next to flower pot</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-scene">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Position perfect</h4>
              <p>Breakfast</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-macro">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Macro objective</h4>
              <p>Nuts on plate</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
            <div class="portfolio-img"><img src="assets/img/port.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Nature lover</h4>
              <p>Bay</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
            <div class="portfolio-img"><img src="assets/img/road.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Situation timing</h4>
              <p>Sunset over road</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-arrows-fullscreen"></i></a>
              <!--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
          <p>Prices adjusted by services.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Photo</h3>
              <h4><sup>$</sup>20<span> / photo</span></h4>
              <ul>
                <li>Photography</li>
                <li class="na">Edit</li>
                <li>Designing</li>
                <li class="na">Solving advertisements, copyrights, etc.</li>
                <li class="na">Publishing</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box">
              <span class="advanced">Popular</span>
              <h3>Edit & photo design</h3>
              <h4><sup>$</sup>40 - <sup>$</sup>70<span> / design</span></h4>
              <ul>
                <li class="na">Photography</li>
                <li>Edit</li>
                <li>Designing</li>
                <li class="na">Solving advertisements, copyrights, etc.</li>
                <li class="na">Publishing</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Postproduction</h3>
              <h4><sup>$</sup>90<span> / post</span></h4>
              <ul>
                <li class="na">Photography</li>
                <li class="na">Edit</li>
                <li class="na">Designing</li>
                <li>Solving advertisements, copyrights, etc.</li>
                <li>Publishing</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Complete project</h3>
              <h4><sup>$</sup>80 - <sup>$</sup>200<span> / project</span></h4>
              <ul>
                <li>Photography</li>
                <li>Edit</li>
                <li>Designing</li>
                <li>Solving advertisements, copyrights, etc.</li>
                <li>Publishing</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>Have questions or want to contact me? I'm waiting for you!</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="https://twitter.com/i/flow/login" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/patrikzalman" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/patrez_xx/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/patrik-%C5%BEalman-665368207/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p>patrikzalman@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <a href="tel:+421 903 772 677">+421 903 772 677</a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <p>Direct message</p>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Patrik Zalman</h3>
      <p>A photographer who will always be here for you.</p>
      <div class="social-links">
        <a href="https://twitter.com/i/flow/login" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/patrikzalman" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/patrez_xx/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/patrik-%C5%BEalman-665368207/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Zalman</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>