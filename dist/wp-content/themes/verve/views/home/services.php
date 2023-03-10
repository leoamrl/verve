<?php
  while( have_rows('services') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
?>
<section class="home-services" id="servicos">
  <div class="container">
    <div class="section-header">
      <?= $header ?>
    </div>
    <ul class="home-services-list">
      <?php
        while( have_rows('list') ):
          
          the_row(); 
          
          $icon = get_sub_field('icon');
          $content = get_sub_field('content');
          $link = get_sub_field('link');
      ?>
      <li class="home-services-item">
        <a href="<?= $link ?>">
          <div class="home-services-item-arrow">
            <i class="fa fa-arrow-right"></i>
          </div>
          <div class="home-services-icon">
            <?= $icon ?>
          </div>
          <?= $content ?>
        </a>
      </li>
      <?php
        endwhile;
      ?>
    </ul>
  </div>
</section>
<?php
  endwhile;
?>