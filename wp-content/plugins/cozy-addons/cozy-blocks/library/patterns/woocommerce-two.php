<?php
/**
 * Title: Woocommerce section two with grid animation
 * Description: This is woocommerce section with grid animation
 * Slug: cozy-block-patterns/woocommerce-two
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 * Dynamic: true
 */

$images = array(
	CT_ASSETS_URL . 'images/woocommerce_2_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","cozyAnimation":{"type":"fade-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cozy-block/product-carousel {"blockClientId":"f6f927b0-bf5e-4919-94f7-d74bf794a94f","namespace":"cozy-block/product-carousel","saleBadge":{"enabled":false,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":2,"columnGap":19}} -->
<div class="cozy-block-product-carousel layout-grid hover-show    " id="cozyBlock_f6f927b0_bf5e_4919_94f7_d74bf794a94f"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
<div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":"0"}},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
<!-- wp:post-featured-image {"height":"18rem"} /-->

<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:post-terms {"term":"product_cat","style":{"typography":{"fontSize":"14px","textTransform":"uppercase"},"color":{"text":"#6a6a6a"},"elements":{"link":{"color":{"text":"#6a6a6a"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"x-small","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:paragraph {"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#090b10;font-style:normal;font-weight:600"><?php esc_html_e( 'USD', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/product-carousel --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3109,"dimRatio":0,"customOverlayColor":"#e9e9ea","isUserOverlayColor":true,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#e9e9ea"></span><img class="wp-block-cover__image-background wp-image-3109" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"},"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"351px","justifyContent":"left"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"24px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"10px","bottom":"10px"},"blockGap":"0","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}},"border":{"top":{"color":"#090b10","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#090b10;border-top-width:1px;margin-top:10px;margin-bottom:10px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}}} -->
<p style="font-size:14px;text-transform:uppercase"><?php esc_html_e( 'Grab the best offer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:64px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'Modern Collection', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#6a6a6a"><?php esc_html_e( 'Lorem ipsum is simply dummy text of the print press typesetting industry.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Shop Collection', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"150px"} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->