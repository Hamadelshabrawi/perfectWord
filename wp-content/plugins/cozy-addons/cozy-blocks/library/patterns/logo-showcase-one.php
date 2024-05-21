<?php
/**
 * Title: Logo Showcase section one with grid animation
 * Description: This is logo showcase section with grid, animation
 * Slug: cozy-block-patterns/logo-showcase-one
 * Categories: cozy-block-patterns, logo-showcase
 */

$images = array(
	CT_ASSETS_URL . 'images/logo_1.png',
	CT_ASSETS_URL . 'images/logo_2.png',
	CT_ASSETS_URL . 'images/logo_3.png',
	CT_ASSETS_URL . 'images/logo_4.png',
	CT_ASSETS_URL . 'images/logo_5.png',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Logo Showcase', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"459px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#3620be"},"elements":{"link":{"color":{"text":"#3620be"}}}}} -->
<h4 class="wp-block-heading has-text-color has-link-color" style="color:#3620be;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Our Partners', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'We Provide Best Solution For Your Company', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"38px","bottom":"38px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:38px;padding-right:var(--wp--preset--spacing--40);padding-bottom:38px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2746,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2746" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"34px","bottom":"35px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:34px;padding-right:var(--wp--preset--spacing--40);padding-bottom:35px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2747,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2747" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"38px","bottom":"43px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:38px;padding-right:var(--wp--preset--spacing--40);padding-bottom:43px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2745,"width":"159px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2745" style="object-fit:cover;width:159px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"38px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:38px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2748,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-2748" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"42px","bottom":"42px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:42px;padding-right:var(--wp--preset--spacing--40);padding-bottom:42px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2781,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-2781" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"border":{"color":"#0000001a","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"38px","bottom":"38px"},"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center has-border-color" style="border-color:#0000001a;border-width:1px;padding-top:38px;padding-right:var(--wp--preset--spacing--40);padding-bottom:38px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2782,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2782" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->