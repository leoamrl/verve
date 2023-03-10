<?php
  while( have_rows('action') ):
    
    the_row(); 
    
    $image = get_sub_field('image');
    $content = get_sub_field('content');
?>
<section class="about-action">
  <div class="container">
    <div class="about-action-item">
      <div class="about-action-content">
        <div class="content">
          <?= $content ?>
        </div>

        <?php
          while( have_rows('button') ):
            
            the_row(); 
            
            $name = get_sub_field('name');
            $link = get_sub_field('link');
        ?>
        <a href="<?= $link ?>" class="button">
          <?= $name ?>
        </a>
        <?php
          endwhile;
        ?>
      </div>
      <div class="about-action-image">
        <img data-src="<?= $image ?>" alt="" class="img-fluid defer">
      </div>
    </div>
  </div>
</section>
<?php
  endwhile;
?>