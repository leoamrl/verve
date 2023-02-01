<section class="blog-single">
  <div class="blog-single-back">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"><i class="fas fa-arrow-left"></i> Todos os posts</a>
    </div>
  </div>
  <div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>    
    <article class="blog-single">
        <figure class="blog-thumb">
          <img data-src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="img-fluid defer">
        </figure>
        <h1 class="blog-single-title"><?php the_title() ?></h1>
        <p class="blog-single-date">Postado em <?php $post_date = get_the_date( 'd F , Y' ); echo $post_date; ?> na categoria <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo esc_html( $categories[0]->slug ); ?>" class="blog-single-cat"><?php  echo esc_html( $categories[0]->name ); ?></a><?php } ?></p>
        <div class="content">
          <?php the_content() ?>
        </div>
    </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
  <div class="container">
    <section class="blog-single-related">
      <h2 class="blog-single-related-title">Posts relacionados</h2>
      <div class="blog-single-related-list">
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
        <article class="blog-single-related-item">
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