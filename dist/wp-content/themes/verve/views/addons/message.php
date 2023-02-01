<?php
  while( have_rows('message', 'options') ):
    
    the_row(); 
    
    $is_active = get_sub_field('active');
    $title = get_sub_field('title');
    $message = get_sub_field('message');

    if($is_active) {
?>
<div
  data-message-bar
  class="message-bar">
  <div class="container">
    <div
      data-message-bar-toggle
      class="message-bar-title">
      <p><?= $title ?></p>
      <i class="fa fa-chevron-down"></i>
      <i class="fa fa-chevron-up"></i>
    </div>
    <?php
      while( have_rows('button') ):
        
        the_row(); 
        
        $name = get_sub_field('name');
        $link = get_sub_field('link');
        $new_tab = (get_sub_field('new_tab')) ? 'target="_blank"' : '';

        if($name && $link) {
    ?>
      <a
        href="<?= $link ?>"
        <?= $new_tab ?>
        class="button message-bar-button">
        <?= $name ?>
      </a>
    <?php
        }
      endwhile;
    ?>
    <div
      data-message-bar-content
      class="message-bar-content">
      <p><?= $message ?>test</p>
    </div>
  </div>
</div>
<?php
    }
  endwhile;