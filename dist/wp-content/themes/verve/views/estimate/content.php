<div class="estimate">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="content">
    <?php the_content() ?>
  </div>
  <?php endwhile; ?>
  <div class="estimate-form">
    <?= do_shortcode('[contact-form-7 id="200" title="Orçamento"]') ?>
  </div>
</div>