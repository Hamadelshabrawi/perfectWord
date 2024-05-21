<?php
	/**
	 * Title: About us section two with media text
	 * Description: This is about us section with media and text
	 * Slug: cozy-block-patterns/about-us-two
	 * Categories: cozy-block-patterns, about-us
	 */

	$images = array(
		CT_ASSETS_URL . 'images/about-us_2_1.jpg',
		CT_ASSETS_URL . 'images/about-us_2_2.jpg',
	);
	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#0d5fff;margin-bottom:var(--wp--preset--spacing--30);font-size:18px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'Our Mission', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.3","fontSize":"44px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;line-height:1.3"><?php esc_html_e( 'Navigating challenges, delivering results.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);line-height:1.8"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"typography":{"textDecoration":"none","fontSize":"18px","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe","background":"#0d5fff"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#f49805","horizontal":10,"vertical":10,"blur":5,"spread":0,"position":""},"transformEnabled":true,"transform":{"translateX":0,"translateY":"-2","rotate":0,"scale":1}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"bottom-center","duration":600}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column"><!-- wp:image {"id":1983,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1983" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"var:preset|spacing|70","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column"><!-- wp:image {"id":1844,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-1844" style="border-radius:10px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#0d5fff;margin-bottom:var(--wp--preset--spacing--30);font-size:18px;font-style:normal;font-weight:500;line-height:1.3">Our Vision</h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.3","fontSize":"44px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;line-height:1.3"><?php esc_html_e( 'Functionality Redefined in Every Theme.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);line-height:1.8"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"typography":{"textDecoration":"none","fontSize":"18px","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe","background":"#0d5fff"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#f49805","horizontal":10,"vertical":10,"blur":5,"spread":0,"position":""},"transformEnabled":true,"transform":{"translateX":0,"translateY":"-2","rotate":0,"scale":1}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"bottom-center","duration":600}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->