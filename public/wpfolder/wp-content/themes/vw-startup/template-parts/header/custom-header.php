<?php
/**
 * The template part for displaying header
 *
 * @package VW Startup 
 * @subpackage vw_startup
 * @since VW Startup 1.0
 */
?>
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="logo col-lg-4 col-md-12">
        <?php if( has_custom_logo() ){ vw_startup_the_custom_logo();
          }else{ ?>
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); ?></p>
        <?php endif; } ?>
      </div>
      <div class="col-lg-8 col-md-12 contact-info">
        <div class="row">
          <div class="col-lg-4 col-md-4"> 
            <div class="row">
              <?php if ( get_theme_mod('vw_startup_location','') != "" ) {?>
                <div class="col-lg-2 col-md-2">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p><?php echo esc_html( get_theme_mod('vw_startup_location','') ); ?></p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 call"> 
            <div class="row">
              <?php if ( get_theme_mod('vw_startup_call','') != "" ) {?>
                <div class="col-lg-2 col-md-2">
                  <i class="fas fa-phone-volume"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p><?php echo esc_html( get_theme_mod('vw_startup_call','') ); ?></p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4"> 
            <div class="row">
              <?php if ( get_theme_mod('vw_startup_email','') != "" ) {?>
                <div class="col-lg-2 col-md-2">
                  <i class="fas fa-envelope-open"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p><?php echo esc_html( get_theme_mod('vw_startup_email','') ); ?></p>
                </div>
              <?php }?>
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>
</div>