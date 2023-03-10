<section class="about-values">
  <div class="container">
    <div class="about-values-list">
      <?php
        $counter = 1;

        while( have_rows('values') ):
          
          the_row(); 
          
          $image = get_sub_field('image');
          $content = get_sub_field('content');
      ?>
      <div class="about-values-item <?= ($counter === 3) ? 'about-values-item-last': ''; ?>">
        <?php if($counter !== 3) { ?>
        <div class="content">
          <?= $content ?>
        </div>
        <?php } ?>
        <?php if($counter === 3) { ?>
        <div class="content about-values-content-last">
          <?= $content ?>
        </div>
        <figure>
          <img data-src="<?= $image ?>" alt="" class="img-fluid defer">
        </figure>
        <?php } ?>
      </div>
      <?php
          $counter++;
        endwhile;
      ?>
    </div>
  </div>
</section>