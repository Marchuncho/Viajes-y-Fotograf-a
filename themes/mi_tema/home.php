<?php get_header() ?>
<div class="container">
  <h1 class="text-center my-5 text-info">Viajes y Fotografía</h1>

  <div class="row">
    <div class="col-md-6">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/principal.png" alt="Imagen principal">
    </div>

    <div class="col-md-6 mt-3">
      <h2>Sobre mí <i class="far fa-smile-wink"></i></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p class="text-info text-right"><i class="fab fa-flickr fa-2x mx-2"></i> <i class="fab fa-instagram fa-2x mx-2"></i> <i class="fab fa-youtube-square fa-2x mx-2"></i></p>
    </div>
  </div>

  <h2 class="text-center mt-5 mb-3">Portafolio <i class="fas fa-camera-retro"></i></h2>

  <div class="row">

    <div class="col-md-12 d-flex justify-content-center mt-3 mb-5">

      <button type="button" class="btn btn-outline-info mx-2 waves-effect filter" data-rel="all">All</button>
      <button type="button" class="btn btn-outline-info mx-2 waves-effect filter" data-rel="1">Mountains</button>
      <button type="button" class="btn btn-outline-info mx-2 waves-effect filter" data-rel="2">Sea</button>

    </div>

  </div>

  <div class="gallery" id="gallery">

    <div class="mb-3 pics animation all 2">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/sea1.jpg" alt="Card image cap">
    </div>

    <div class="mb-3 pics animation all 1">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/mountain1.jpg" alt="Card image cap">
    </div>

    <div class="mb-3 pics animation all 1">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/mountain2.jpg" alt="Card image cap">
    </div>

    <div class="mb-3 pics animation all 2">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/sea2.jpg" alt="Card image cap">
    </div>

    <div class="mb-3 pics animation all 2">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/sea3.jpg" alt="Card image cap">
    </div>

    <div class="mb-3 pics animation all 1">
      <img class="rounded w-100 h-auto" src="<?php echo get_theme_file_uri(); ?>/assets/images/mountain3.jpg" alt="Card image cap">
    </div>

  </div>
</div>
<?php get_footer() ?>
