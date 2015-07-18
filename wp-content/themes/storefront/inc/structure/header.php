<?php
/**
 * Template functions used for the site header.
 *
 * @package storefront
 */

if ( ! function_exists( 'storefront_header_widget_region' ) ) {
	/**
	 * Display header widget region
	 * @since  1.0.0
	 */
	function storefront_header_widget_region() {
		if ( is_active_sidebar( 'header-1' ) ) {
		?>
		<div id="categorias_tienda" class="hidden-xs" style="display:block;">
			<div class="container">
				<div class="row">
		          	<div class="cate_menu">
		              	<div class="img_menu"></div>
		              	<div class="txt_categoria">MENU CATEGORIAS / FILTRO DE PRODUCTOS</div>
		              	<?php
						$class = 'current-menu-items';
						?>
		              	<ul class="site-header-cart menu">
							<li class="<?php echo esc_attr( $class ); ?>">
								<?php storefront_cart_link(); ?>
							</li>
							<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
						</ul>
		          	</div>
				</div>
			</div>
			<div class="header-widget-region header-widget-region-out" role="complementary">
				<div class="col-full menu-ext">
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Navigation', 'storefront' ); ?>">
					<button class="menu-toggle"><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Navigation', 'storefront' ) ) ); ?></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location'	=> 'primary',
								'container_class'	=> 'primary-navigation',
								)
						);

						wp_nav_menu(
							array(
								'theme_location'	=> 'secondary',
								'fallback_cb'		=> 'secondary-navigation',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
       	</div>
		<?php
		}
	}
}

if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Display Site Branding
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
			jetpack_the_site_logo();
		} else { ?>
			<div class="site-branding">
				<a class="logo_valle" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	            	<div class="imagen_valle"></div>
	            </a>
			</div>
		<?php }
	}
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		?>
		<!--<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Navigation', 'storefront' ); ?>">
		<button class="menu-toggle"><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Navigation', 'storefront' ) ) ); ?></button>
			<?php
			// wp_nav_menu(
			// 	array(
			// 		'theme_location'	=> 'primary',
			// 		'container_class'	=> 'primary-navigation',
			// 		)
			// );

			// wp_nav_menu(
			// 	array(
			// 		'theme_location'	=> 'secondary',
			// 		'fallback_cb'		=> 'secondary-navigation',
			// 	)
			// );
			?>
		</nav><!-- #site-navigation -->
		<?php
	}
}

if ( ! function_exists( 'storefront_secondary_navigation' ) ) {
	/**
	 * Display Secondary Navigation
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_secondary_navigation() {
		global $current_user;
      	get_currentuserinfo();
      	if (is_user_logged_in() == 1) {
		?>
		<div class="banner_login hidden-xs" style="display: block;">
            <div id="nombre_lo" class="nombre_log">
                <?php printf(
		__( 'Hola <span>%1$s</span>', 'woocommerce' ) . ' ',
		$current_user->display_name,
		wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
	);
	?>
            </div>
		</div>
		<?php
		}
		if( is_front_page() ) { ?>
		<div class='bajar hidden-xs'></div>
		<!--<div class='entel-logo'></div>-->
		<?php
		}
	}
}

if ( ! function_exists( 'storefront_skip_links' ) ) {
	/**
	 * Skip links
	 * @since  1.4.1
	 * @return void
	 */
	function storefront_skip_links() {
		?>
		<a class="skip-link screen-reader-text" href="#site-navigation"><?php _e( 'Skip to navigation', 'storefront' ); ?></a>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'storefront' ); ?></a>
		<?php
	}
}


