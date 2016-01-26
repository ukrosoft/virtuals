    <?php
/**
 * Template Name: Parallax-header-page Template
 *
 * Displays the Team Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */

?>


<?php get_header(); ?>
<?php
$image_popup_id = get_post_thumbnail_id();
if ($image_popup_id){
    $image_popup_url = wp_get_attachment_url( $image_popup_id );
}
?>
<?php do_action( 'himalayas_before_body_content' );

$himalayas_layout = himalayas_layout_class(); ?>
    <div class="parallax-section cta-text-style-1 clearfix cta-page-custom" style="background-image: url(&quot;<?php echo $image_popup_url; ?>&quot;); background-attachment: fixed; background-size: cover; background-position: 50% 16px; background-repeat: no-repeat;">
        <div class="parallax-overlay"></div>
        <div class="section-wrapper cta-text-section-wrapper">
            <div class="tg-container">
                <div class="cta-text-content">
                    <div class="cta-text-title">
                        <h3 class="caption-title">
                            <span><?php echo get_the_title(); ?></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php


?>
    <div id="content" class="site-content">
        <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">

            <div class="tg-container">

                <div id="primary">
                    <div id="content-2">
                        <?php while ( have_posts() ) : the_post();

                            get_template_part( 'content', 'page-parallax' );

                            do_action( 'himalayas_before_comments_template' );
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template();
                            do_action ( 'himalayas_after_comments_template' );

                        endwhile; ?>
                    </div><!-- #content -->
                </div><!-- #primary -->

                <?php  himalayas_sidebar_select(); ?>
            </div>
        </main>
    </div>

<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>