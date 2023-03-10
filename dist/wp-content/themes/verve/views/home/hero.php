<?php
  while( have_rows('hero') ):
    
    the_row(); 
    
    $content = get_sub_field('content');
    $image = get_sub_field('image');
?>
<section class="home-hero">
  <div class="container">
    <div class="home-hero-content">
      <div class="content">
        <?= $content ?>
      </div>
      <?php
      if( have_rows('button') ):
        while( have_rows('button') ):
          the_row();

          $name = get_sub_field('name');
          $link = get_sub_field('link');
          $new_tab = (get_sub_field('new_tab')) ? ' target="_blank"' : '';
      ?>
      <a href="<?= $link ?>" <?= $new_tab ?> class="button">
        <?= $name ?> <i class="fa fa-arrow-right"></i>
      </a>
      <?php
        endwhile;
      endif; ?>
    </div>
    <div class="home-hero-image">
      <figure>
        <img data-src="<?= $image ?>" alt="<?= get_bloginfo('name') ?>" class="img-fluid defer">
      </figure>
    </div>
    <img
      data-src="<?= get_template_directory_uri() . '/assets/images/hero-detail-top.png'; ?>"
      alt="<?= get_bloginfo('name') ?>"
      class="img-fluid defer home-hero-detail-top">
    <img
      data-src="<?= get_template_directory_uri() . '/assets/images/hero-detail.png'; ?>"
      alt="<?= get_bloginfo('name') ?>"
      class="img-fluid defer home-hero-detail">
  </div>
</section>
<?php
  endwhile;
?>