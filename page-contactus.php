<?php
   /**
   Template Name:Contact us
   */
   
   get_header();
   
   ?>
<section id="services" class="services section-bg">
<div class="container">
<div class="section-title aos-init aos-animate" data-aos="fade-up">
<section id="breadcrumbs" class="breadcrumbs">
   <div class="container">
      <ol>
         <li><a href="index.html">Home</a></li>
         <li>Inner Page</li>
      </ol>
      <h2><?php the_title(); ?></h2>
   </div>
</section>

<div class="page-container">
   <div class="container contact-top-row">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?> 
            <?php the_content(); ?>
            <?php endwhile; ?>
         </div>
         <div class="col-lg-4 col-md-4">
            <span><i class="fas fa-map-marker-alt"></i></span>
            <p><?php the_field('address'); ?></p>
         </div>
         <div class="col-lg-4 col-md-4 wow slideInUp">
            <span><i class="fas fa-phone"></i></span>
            <p><?php the_field('phone'); ?></p>
         </div>
         <div class="col-lg-4 col-md-4">
            <span><i class="far fa-envelope"></i></span>
            <p><?php the_field('email'); ?></p>
         </div>
      </div>
   </div>
   <div class="contact-form-bg">
      <div class="container">
         <h3>Send us a message</h3>
         <?php echo do_shortcode('[contact-form-7 id="234" title="Contact form 1"]'); ?>
      </div>
   </div>
   <div class="container ">
      <div class="row">
         <div class="col-lg-12 contact-page-map">
         <?php the_field('google_map'); ?>
         </div>
      </div>
   </div>
</div>

<?php
   get_footer();
   ?>