<?php
/**
 * The template part for displaying navigation
 *
 * @package VW Startup 
 * @subpackage vw_startup
 * @since VW Startup 1.0
 */
?>
<button class="toggleMenu toggle"><?php esc_html_e('Menu','vw-startup'); ?></button>  
<div id="header" class="menubar">
  <div class="container">
    <div class="row bg-home">      
      <div class="col-lg-9 col-md-9">
        <nav class="nav">
          <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
        </nav>
      </div>
      <div class="col-lg-3 col-md-3 req-button">
        <?php if ( get_theme_mod('vw_startup_button_text','') != "" ) {?>
          <a href="<?php echo esc_url( get_theme_mod('vw_startup_button_link','') ); ?>"><?php echo esc_html( get_theme_mod('vw_startup_button_text','') ); ?></a>
        <?php }?>
      </div>
    </div>
  </div>
</div>