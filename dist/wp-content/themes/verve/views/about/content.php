<div class="about-content">
  <div class="container">
    <div class="section-header section-header--left about-content-header">
      <div class="about-content-title"><?= get_field('title') ?></div>
      <div class="about-content-subtitle"><?= get_field('subtitle') ?></div>
    </div>
    <div class="about-content-image">
      <img data-src="<?= get_field('image') ?>" class="img-fluid defer">
    </div>
    <div class="about-content-item">
      <div class="content">
        <?= get_field('content') ?>
      </div>
    </div>
  </div>
</div>