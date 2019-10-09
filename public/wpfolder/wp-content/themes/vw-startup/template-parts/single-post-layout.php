<?php
/**
 * The template part for displaying Post
 *
 * @package VW Startup
 * @subpackage vw-startup
 * @since VW Startup 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
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
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()) { ?>
            <div class="feature-box">   
                <?php the_post_thumbnail(); ?>
            </div>
        <?php } the_content();
        the_tags(); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-startup' ),
            ) );
        } elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-startup' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'vw-startup' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-startup' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-startup' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
        }
    ?>
</article>