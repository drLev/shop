<?php
/**
 * The template part for displaying Post
 *
 * @package VW Startup 
 * @subpackage vw_startup
 * @since VW Startup 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <div class="box-image">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>  
    </div>
    <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
    <?php if(get_theme_mod('vw_startup_toggle_postdate',true)==1 || get_theme_mod('vw_startup_toggle_author',true)==1 || get_theme_mod('vw_startup_toggle_comments',true)==1){ ?>
      <div class="post-info">
        <?php if(get_theme_mod('vw_startup_toggle_postdate',true)==1){ ?>
          <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"><?php the_date(); ?></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_startup_toggle_author',true)==1){ ?>
          <i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <?php the_author(); ?></span>
        <?php } ?>

        <?php if(get_theme_mod('vw_startup_toggle_comments',true)==1){ ?>
          <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-startup'), __('0 Comments', 'vw-startup'), __('% Comments', 'vw-startup') ); ?> </span> 
        <?php } ?>
      </div>
    <?php }?>
    <div class="new-text">
      <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_startup_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_startup_excerpt_number','30')))); ?></p>
    </div>
    <div class="content-bttn">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'vw-startup' ); ?>"><?php esc_html_e('Read More','vw-startup'); ?><span class="screen-reader-text"><?php esc_html_e( 'Read More','vw-startup' );?></span></a>
    </div>
  </div>
</article>