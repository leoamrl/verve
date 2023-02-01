<article class="blog-item">
  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
    <figure class="blog-item-thumb">
      <img data-src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" class="img-fluid defer">
    </figure>
    <h1 class="blog-item-title"><?php the_title() ?></h1>
  </a>
  <p class="blog-item-date"><i class="fa fa-calendar-day"></i> <?php $post_date = get_the_date( 'd F, Y' ); echo $post_date; ?>, <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/<?php echo esc_html( $categories[0]->slug ); ?>" class="blog-item-cat"><?php  echo esc_html( $categories[0]->name ); ?></a><?php } ?></p>
  <div class="content">
    <?php the_excerpt() ?>
  </div>
  <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="button">Continue Lendo</a>
</article>