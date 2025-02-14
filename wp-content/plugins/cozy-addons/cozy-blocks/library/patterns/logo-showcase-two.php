<?php
/**
 * Title: Logo Showcase section two with column animation
 * Description: This is logo showcase section with column, animation
 * Slug: cozy-block-patterns/logo-showcase-two
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
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"669px","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Our Partners', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Our Supportive Client’s', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"0"}}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2746,"width":"159px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2746" style="width:159px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2761,"width":"159px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2761" style="width:159px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2762,"width":"159px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2762" style="width:159px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2763,"width":"159px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-2763" style="width:159px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":2788,"width":"159px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( $images[4] ); ?>" alt="" class="wp-image-2788" style="width:159px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->