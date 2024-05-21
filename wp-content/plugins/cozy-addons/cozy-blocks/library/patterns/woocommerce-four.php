<?php
/**
 * Title: Woocommerce section four with carousel
 * Description: This is woocommerce section with carousel
 * Slug: cozy-block-patterns/woocommerce-four
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 * Dynamic: true
 */

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/product-carousel {"blockClientId":"b195c179-130b-4c5c-979e-4eb4d7ad1bb2","namespace":"cozy-block/product-carousel","layout":"carousel","saleBadge":{"enabled":false,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":2,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#0d5fff","color":"#0d5fff","activeColorHover":"#f49805","colorHover":"#f49805","verticalPosition":-25},"navigation":{"enabled":false,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"4","spaceBetween":30,"speed":1000}} -->
<div class="cozy-block-product-carousel layout-carousel hover-show    " id="cozyBlock_b195c179_130b_4c5c_979e_4eb4d7ad1bb2"><!-- wp:query {"queryId":1,"query":{"perPage":"5","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
<div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"fontSize":"20px"},"spacing":{"blockGap":"0"}},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
<!-- wp:post-featured-image {"height":"320px"} /-->

<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"linkTarget":"_blank","style":{"typography":{"lineHeight":"1.3"}},"__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","textDecoration":"underline"}},"fontSize":"xx-small"} -->
<p class="has-xx-small-font-size" style="text-decoration:underline;text-transform:uppercase"><a href="#"><?php esc_html_e( 'View Products', 'cozy-addons' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><div class="swiper-pagination cozy-pagination"></div></div>
<!-- /wp:cozy-block/product-carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->