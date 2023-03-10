<?php if(is_front_page()) { ?>
<style>
  .preloader {
    position: fixed;
    z-index: 10000;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgb(73,49,71);
    background: linear-gradient(180deg, rgba(73,49,71,1) 0%, rgba(94,61,92,1) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    transition: .2s all cubic-bezier(.215, .61, .355, 1);
    display: none;
  }
  .preloader .loader {
    margin-top: auto;
    margin-bottom: 30px;
  }
  .preloader h1 {
    font-size: 24px;
    font-weight: 400;
    transition: .2s all cubic-bezier(.215, .61, .355, 1);
    transform: translateY(-40px);
    opacity: 0;
  }
  .preloader h2 {
    font-size: 18px;
    font-weight: 400;
    transition: .2s all cubic-bezier(.215, .61, .355, 1);
    transform: translateY(-40px);
    opacity: 0;
  }
  .preloader img {
    margin-top: auto;
    margin-bottom: 40px;
    transition: .2s all cubic-bezier(.215, .61, .355, 1);
    opacity: 0;
  }
</style>
<div class="preloader">
  <div class="loader loader--style1" title="0">
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
    <path opacity="0.2" fill="#fff" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
      s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
      c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
    <path fill="#fff" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
      C22.32,8.481,24.301,9.057,26.013,10.047z">
      <animateTransform attributeType="xml"
        attributeName="transform"
        type="rotate"
        from="0 20 20"
        to="360 20 20"
        dur="0.5s"
        repeatCount="indefinite"/>
      </path>
    </svg>
  </div>
  <div>
    <h1>É o início de uma jornada.</h1>
    <h2>E que bom que você chegou para<br>crescer junto com a gente.</h2>
  </div>
  <img src="<?= get_field('logo', 'options') ?>" class="img-fluid">
</div>
<?php } ?>