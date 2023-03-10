<article class="blog-item">
  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
    <figure>
      <img data-src="<?php helper_fallback_thumbnail('placeholder-blog.png') ?>" alt="<?php the_title() ?>" class="img-fluid defer">
    </figure>
  </a>
  <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo esc_html( $categories[0]->slug ); ?>" class="home-blog-item-cat"><?php  echo esc_html( $categories[0]->name ); ?></a><?php } ?>
  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
    <h1><?php the_title() ?></h1>
  </a>
  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="button">Continue Lendo</a>
</article>