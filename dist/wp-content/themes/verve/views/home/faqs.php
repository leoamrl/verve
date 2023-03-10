<?php
  while( have_rows('faqs') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
?>
<section class="home-faqs">
  <div class="container">
    <div class="home-faqs-content">
      <div class="section-header section-header--left">
        <?= $header ?>
      </div>
    </div>
    <ul class="home-faqs-list">
      <?php
        $args = array(
          'post_type' => 'faqs',
          'posts_per_page' => 8,
          'order' => 'ASC',
        );
        $the_query = new WP_Query( $args );
      
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <article class="home-faqs-item accordion">
        <header class="home-faqs-item-title accordion-title" data-accordion-title>
          <h1 class="home-faqs-item-question"><?php the_title() ?></h1>

          <div class="home-faqs-item-caption">
            <span class="expand"></span>
            <span class="collapse"></span>
          </div>
        </header>
        <div class="home-faqs-item-content accordion-content content">
          <?php the_content() ?>
        </div>
      </article>
      <?php
        endwhile;

        wp_reset_postdata();
      ?>
    </ul>
    <?php
      while( have_rows('action') ):
        
        the_row(); 
        
        $icon = get_sub_field('icon');
        $content = get_sub_field('content');
    ?>
    <div class="home-faqs-action">
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
    <?php
      endwhile;
    ?>
  </div>
</section>
<?php
  endwhile;
?>