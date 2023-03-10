<?php
  while( have_rows('whatsapp', 'options') ):
    
    the_row(); 
    
    $active = get_sub_field('active');
    $number = preg_replace('/\D+/', '', get_sub_field('number'));
    $message = get_sub_field('message');

    $link = 'https://api.whatsapp.com/send?phone='.$number.'&text='.$message;
    if ($active) {
?>
<div class="whatsapp-widget position-<?= $position ?>">
  <a
    href="<?= $link ?>"
    target="blank"
    title="Nosso whatsapp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
<?php
    }
  endwhile;
?>