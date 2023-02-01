<section class="page-content">
  <div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="content">
      <?php the_content() ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>