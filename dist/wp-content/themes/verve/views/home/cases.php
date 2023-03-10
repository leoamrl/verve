<?php
  while( have_rows('cases') ):
    
    the_row(); 
    
    $header = get_sub_field('header');
?>
<section class="home-cases" id="cases">
  <div class="container">
    <div class="section-header section-header--left">
      <?= $header ?>
    </div>
    <div class="glide" data-cases-carousel>
      <div data-glide-el="controls" class="home-cases-arrows">
        <button data-glide-dir="<">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button data-glide-dir=">">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
      <div class="glide__track" data-glide-el="track">
        <div class="home-cases-list">
          <?php
            $args = array(
              'post_type' => 'cases',
              'posts_per_page' => 10,
              'order' => 'ASC',
            );
            $the_query = new WP_Query( $args );
          
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          <article class="home-cases-item">
            <figure>
              <img data-src="<?php helper_fallback_thumbnail('placeholder-cases.png') ?>" alt="<?php the_title() ?>" class="img-fluid defer">
            </figure>
            <ul class="home-cases-category">
              <?php
                while( have_rows('category') ):
                  
                  the_row(); 
                  
                  $name = get_sub_field('name');
              ?>
              <li><?= $name; ?></li>
              <?php 
                endwhile;
              ?>
            </ul>
            <h1><?php the_title() ?></h1>
            <div class="content">
              <?php the_content() ?>
            </div>
          </article>
          <?php
            endwhile;

            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  endwhile;
?>