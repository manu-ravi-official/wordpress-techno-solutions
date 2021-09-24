<?php
/**
Template Name:Testimonials
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
<div class="page-container testimonial-page">
<div class="container">
	<nav class="row justify-content-center">
      <div class="nav nav-pills nav-fill col-lg-6" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Testimonials</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Video Testimonials</a>
      </div>
    </nav>
    
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active testimonial-txt-con" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><!--testimonial-->
			<?php query_posts('post_type=testimonial&order=DEC&showposts=200&category_name=text'); ?>
            <?php while (have_posts()) : the_post(); ?>
            	<?php
				$org_county = get_field('video_testimonial');
				if (empty($org_county)) {
				?>
                <span>
                <?php the_content(); ?>
                <h6><?php the_title(); ?></h6>
                </span>
            <?php } endwhile; ?>
            <?php wp_reset_query();?>
        </div><!--testimonial end-->
        
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<?php query_posts('post_type=testimonial&order=DEC&showposts=10&category_name=video'); ?>
            <div class="row">
            <?php while (have_posts()) : the_post(); ?>
            	<?php if( get_field('video_testimonial') ): ?>
                <div class="col-lg-4">
                <div class="videowrapper"><?php the_field('video_testimonial'); ?></div>
                <h6 class="video-txt"><font><?php the_title(); ?></font></h6>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
            </div>
            <?php wp_reset_query();?>
        </div>
        
    </div>
</div>
</div>
<?php
get_footer();
?>