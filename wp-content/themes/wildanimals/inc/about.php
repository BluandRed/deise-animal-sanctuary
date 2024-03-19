<?php
/**
 * Theme About Page
 *
 * @package Wildanimals
 * @since 1.0
 */

function wildanimals_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_wildanimals-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'wildanimals-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'wildanimals_theme_page_admin_style' );

/**
 * Add theme page
 */
function wildanimals_menu() {
	add_theme_page( esc_html__( 'Wildanimals', 'wildanimals' ), esc_html__( 'Wildanimals Theme Info', 'wildanimals' ), 'edit_theme_options', 'wildanimals-theme', 'wildanimals_theme_page_display' );
}
add_action( 'admin_menu', 'wildanimals_menu' );

/**
 * Display About page
 */
function wildanimals_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'wildanimals' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://starthemes.net/','wildanimals'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/starlogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Wildanimals!', 'wildanimals' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Wildanimals has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'wildanimals' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Wildanimals Pro Theme', 'wildanimals' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Wildanimals Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'wildanimals' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://starthemes.net/wordpress-themes/wildanimals-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Wildanimals Pro', 'wildanimals' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'wildanimals' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://starthemes.net/wordpress-themes/wildanimals-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'wildanimals' ); ?></a>
						<a target="_blank" href="https://starthemesdemo.net/wildanimals/"><?php esc_html_e( 'View Demo', 'wildanimals' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://starthemes.net/support/' ); ?>"><?php esc_html_e( 'Support', 'wildanimals' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'wildanimals' ); ?></h3>
						<p><?php esc_html_e( 'Loved Wildanimals? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'wildanimals' ); ?></p>
						<a href="https://wordpress.org/support/theme/wildanimals/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'wildanimals' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
