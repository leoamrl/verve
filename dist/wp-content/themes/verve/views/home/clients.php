<section class="clients">
  <div class="container">
    <div class="glide" data-clients-carousel>
      <div class="glide__track" data-glide-el="track">
        <ul class="clients-list">
          <?php
            while( have_rows('clients') ):
              
              the_row(); 
              
              $image = get_sub_field('image');
          ?>
          <li class="clients-item">
            <img data-src="<?= $image ?>" class="img-fluid defer">
          </li>
          <?php
            endwhile;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>