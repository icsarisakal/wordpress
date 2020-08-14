<?php
/**
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */

$translate['wpml-no'] = mfn_opts_get('translate') ? mfn_opts_get('translate-wpml-no', 'No translations available for this page') : __('No translations available for this page', 'betheme');
?>

<?php if (mfn_opts_get('action-bar')): ?>
	<div id="Action_bar">
		<div class="container">
			<div class="column one">

				<ul class="contact_details">
					<?php
						if ($header_slogan = mfn_opts_get('header-slogan')) {
							echo '<li class="slogan">'. wp_kses($header_slogan, mfn_allowed_html('desc')) .'</li>';
						}
						if ($header_phone = mfn_opts_get('header-phone')) {
							echo '<li class="phone"><i class="icon-phone"></i><a href="tel:'. esc_attr(str_replace(' ', '', $header_phone)) .'">'. esc_html($header_phone) .'</a></li>';
						}
						if ($header_phone_2 = mfn_opts_get('header-phone-2')) {
							echo '<li class="phone"><i class="icon-phone"></i><a href="tel:'. esc_attr(str_replace(' ', '', $header_phone_2)) .'">'. esc_html($header_phone_2) .'</a></li>';
						}
						if ($header_email = mfn_opts_get('header-email')) {
							echo '<li class="mail"><i class="icon-mail-line"></i><a href="mailto:'. sanitize_email($header_email) .'">'. esc_html($header_email) .'</a></li>';
						}
					?>
				</ul>

				<?php
					if (has_nav_menu('social-menu')) {
						mfn_wp_social_menu();
					} else {
						get_template_part('includes/include', 'social');
					}
				?>

			</div>
		</div>
	</div>
<?php endif; ?>

<?php
	if (mfn_header_style(true) == 'header-overlay') {

		// overlay menu
		echo '<div id="Overlay">';
			mfn_wp_overlay_menu();
		echo '</div>';

		// button
		echo '<a class="overlay-menu-toggle" href="#">';
			echo '<i class="open icon-menu-fine"></i>';
			echo '<i class="close icon-cancel-fine"></i>';
		echo '</a>';
	}
?>

<!-- .header_placeholder 4sticky  -->
<div class="header_placeholder"></div>

<div id="Top_bar" class="loading">

	<div class="container">
		<div class="column one">

			<div class="top_bar_left clearfix">

				<!-- Logo -->
				<?php get_template_part('includes/include', 'logo'); ?>

				<div class="menu_wrapper">
					<?php
						if ((mfn_header_style(true) != 'header-overlay') && (mfn_opts_get('menu-style') != 'hide')) {

							// main menu
							if (in_array(mfn_header_style(), array( 'header-split', 'header-split header-semi', 'header-below header-split' ))) {
								mfn_wp_split_menu();
							} else {
								mfn_wp_nav_menu();
							}

							// responsive menu button
							$mb_class = '';
							if (mfn_opts_get('header-menu-mobile-sticky')) {
								$mb_class .= ' is-sticky';
							}

							echo '<a class="responsive-menu-toggle '. esc_attr($mb_class) .'" href="#">';
							if ($menu_text = trim(mfn_opts_get('header-menu-text'))) {
								echo '<span>'. wp_kses($menu_text, mfn_allowed_html()) .'</span>';
							} else {
								echo '<i class="icon-menu-fine"></i>';
							}
							echo '</a>';
						}
					?>
				</div>

				<div class="secondary_menu_wrapper">
					<!-- #secondary-menu -->
					<?php mfn_wp_secondary_menu(); ?>
				</div>

				<div class="banner_wrapper">
					<?php echo wp_kses_post(mfn_opts_get('header-banner')); ?>
				</div>

				<div class="search_wrapper">
					<!-- #searchform -->

					<?php get_search_form(true); ?>

				</div>

			</div>

			<?php
				if (! mfn_opts_get('top-bar-right-hide')) {
					get_template_part('includes/header', 'top-bar-right');
				}
			?>

		</div>
	</div>
</div>
