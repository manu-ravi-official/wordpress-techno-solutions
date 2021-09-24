<?php
/**
Template Name:Blog
*/

get_header();

?>
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
        <h2><?php the_title(); ?></h2>

      </div>
    </section>
    
    <?php echo do_shortcode("[bdp_post design=design-3 grid=3]");
     get_sidebar();
     ?> 
    
<?php
get_footer();
?>