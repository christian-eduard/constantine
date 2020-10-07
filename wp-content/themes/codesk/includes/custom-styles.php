<?php
/* Save custom theme styles */
if ( ! function_exists( 'codesk_custom_styles_save' ) ) :
function codesk_custom_styles_save() {

	$main_font = false;
	$main_font_enabled = ( codesk_get_option('main_font_source', 0) == 0 ) ? false : true;
	if ( $main_font_enabled ) {
		$font_main = codesk_get_option('main_font', '');
		if(isset($font_main['font-family']) && $font_main['font-family']){
			$main_font = $font_main['font-family'];
		}
	}

	$secondary_font = false;
	$secondary_font_enabled = ( codesk_get_option('secondary_font_source', 0) == 0 ) ? false : true;
	if ( $secondary_font_enabled ) {
		$font_second = codesk_get_option('secondary_font', '');
		if(isset($font_second['font-family']) && $font_second['font-family']){
			$secondary_font = $font_second['font-family'];
		}
	}

	ob_start();
?>


/* Typography */
<?php if ( $main_font_enabled && isset($main_font) && $main_font ) : ?>
body, .post-type-archive-tribe_events table.tribe-events-calendar tbody td .tribe-events-month-event-title,
.gva-countdown .countdown-times > div b, .tooltip, .popover
{
	font-family:<?php echo esc_attr( $main_font ); ?>,sans-serif;
}
<?php endif; ?>

<?php if ( $secondary_font_enabled && isset($secondary_font) && $secondary_font ) : ?>
h1, h2, h3, h4, h5, h6,.h1, .h2, .h3, .h4, .h5, .h6
{
	font-family:<?php echo esc_attr( $secondary_font ); ?>,sans-serif;
}
<?php endif; ?>

/* ----- Main Color ----- */
<?php if($style = codesk_get_option('main_color', '')){ ?>
	body{
		color:<?php echo esc_attr($style) ?>;
	}
<?php } ?>

/* ----- Background body ----- */
<?php 
	$main_background = codesk_get_option('main_background_image', '');
	if(isset($main_background['url']) && $main_background['url']){
?>
body{
	<?php if ( strlen( $main_background['url'] ) > 0 ) : ?>
	background-image:url("<?php echo esc_url( $main_background['url'] ); ?>");
	<?php if ( codesk_get_option('main_background_image_type', '') == 'fixed' ) : ?>
	background-attachment:fixed;
	background-size:cover;
	<?php else : ?>
	background-repeat:repeat;
	background-position:0 0;
	<?php endif; endif; ?>
	background-color:<?php echo esc_attr( codesk_get_option('main_background_color', '') ); ?>;
}
<?php } ?>

/* ----- Main content ----- */
<?php if(codesk_get_option('content_background_color', '')){ ?>
div.page {
	background: <?php echo esc_attr( codesk_get_option('content_background_color', '') ); ?>!important;
}
<?php } ?>

<?php if(codesk_get_option('content_font_color', '')){ ?>
div.page {
	color: <?php echo esc_attr( codesk_get_option('content_font_color', '') ); ?>;
}
<?php } ?>

<?php if(codesk_get_option('content_font_color_link', '')){ ?>
div.page a{
	color: <?php echo esc_attr( codesk_get_option('content_font_color_link', '') ); ?>;
}
<?php } ?>

<?php if(codesk_get_option('content_font_color_link_hover', '')){ ?>
div.page a:hover, div.page a:active, div.page a:focus {
	background: <?php echo esc_attr( codesk_get_option('content_font_color_link_hover', '') ); ?>!important;
}
<?php } ?>

/* ----- Footer content ----- */
<?php if(codesk_get_option('footer_background_color', '')){ ?>
#wp-footer {
	background: <?php echo esc_attr( codesk_get_option('footer_background_color', '') ); ?>!important;
}
<?php } ?>

<?php if(codesk_get_option('footer_font_color', '')){ ?>
#wp-footer {
	color: <?php echo esc_attr( codesk_get_option('footer_font_color', '') ); ?>;
}
<?php } ?>

<?php if(codesk_get_option('footer_font_color_link', '')){ ?>
#wp-footer a{
	color: <?php echo esc_attr( codesk_get_option('footer_font_color_link', '') ); ?>;
}
<?php } ?>

<?php if(codesk_get_option('footer_font_color_link_hover', '')){ ?>
#wp-footer a:hover, #wp-footer a:active, #wp-footer a:focus {
	background: <?php echo esc_attr( codesk_get_option('footer_font_color_link_hover', '') ); ?>!important;
}
<?php } ?>

/* ----- Breacrumb Style ----- */

<?php
	$styles = ob_get_clean();
	
    $styles = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $styles );
	
	$styles = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '   ', '    ' ), '', $styles );
		
	update_option( 'codesk_theme_custom_styles', $styles, true );
}
endif;

add_action( 'redux/options/codesk_theme_options/saved', 'codesk_custom_styles_save' );


/* Make sure custom theme styles are saved */
function codesk_custom_styles_install() {
	if ( ! get_option( 'codesk_theme_custom_styles' ) && get_option( 'codesk_theme_options' ) ) {
		codesk_custom_styles_save();
	}
}

add_action( 'redux/options/codesk_theme_options/register', 'codesk_custom_styles_install' );
