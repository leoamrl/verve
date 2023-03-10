<?php
  while( have_rows('blog') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
?>
<section class="home-blog">
  <div class="container">
    <div class="home-blog-header">
      <div class="section-header section-header--left">
        <?= $header ?>
      </div>
      <a href="<?= get_home_url() ?>/blog" class="home-blog-header-link">
        Todos os posts <i class="fa fa-arrow-right"></i>
      </a>
    </div>
    <div class="home-blog-content">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 1,
          'order' => 'ASC',
        );
        $the_query = new WP_Query( $args );
      
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      <article class="home-blog-featured">
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
          <figure>
            <img data-src="<?php helper_fallback_thumbnail('placeholder-blog.png') ?>" alt="<?php the_title() ?>" class="img-fluid defer">
          </figure>
        </a>
        <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo esc_html( $categories[0]->slug ); ?>" class="home-blog-item-cat"><?php  echo esc_html( $categories[0]->name ); ?></a><?php } ?>
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
          <h1><?php the_title() ?></h1>
          <p>Continue Lendo <i class="fa fa-arrow-right"></i></p>
        </a>
      </article>
      <?php
        endwhile;

        wp_reset_postdata();
      ?>
      <div class="home-blog-list">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'offset' => 1
          );
          $the_query = new WP_Query( $args );
        
          while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <article class="home-blog-item">
          <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
            <figure>
              <img data-src="<?php helper_fallback_thumbnail('placeholder-blog.png') ?>" alt="<?php the_title() ?>" class="img-fluid defer">
            </figure>
          </a>
          <div class="home-blog-item-content">
            <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo esc_html( $categories[0]->slug ); ?>" class="home-blog-item-cat"><?php  echo esc_html( $categories[0]->name ); ?></a><?php } ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
              <h1><?php the_title() ?></h1>
              <p>Continue Lendo <i class="fa fa-arrow-right"></i></p>
            </a>
          </div>
        </article>
        <?php
          endwhile;

          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
<?php 
  endwhile;
?>