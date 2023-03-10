  </main>

  <footer class="footer" data-footer>
    <div class="footer-main">
      <div class="container">
        <div class="footer-logo">
          <a href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>">
            <img data-src="<?= get_field('logo', 'options') ?>" class="img-fluid defer">
          </a>
        </div>
        <ul class="footer-social">
          <?php
          if( have_rows('social', 'options') ):
            while( have_rows('social', 'options') ):
              the_row();

              $icon = get_sub_field('icon');
              $link = get_sub_field('link');
              $title = get_sub_field('title');
          ?>
          <li>
            <a href="<?= $link ?>" title="<?= $title ?>" target="_blank" class="footer-social-item">
              <?= $icon ?>
            </a>
          </li>
          <?php
            endwhile;
          endif; ?>
        </ul>
        <div class="footer-menu">
          <?php
            wp_nav_menu(array('theme_location' => 'footer' ));
          ?>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <p>
          © <?= date("Y") . ' - ' .get_bloginfo('name') . ' - ' . get_field('copyright', 'options') ?>
        </p>
      </div>
    </div>
  </footer>

  <div class="footer-space" data-footer-space></div>
  
  <?php wp_footer(); ?>

</body>
</html>