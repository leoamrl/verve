<?php
  while( have_rows('faqs', 5) ):
    the_row(); 
    while( have_rows('action') ):
        
      the_row(); 
      
      $icon = get_sub_field('icon');
      $content = get_sub_field('content');
?>
<div class="container">
  <div class="home-faqs-action faqs-form" id="perguntar">
    <div class="home-faqs-action-icon">
      <i class="<?= $icon ?>"></i>
    </div>
    <div class="content">
      <?= $content ?>
    </div>
    <?php
        while( have_rows('button') ):
          the_row();

          $name = get_sub_field('name');
          $link = get_sub_field('link');
          $button_icon = get_sub_field('icon');
          $new_tab = (get_sub_field('new_tab')) ? ' target="_blank"' : '';
    ?>
    <a href="<?= $link ?>" <?= $new_tab ?> class="button">
      <i class="<?= $button_icon ?>"></i> <?= $name ?>
    </a>
    <?php
        endwhile;
    ?>
  </div>
</div>
<?php
    endwhile;
  endwhile;
?>