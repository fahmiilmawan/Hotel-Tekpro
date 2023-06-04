<!DOCTYPE html>
<html lang="en">
<head>

     <title>TOK DALANG HOMESTAY</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/templatemo-digital-trend.css')); ?>">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="font-size: 15px;">
            <div class="row">
                <div class="col-4 mx-auto">
                    <img src="<?php echo e(Storage::URL($navbar[0]->icon)); ?>" width="100px" alt="">
                    <?php echo e($navbar[0]->title); ?>

                </div>
            </div>

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll"><?php echo e($navbar[0]->m_about); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link smoothScroll"><?php echo e($navbar[0]->m_facility); ?> & <?php echo e($navbar[0]->m_room); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link"><?php echo e($navbar[0]->m_reservation); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Seamless Stays, Memorable Getaways</h1>

                                   <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let's Book Now!</a>

                                   <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +62 88xx xxxx xxxx</strong>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="<?php echo e(asset('assets/images/receptionist.png')); ?>" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">the best <strong>Hotel</strong> in Indonesia</h2>

                              <p class="mb-0" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas rem cum ipsum voluptate, commodi soluta facere dolore accusantium aliquam ad tempore, voluptates nesciunt nulla ducimus. Amet deleniti corrupti excepturi harum?<a href="blog.html">blog</a> pages, <a href="project-detail.html">project</a> page, and <a href="contact.html">contact</a> page.
                              <br><br>You are <strong>allowed</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia perspiciatis cupiditate placeat numquam, sed accusantium consectetur et error autem labore? Consectetur ipsam vero, tempora nemo nobis sapiente! Maxime, culpa!</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="<?php echo e(asset('assets/images/office.png')); ?>" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <strong>Facility</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="<?php echo e(asset('assets/images/project/project-image01.jpg')); ?>" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Marketing</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Sweet Go Agency</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="<?php echo e(asset('assets/images/project/project-image02.jpg')); ?>" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Smart Ladies</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="<?php echo e(asset('assets/images/project/project-image03.jpg')); ?>" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Branding</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Shoes factory</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="<?php echo e(asset('assets/images/project/project-image04.jpg')); ?>" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Social Media</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Race Bicycle</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="<?php echo e(asset('assets/images/project/project-image05.jpg')); ?>" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Video</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Ultimate HealthCare</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="<?php echo e(asset('assets/images/female-avatar.png')); ?>" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small>
                      </p>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Stay, <strong> Relax </strong>and Experience Bliss.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i>
              +99 080 070 4224
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i>
              Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/smoothscroll.js')); ?>"></script>
     <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\laragon\www\TugasTekpro\hotel\resources\views/landing-template/template.blade.php ENDPATH**/ ?>