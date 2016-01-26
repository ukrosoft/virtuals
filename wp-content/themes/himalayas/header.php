<?php
/**
 * Theme Header Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php	do_action( 'himalayas_before' ); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'himalayas_before_header' ); ?>
	<header id="masthead" class="site-header clearfix" role="banner">
		<?php
			$himalayas_header_class = '';
			if( get_theme_mod( 'himalayas_sticky_on_off', 0 ) == 1 ) {
				$himalayas_header_class .= 'non-stick';
			}
			else {
				$himalayas_header_class .= 'stick';
			}
			if( get_theme_mod( 'himalayas_slide_on_off', 0 ) == 1 && is_front_page() && get_theme_mod( 'himalayas_trans_off', 0 ) != 1 ) {
				$himalayas_header_class .= ' transparent';
			}
			else {
				$himalayas_header_class .= ' transparent';
			}
			if(  get_theme_mod( 'himalayas_header_logo_placement', 'header_text_only' ) == 'show_both' ) {
				$himalayas_header_class .= ' show-both';
			}
		?>
		<div class="header-wrapper clearfix <?php echo $himalayas_header_class; ?>">
			<div class="tg-container">

				<?php if( ( get_theme_mod( 'himalayas_header_logo_placement', 'header_text_only' ) == 'show_both' || get_theme_mod( 'himalayas_header_logo_placement', 'header_text_only' ) == 'header_logo_only' ) && get_theme_mod( 'himalayas_logo', '' ) != '') {	?>

					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'himalayas_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					</div> <!-- logo-end -->
				<?php	}

				if(get_theme_mod( 'himalayas_header_logo_placement', 'header_text_only' ) == 'show_both' || get_theme_mod( 'himalayas_header_logo_placement', 'header_text_only' ) == 'header_text_only' ) { ?>

					<div id="header-text">
						<h1 id="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
						<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2><!-- #site-description -->
					</div><!-- #header-text -->
				<?php } ?>

				<div class="menu-search-wrapper">

					<div class="home-search">

						<div class="search-icon">
							<i class="fa fa-search"> </i>
						</div>

						<div class="search-box">
							<div class="close"> &times; </div>
							<?php get_search_form(); ?>
						</div>
					</div> <!-- home-search-end -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h4 class="menu-toggle hide"></h4>

<!--                        <div class="menu-primary-container" style="display: block;">-->
<!--                            <ul id="menu-header" class="menu">-->
<!--                                <li id="menu-item-891"-->
<!--                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891"><a-->
<!--                                        href="/explain">Explain</a></li>-->
<!--                                <li id="menu-item-892"-->
<!--                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892"><a-->
<!--                                        href="/services">Services</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->

                        <div class="menu-primary-container menu-inline-perssis">
                            <div class="dropdown menu-header-dropdown">
                                <button class="btn btn-menu-header dropdown-toggle dropdown-hover" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    EXPLAIN
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/why">Why</a></li>
                                    <li><a href="/what">What</a></li>
                                    <li><a href="/how">How</a></li>
                                </ul>
                            </div>
                            <div class="dropdown menu-header-dropdown">
                                <button class="btn btn-menu-header dropdown-toggle dropdown-hover" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    SERVICES
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/virtual-assistants">virtual assistants</a></li>
                                    <li><a href="/virtual-business-managers">Virtual business managers</a></li>
                                </ul>
                            </div>
                            <div  class="menu-header-dropdown menu-item">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a class="btn" href="/plans">PRICING PLANS</a>
                                    </li>
                                </ul>
                            </div>
<!--
                            <div  class="menu-header-dropdown menu-item">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a class="btn" href="/about-us">ABOUT US</a>
                                    </li>
                                </ul>
                            </div>
                            <div  class="menu-header-dropdown menu-item">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a class="btn" href="/blog">BLOG</a>
                                    </li>
                                </ul>
                            </div>
-->
                            <div  class="menu-header-dropdown menu-item">
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a class="btn" href="/contact">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
<!--						--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary-container' ) ); ?>
					</nav> <!-- nav-end -->
				</div> <!-- Menu-search-wrapper end -->
			</div><!-- tg-container -->
		</div><!-- header-wrapepr end -->

		<?php if( get_theme_mod( 'himalayas_slide_on_off' ) == 1 && is_front_page() ) {				himalayas_featured_image_slider();

      } ?>
	</header>
   <?php do_action( 'himalayas_after_header' ); ?>
   <?php do_action( 'himalayas_before_main' ); ?>