<?php
  while( have_rows('contact') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
    $content = get_sub_field('content');
?>
<section class="home-contact" id="contato">
  <div class="container">
    <div class="section-header section-header--left">
      <?= $header ?>
    </div>
    <div class="home-contact-item">
      <div class="home-contact-content">
        <div class="content">
          <?= $content ?>
        </div>
        <ul class="home-contact-contacts">
        <?php
          while( have_rows('contacts') ):
            
            the_row(); 
            
            $icon = get_sub_field('icon');
            $name = get_sub_field('name');
            $link = get_sub_field('link');
        ?>
          <li>
            <a href="<?= $link ?>" title="<?= $name ?>">
              <?= $icon ?>
              <?= $name ?>
            </a>
          </li>
        <?php 
          endwhile;
        ?>
        </ul>
      </div>
      <div class="home-contact-form">
        <?= do_shortcode('[contact-form-7 id="8" title="Fale conosco"]') ?>
      </div>
    </div>
  </div>
</section>
<?php 
  endwhile;
?>