<header class="header">
  <div class="header-main">
    <div class="container">
      <a href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>" class="header-logo">
        <img data-src="<?= get_field('logo', 'options') ?>" class="img-fluid defer">
      </a>

      <div class="header-menu" data-menu>
        <?php
          wp_nav_menu(array('theme_location' => 'header' ));
        ?>
      </div>

      <div class="header-hamburger">
        <div class="hamburger" data-menu-trigger>
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</header>
<header class="header header--fixed">
  <div class="header-main">
    <div class="container">
      <a href="<?= get_home_url() ?>" title="<?= get_bloginfo('name') ?>" class="header-logo">
        <img data-src="<?= get_field('logo', 'options') ?>" class="img-fluid defer">
      </a>

      <div class="header-menu">
        <?php
          wp_nav_menu(array('theme_location' => 'header' ));
        ?>
      </div>

      <div class="header-social">
        
      </div>

      <div class="header-hamburger">
        <div class="hamburger" data-menu-trigger>
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</header>