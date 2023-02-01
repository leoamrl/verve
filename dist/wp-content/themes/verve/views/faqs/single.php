<section class="faqs-single">
  <div class="faqs-single-back">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>faqs">
        <i class="fas fa-arrow-left"></i>
        Todos as perguntas
      </a>
    </div>
  </div>
  <div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <article class="faqs-single">
      <h1 class="faqs-single-title">
        <?php the_title() ?>
      </h1>
      <div class="content">
        <?php the_content() ?>
      </div>
    </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
  <div class="container">
    <section class="faqs-single-related">
      <h2 class="faqs-single-related-title">Dúvidas relacionadas</h2>
      <div class="faqs-single-related-list">
        <?php
          $related = get_posts(
            array(
              'category__in' => wp_get_post_categories($post->ID),
              'numberposts' => 4,
              'post__not_in' => array($post->ID)
              )
            );
          if( $related ) foreach( $related as $post ) {
            setup_postdata($post);
        ?>
        <article class="faqs-single-related-item">
          <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
            <h1><?php the_title() ?></h1>
            
            <i class="fa fa-arrow-right"></i>
          </a>
        </article> 
        <?php
          }
          wp_reset_postdata();
        ?>
      </div>
  </section>
  </div>
</section>