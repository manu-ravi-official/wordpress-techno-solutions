<?php
/**
Template Name: Home
*/

get_header();
?>

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container aos-init aos-animate" data-aos="fade-in">
      <h1>Welcome to Flexor</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5  aos-init aos-animate" data-aos="fade-up">
            <div class="content">
              <h3>Why Choose Flexor for your company website?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
     <!-- ======= Values Section ======= -->
     <section id="values" class="values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch aos-init aos-animateaos-init aos-animate " data-aos="fade-up">
          <div class="card" style =" background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/values-1.jpg');">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/values-2.jpg');">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/values-3.jpg');">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card" style="background-image:  url('<?php echo get_template_directory_uri(); ?>/assets/images/values-4.jpg');">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Care</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Values Section -->
    <!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="owl-carousel clients-carousel">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-1.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-2.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-3.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-4.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-5.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-6.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-7.png"?> alt="">
          <img src=<?php echo get_template_directory_uri()."/assets/images/clients/client-8.png"?> alt="">
        </div>

      </div>
    </section><!-- End Clients Section -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src=<?php echo get_template_directory_uri()."/assets/images/testimonials/testimonials-1.jpg"?> class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?php echo get_template_directory_uri()."/assets/images/testimonials/testimonials-2.jpg"?> class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?php echo get_template_directory_uri()."/assets/images/testimonials/testimonials-3.jpg"?> class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?php echo get_template_directory_uri()."/assets/images/testimonials/testimonials-4.jpg"?> class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src=<?php echo get_template_directory_uri()."/assets/images/testimonials/testimonials-5.jpg"?> class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

   <!--  </div>.wrapper -->
	<!-- 	</div> #content -->



<?php
get_footer();
?>