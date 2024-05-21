<?php
/**
 * Title: Woocommerce section three with grid
 * Description: This is woocommerce section with grid
 * Slug: cozy-block-patterns/woocommerce-three
 * Categories: cozy-block-patterns, woocommerce
 * Dynamic: true
 */

?>


<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|70"}},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"layout":{"type":"constrained","contentSize":"294px"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#090b10;margin-top:0;margin-bottom:var(--wp--preset--spacing--70);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#414141"},"elements":{"link":{"color":{"text":"#414141"}}},"typography":{"textTransform":"uppercase","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"fontSize":"xx-small","cozyCustomFont":"Public Sans"} -->
<p class="has-text-align-center has-text-color has-link-color has-xx-small-font-size" style="color:#414141;font-style:normal;font-weight:500;line-height:1.3;text-transform:uppercase"><?php esc_html_e( '2023 MAKEUP COLLECTION', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"36px","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#262626"},"elements":{"link":{"color":{"text":"#262626"}}}},"cozyCustomFont":"DM Serif Display","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#262626;font-size:36px;font-style:normal;font-weight:400;line-height:1.3"><?php esc_html_e( 'Featured Products', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"0","bottom":"0"}},"border":{"top":{"color":"#f49805","width":"6px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#f49805;border-top-width:6px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/product-carousel {"blockClientId":"330a0e1f-862a-4502-8789-13c89c431ac3","namespace":"cozy-block/product-carousel","template":"two","buttonHoverColor":{"background":"#f49805","text":"#fffffe"},"saleBadge":{"enabled":false,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":4,"columnGap":19}} -->
<div class="cozy-block-product-carousel layout-grid hover-show   scale-featured-image " id="cozyBlock_330a0e1f_862a_4502_8789_13c89c431ac3"><!-- wp:query {"queryId":1,"query":{"perPage":"8","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
<div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"position-relative overflow-hidden","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group position-relative overflow-hidden"><!-- wp:post-featured-image {"height":"354px"} /-->

<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"left":"0"}}},"className":"cozy-template-two"} -->
<div class="wp-block-columns cozy-template-two" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:read-more {"linkTarget":"_blank","style":{"color":{"background":"#02172A","text":"#fffffe"},"spacing":{"padding":{"top":"10px","bottom":"10px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:woocommerce/product-button {"width":100,"isDescendentOfQueryLoop":true,"style":{"color":{"background":"#02172A","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"border":{"radius":"0px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

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
<!-- /wp:group --></div>
<!-- /wp:group -->