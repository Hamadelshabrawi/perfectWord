<?php
	/**
	 * Title: About us section eight with columns and list
	 * Description: This is about section with columns and icon list.
	 * Slug: cozy-block-patterns/about-us-eight
	 * Categories: cozy-block-patterns, about-us
	 */

	$images = array(
		CT_ASSETS_URL . 'images/about-us_8_1.jpg',
	);

	?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'About Us', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#f7f6ff"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#f7f6ff;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"16px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);font-size:16px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":1890,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1890" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#3620be"},"elements":{"link":{"color":{"text":"#3620be"}}}}} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#3620be;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'About Us', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","fontSize":"40px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:40px;line-height:1.2"><?php esc_html_e( 'Navigating challenges, delivering results.', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}}} -->
<p class="has-text-color has-link-color" style="color:#646464;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cozy-block/icon-list {"blockClientId":"8d0ea628-ec57-47dc-80f2-ae5a75ddb581","iconColor":"#3620be","iconColorHover":"#f49805","containerStyles":{"width":"","height":"","gap":12,"borderRadius":{"top":5,"right":5,"bottom":5,"left":5},"bgColor":"","bgColorHover":""}} -->
<ul class="cozy-block-icon-list vertical default fill" id="cozyBlock_8d0ea628_ec57_47dc_80f2_ae5a75ddb581"><!-- wp:cozy-block/list-item {"blockClientId":"e2c944bf-4217-4596-b12d-7fc9e295b458","title":"Where Health Meets Happiness."} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_e2c944bf_4217_4596_b12d_7fc9e295b458"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Where Health Meets Happiness.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item -->

<!-- wp:cozy-block/list-item {"blockClientId":"5cf1a0da-a665-4a86-b6d5-845442f553d9","title":"Discover Wellness, Embrace Life."} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_5cf1a0da_a665_4a86_b6d5_845442f553d9"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Discover Wellness, Embrace Life.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item -->

<!-- wp:cozy-block/list-item {"blockClientId":"9f23c686-ad7a-4276-88a0-41e4f37270a3","title":"Transforming Lives Through Better Health."} -->
<div class="list-inline-block"><li class="cozy-block-list-item" id="cozyBlock_9f23c686_ad7a_4276_88a0_41e4f37270a3"><div class="list-icon-wrapper"><svg viewBox="0 0 25 19" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"></path></svg></div><p><?php esc_html_e( 'Transforming Lives Through Better Health.', 'cozy-addons' ); ?></p></li></div>
<!-- /wp:cozy-block/list-item --></ul>
<!-- /wp:cozy-block/icon-list -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"18px","textDecoration":"none","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#3620be"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":true,"transform":{"translateX":0,"translateY":"-2","rotate":0,"scale":1}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:100px;background-color:#3620be;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->