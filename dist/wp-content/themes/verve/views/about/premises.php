<?php
  while( have_rows('premises') ):
    
    the_row(); 
    
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>
<section class="about-premises">
  <div class="container">
    <div class="about-premises-image">
      <img data-src="<?= $image ?>" class="img-fluid defer">
    </div>
    <div class="about-premises-content content">
      <?= $content ?>
    </div>
  </div>
</section>
<?php
  endwhile;
?>