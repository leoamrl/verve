<section class="faqs-hero page-hero">
  <div class="container">
    <h1 class="faqs-hero-title">
      <?php 
        if( is_search() ) {
          echo 'Resultados: '; the_search_query();
        } else {
          echo 'Perguntas Frequentes';
        }
      ?>
    </h1>
    <h2 class="faqs-hero-subtitle">Qual a sua dúvida?</h2>
    <div class="faqs-hero-search">
      <form action="<?php echo home_url( '/' ); ?>" method="get">
        <div class="form-field form-field-icon">
          <input
            class="form-field-input"
            type="text"
            name="s"
            id="search"
            placeholder="Sua dúvida"
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
            value="faqs" />
        </div>
        <div class="faqs-hero-search-buttons">
          <button class="button">Pesquisar</button>
          <p>ou</p>
          <a
            href="#perguntar"
            class="button button--ghost">
            Fazer uma pergunta
          </a>
        </div>
      </form>
    </div>
  </div>
</section>