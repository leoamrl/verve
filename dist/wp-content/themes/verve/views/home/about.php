<?php
  while( have_rows('about') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>
<section class="home-about">
  <div class="container">
    <div class="section-header">
      <?= $header ?>
    </div>
    <div class="home-about-item">
      <div class="home-about-content">
        <div class="content">
          <?= $content ?>
        </div>
        <div class="home-about-buttons">
          <?php
            while( have_rows('button') ):
              the_row();

              $name = get_sub_field('name');
              $link = get_sub_field('link');
              $new_tab = (get_sub_field('new_tab')) ? ' target="_blank"' : '';
          ?>
          <a href="<?= $link ?>" <?= $new_tab ?> class="button home-about-button">
            <?= $name ?> <i class="fa fa-arrow-right"></i>
          </a>
          <?php
            endwhile;
          ?>
        </div>
      </div>
      <div class="home-about-image">
        <figure>
          <img data-src="<?= $image ?>" class="img-fluid defer">
        </figure>
      </div>
    </div>
  </div>
</section>
<?php
  endwhile;
?>