<?php
	/**
	 * Title: Newsletter section two with contact form
	 * Description: This is newsletter section with contact form
	 * Slug: cozy-block-patterns/newsletter-two
	 * Categories: cozy-block-patterns, newsletter
	 * Dynamic: true
	 */

	$images = array(
		CT_ASSETS_URL . 'images/team_1_3.jpg',
		CT_ASSETS_URL . 'images/newsletter_1_2.png',
	);
	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Newsletter', 'cozy-addons' ); ?>"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#fffbf5"}},"className":"cozy-block-pattern__newsletter-two","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-block-pattern__newsletter-two has-background" style="background-color:#fffbf5;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:0;flex-basis:35%"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#c4d0e7","horizontal":0,"vertical":6,"blur":25,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1}}} -->
<div class="wp-block-group" style="border-radius:20px"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Subscribe to Our Newsletter!', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"color":{"background":"#fffffe"},"border":{"color":"#fa980526","width":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:#fa980526;border-width:1px;background-color:#fffffe;margin-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2559,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2559" style="border-radius:50px;object-fit:cover;width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"327px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"color":{"text":"#6a6a6a"},"elements":{"link":{"color":{"text":"#6a6a6a"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#6a6a6a"><?php esc_html_e( '“Vivamus sagittis lacus augue laoreet rutrum faucibus dolor auctor.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#6a6a6a"},"elements":{"link":{"color":{"text":"#6a6a6a"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#6a6a6a"><?php esc_html_e( 'John Doe, Web Developer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
[contact-form-7 id="325f512" title="Newsletter with stacked button"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":2973,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2973"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->