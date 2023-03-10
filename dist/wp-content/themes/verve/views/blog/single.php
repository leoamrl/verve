<section class="blog-single">
  <div class="blog-single-back">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>perguntas-frequentes">
        <i class="fas fa-arrow-left"></i>
        Todos os posts
      </a>
    </div>
  </div>
  <div class="container blog-single-container">
    <?php while ( have_posts() ) : the_post(); ?>    
    <article class="blog-single-content">
      <h1 class="blog-single-title">
        <?php the_title() ?>
      </h1>
      <figure class="blog-single-figure">
        <img data-src="<?php helper_fallback_thumbnail('placeholder-blog.png') ?>" alt="<?php the_title() ?>" class="img-fluid defer">
      </figure>
      <div class="content">
        <?php the_content() ?>
      </div>
    </article>
    <?php endwhile; ?>
    <aside>
      <section class="blog-single-related">
        <h2 class="blog-single-related-title">Posts relacionados</h2>
        <div class="blog-single-related-list">
          <?php
            $related = get_posts(
              array(
                'category__in' => wp_get_post_categories($post->ID),
                'numberposts' => 4,
                'post_type' => 'post',
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
    </aside>
  </div>
</section>