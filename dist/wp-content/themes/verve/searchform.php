<form action="<?php echo home_url( '/' ); ?>" method="get" class="search">
  <div>
    <input type="text" name="s" id="search" placeholder="Enter keywords here..." value="<?php the_search_query(); ?>">
    <button type="submit" alt="Search"><i class="fa fa-search"></i></button>
    <input type="hidden" name="post_type" id="post_type" value="product"  />
  </div>
</form>