<?php
/**
Template Name: Services
*/

get_header();

?>
<?php
    $hero = get_field('hero');?>

 
 <!-- ======= Services Section ======= -->
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
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title1'];?>
              </a></h4>
              <p class="description"><?php echo $hero['content1'];?></p>
              <a href="http://localhost/theme_test/service/dm/" class="learn-more">Read more </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title2'];?></a></h4>
              <p class="description"><?php echo $hero['content2'];?></p>
              <a href="" class="learn-more">Read more </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title3'];?></a></h4>
              <p class="description"><?php echo $hero['content3'];?></p>
              <a href="" class="learn-more">Read more </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title4'];?></a></h4>
              <p class="description"><?php echo $hero['content4'];?></p>
              <a href="" class="learn-more">Read more </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title5'];?></a></h4>
              <p class="description"><?php echo $hero['content5'];?></p>
              <a href="" class="learn-more">Read more </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href=""><?php echo $hero['small_title6'];?></a></h4>
              <p class="description"><?php echo $hero['content6'];?></p>
             <a href="" class="learn-more">Read more </a>
          

            </div>
          </div>
        </div>

      </div>
     
    </section>
    <!-- End Services Section -->


    <?php
get_footer();
