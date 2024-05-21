<?php
	/**
	 * Title: Newsletter section one with contact form
	 * Description: This is newsletter section with contact form
	 * Slug: cozy-block-patterns/newsletter-one
	 * Categories: cozy-block-patterns, newsletter
	 * Dynamic: true
	 */

	$images = array(
		CT_ASSETS_URL . 'images/newsletter_1_1.png',
	);
	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Newsletter', 'cozy-addons' ); ?>"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#d3e1fa"}},"className":"cozy-block-pattern__newsletter-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-block-pattern__newsletter-one has-background" style="background-color:#d3e1fa;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"35%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0"}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);flex-basis:35%"><!-- wp:group {"style":{"color":{"background":"#eaeffb"},"border":{"radius":"20px"},"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"381px","justifyContent":"center"},"cozyHoverEffect":{"boxShadow":{"enabled":true,"color":"#c4d0e7","horizontal":0,"vertical":6,"blur":25,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":0,"rotate":0,"scale":1}}} -->
<div class="wp-block-group has-background" style="border-radius:20px;background-color:#eaeffb;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"cozyCustomFont":"Inter"} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:25px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Subscribe To', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e( 'Our Newsletter!', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#646464;margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[contact-form-7 id="325f512" title="Newsletter with stacked button"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":2946,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2946"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->