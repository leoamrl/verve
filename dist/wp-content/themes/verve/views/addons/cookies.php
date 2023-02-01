<?php
  while( have_rows('cookies', 'options') ):
    
    the_row(); 
    
    $message = get_sub_field('message');
    $position = get_sub_field('position');
?>
<div
  data-cookies
  class="cookies cookies-<?= $position ?>">
  <p>
    <?= $message ?>
    
    <a
      title="Política de privacidade"
      href="<?= get_home_url() ?>/politica-de-privacidade">
      <i class="fa fa-question-circle"></i>
    </a>
  </p>
  <a
    href="javascript:;"
    data-cookies-close
    title="Aceitar cookies e fechar"
    class="cookies-button button">Aceitar e fechar</a>
  <button
    data-cookies-close
    title="Aceitar cookies e fechar"
    class="cookies-close">
    <i class="fa fa-times"></i>
  </button>
</div>
<?php
  endwhile;
?>