<?php
/**
 * Title: Call to Action section six with cover
 * Description: This is call to action section with cover
 * Slug: cozy-block-patterns/cta-six
 * Categories: cozy-block-patterns, call-to-action
 * Dynamic: true
 */

$images = array(
	CT_ASSETS_URL . 'images/cta_6.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3006,"dimRatio":20,"customOverlayColor":"#5132c1","isUserOverlayColor":true,"contentPosition":"center center","metadata":{"name":"Call To Action"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"cozy-block-pattern__cta-six","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover cozy-block-pattern__cta-six" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim" style="background-color:#5132c1"></span><img class="wp-block-cover__image-background wp-image-3006" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"510px","justifyContent":"right"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"}},"className":"is-style-default"} -->
<h2 class="wp-block-heading has-text-align-left is-style-default has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Get more discount Off your order', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php esc_html_e( 'Join our mailing list', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:shortcode -->
[contact-form-7 id="325f512" title="Newsletter with stacked button"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->