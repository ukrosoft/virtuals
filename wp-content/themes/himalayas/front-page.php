<?php
/**
 * Front Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>
<!--<link href="http://fonts.googleapis.com/css?-->
<!--family=Reenie+Beanie:regular"-->
<!--      rel="stylesheet"-->
<!--      type="text/css">-->

<?php get_header(); ?>

<div id="content" class="site-content">
    <?php
    if (is_active_sidebar('himalayas_front_page_section')) {
        if (!dynamic_sidebar('himalayas_front_page_section')):
        endif;
    }

    $himalayas_layout = himalayas_layout_class();

    if (get_theme_mod('himalayas_hide_blog_front', 0) != 1): ?>

        <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
            <div class="tg-container">
                <div id="primary" class="content-area">

                    <?php if (have_posts()):

                        while (have_posts()) : the_post();

                            if (is_front_page() && is_home()) {
                                get_template_part('content', '');
                            } elseif (is_front_page()) {
                                get_template_part('content', 'page');
                            }
                        endwhile;

                        get_template_part('navigation', 'none');
                    else:
                        get_template_part('no-results', 'none');
                    endif; ?>
                </div>

                <?php himalayas_sidebar_select(); ?>
            </div>
        </main>
    <?php endif; ?>

    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <?php
                do_shortcode('[our_clients items="6" image_height=150 ]What do our clients say about us?[/our_clients]');
                ?>
            </div>

        </div>


        <div class="row">
            <hr>
            <div class="col-xs-12">
                <h3 style="text-align: center;"><strong>Try a Virtual Professional Today - For free!</strong></h3>
            </div>
            <hr>
            <div class="col-xs-12">
                <p style="text-align: center;">We will match you to a virtual assistant or manager and do your first
                    task FOR FREE. It’s the best way to find out how a Virtual could help you freeing up your endless
                    todo-list</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <button style="height: initial;" class="btn btn-info btn-lg">Try a Virtual Professional for free
                </button>
            </div>
        </div>

<!--
        <div class="row">
            <hr>
            <div class="col-xs-12">
                <h3 style="text-align: center;"><strong>Start focusing on stream lining your work and your life
                        now!</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <button style="height: initial;" class="btn btn-success btn-lg">Request A Consultation</button>
            </div>
        </div>
-->

    </div>
</div>

<?php get_footer(); ?>

