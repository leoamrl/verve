<?php
  while( have_rows('testimonials') ):
    
    the_row(); 
    
    $title = get_sub_field('title');
?>
<div class="container">
  <section class="testimonials">
    <h2 class="testimonials-title"><?= $title ?></h2>
    <div class="glide" data-testimonials-carousel>
      <div class="glide__track" data-glide-el="track">
        <ul class="testimonials-list">
          <?php
            while( have_rows('list') ):
              
              the_row(); 
              
              $content = get_sub_field('content');
              $image = get_sub_field('image');
              $author = get_sub_field('author');
          ?>
          <li class="testimonials-item">
            <div class="content">
              <?= $content ?>
            </div>
            <div class="testimonials-item-author">
              <figure>
                <img data-src="<?= $image ?>" class="img-fluid defer">
              </figure>
              <div class="content">
                <?= $author ?>
              </div>
            </div>
          </li>
          <?php
            endwhile;
          ?>
        </ul>
      </div>
      <div data-glide-el="controls" class="testimonials-arrows">
        <button data-glide-dir="<">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button data-glide-dir=">">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section>
</div>
<?php
  endwhile;
?>