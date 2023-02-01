  </main>

  <footer class="footer">
    <div class="footer-main">
      <div class="container">
        <a href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>" class="footer-logo">
          <img data-src="<?= get_field('logo', 'options') ?>" class="img-fluid defer">
        </a>
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
  
  
  <?php wp_footer(); ?>

</body>
</html>