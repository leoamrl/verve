<div class="container">
  <section class="blog-hero page-hero">
    <h1 class="blog-hero-title">
      <?php
        if( is_category() ) {
          single_cat_title();
        } else if( is_search() ) {
          echo 'Resultados: '; the_search_query();
        } else {
          echo 'Blog';
        }
      ?>
    </h1>
    <div class="blog-hero-actions">
      <div class="blog-hero-search">
        <form action="<?php echo home_url( '/' ); ?>" method="get">
          <label
            class="form-field-label"
            for="search">
            Pesquise por palavra-chave
          </label>
          <div class="form-field form-field-icon">
            <input
              class="form-field-input"
              type="text"
              name="s"
              id="search"
              placeholder="Pesquisar..."
              value="<?php the_search_query(); ?>">
            <button
              class="form-field-button"
              type="submit"
              alt="Search">
              <i class="fa fa-search"></i>
            </button>
            <input
              type="hidden"
              name="post_type"
              id="post_type"
              value="post" />
          </div>
        </form>
      </div>
      <div class="blog-hero-category">
        <form action="">
          <label class="form-field-label">Categorias</label>
          <div class="form-field">
            <?php wp_dropdown_categories( 'show_option_all=Todas&hierarchical=1' ); ?>
            <label
              for="cat"
              class="form-field-button">
              <i class="fa fa-chevron-down"></i>
            </label>
          </div>
        </form>
        <script>
          var dropdown = document.getElementById("cat");
          function onCatChange() {
            if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
              location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
            } else {
              location.href = "<?php echo esc_url( home_url( '/' ) ); ?>blog"
            }
          }
          dropdown.onchange = onCatChange;
        </script>
      </div>
    </div>
  </section>
</div>