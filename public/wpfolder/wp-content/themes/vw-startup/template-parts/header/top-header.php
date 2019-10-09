<?php
/**
 * The template part for displaying top bar
 *
 * @package VW Startup 
 * @subpackage vw_startup
 * @since VW Startup 1.0
 */
?>
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <?php if ( get_theme_mod('vw_startup_short_line','') != "" ) {?>
          <p><?php echo esc_html( get_theme_mod('vw_startup_short_line','') ); ?></p>
        <?php }?>
      </div>
      <div class="col-lg-5 col-md-5">
        <?php dynamic_sidebar('social-icon'); ?>
      </div>
      <div class="search-box col-lg-1 col-md-1">
        <span><i class="fas fa-search"></i></span>
      </div>
    </div>
    <div class="serach_outer">
      <div class="closepop"><i class="far fa-window-close"></i></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>