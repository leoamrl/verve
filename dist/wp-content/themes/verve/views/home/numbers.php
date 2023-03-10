<section class="home-numbers">
  <div class="container">
    <ul class="home-numbers-list">
      <?php
        while( have_rows('numbers') ):
          
          the_row(); 
          
          $icon = get_sub_field('icon');
          $top = get_sub_field('top');
          $pre = get_sub_field('pre');
          $number = get_sub_field('number');
          $suf = get_sub_field('suf');
          $bottom = get_sub_field('bottom');
      ?>
        <li class="home-numbers-item">
          <div class="home-numbers-icon">
            <?= $icon ?>
          </div>
          <p><?= $top ?></p>
          <h2><?= $pre ?><span class="count" data-time="<?= $number ?>">0</span><?= $suf ?></h2>
          <p><?= $bottom ?></p>
        </li>
      <?php
        endwhile;
      ?>
    </ul>
  </div>
</section>