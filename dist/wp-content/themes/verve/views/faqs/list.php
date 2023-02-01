<section class="faqs-list">
  <div class="container">
  <?php 
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        
        include get_theme_file_path( '/views/faqs/item.php' );
      }
    } else {
      include get_theme_file_path( '/views/page/not_found.php' );
    }
    wp_reset_query();
  ?>
  </div>
  <div class="container">
    <?php verve_numeric_posts_nav(); ?>
  </div>
</section>