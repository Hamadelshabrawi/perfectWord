<?php
/**
 * Title: Portfolio Section two with image hover
 * Description: This is portfolio section with image hover effect
 * Slug: cozy-block-patterns/portfolio-two
 * Categories: cozy-block-patterns, portfolio, gallery
 */

$images = array(
	CT_ASSETS_URL . 'images/portfolio_2_1.jpg',
	CT_ASSETS_URL . 'images/about-us_6_2.jpg',
);

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Portfolio', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"cozy-block-pattern__portfolio-two","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__portfolio-two has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#0d01ae8f"},"elements":{"link":{"color":{"text":"#0d01ae8f"}}}}} -->
<h4 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#0d01ae8f;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontSize":"44px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:44px;line-height:1.3"><?php esc_html_e( 'Featured Work', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-left" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cozy-block/portfolio-gallery {"blockClientId":"80f9de92-b043-4510-ad2d-58bb1cde38c2","portfolioCat":[7,41,40],"gridOptions":{"displayColumn":2,"columnGap":30,"isotopeFilter":false,"masonryEnabled":false}} -->
<div class="cozy-block-portfolio-gallery source-default layout-grid  featured-image__position-before  has-popup-view popup-view-dimension__default  hover-show     icon-view-default has-image-hover-effect " id="cozyBlock_80f9de92_b043_4510_ad2d_58bb1cde38c2"><div class="cozy-layout-wrapper cozy-layout-grid "><!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":2091,"dimRatio":30,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":440,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"className":"cozy-portfolio-two__cover","layout":{"type":"constrained"},"cozyAnimation":{"type":"slide-right","easingFunction":"ease-in","anchorPlacement":"top-center","duration":700}} -->
<div class="wp-block-cover cozy-portfolio-two__cover" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-2091" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cozy-portfolio-two__content-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-portfolio-two__content-wrapper"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Portfolio One","style":{"elements":{"link":{"color":{"text":"#ffffff"},":hover":{"color":{"text":"#5566ca"}}}}},"textColor":"background"} -->
<h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color"><?php esc_html_e( 'Website Design', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"18px","textDecoration":"none","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"border":{"radius":"100px","color":"#fffffe","width":"1px"},"color":{"background":"#fffffe00"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":"#f49805"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-border-color wp-element-button" style="border-color:#fffffe;border-width:1px;border-radius:100px;background-color:#fffffe00"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:cover {"url":"<?php echo esc_url( $images[1] ); ?>","id":2092,"dimRatio":50,"customOverlayColor":"#090b10","isUserOverlayColor":true,"minHeight":440,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"className":"cozy-portfolio-two__cover","layout":{"type":"constrained"},"cozyAnimation":{"type":"slide-left","easingFunction":"ease-in","anchorPlacement":"top-center","duration":700}} -->
<div class="wp-block-cover cozy-portfolio-two__cover" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:440px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#090b10"></span><img class="wp-block-cover__image-background wp-image-2092" alt="" src="<?php echo esc_url( $images[1] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"cozy-portfolio-two__content-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group cozy-portfolio-two__content-wrapper"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"Portfolio One","style":{"elements":{"link":{"color":{"text":"#ffffff"},":hover":{"color":{"text":"#5566ca"}}}}},"textColor":"background"} -->
<h4 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color"><?php esc_html_e( 'Website Design', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"18px","textDecoration":"none","fontStyle":"normal","fontWeight":"500"}}} -->
<div class="wp-block-buttons has-custom-font-size" style="font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"border":{"radius":"100px","color":"#fffffe","width":"1px"},"color":{"background":"#fffffe00"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":"#f49805"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-border-color wp-element-button" style="border-color:#fffffe;border-width:1px;border-radius:100px;background-color:#fffffe00"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:cozy-block/grid --></div></div>
<!-- /wp:cozy-block/portfolio-gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->