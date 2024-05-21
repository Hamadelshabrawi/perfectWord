<?php
/**
 * Title: Woocommerce section one with slider
 * Description: This is woocommerce section with slider
 * Slug: cozy-block-patterns/woocommerce-one
 * Categories: cozy-block-patterns, woocommerce
 * Premium: true
 */

$images = array(
	CT_ASSETS_URL . 'images/woocommerce_1.jpg',
	CT_ASSETS_URL . 'images/woocommerce_1_1.png',
);
?>
<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'WooCommerce', 'cozy-addons' ); ?>"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"30081c4c-d619-4258-861d-16f090dfac97","pagination":{"width":12,"height":12,"borderRadius":10,"activeWidth":12,"activeBorderRadius":12,"bottom":20,"activeColor":"#0d5fff","color":"#fff","activeColorHover":"#f49805","colorHover":"#f49805","dynamicBullets":false},"hasNavigation":false,"sliderOptions":{"loop":false,"speed":1500,"slidesPerView":1,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"effect":"none"}} -->
<div class="wp-block-cozy-block-slider"><div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_30081c4c_d619_4258_861d_16f090dfac97"><div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"3e9de80c-efc9-4624-98f9-563982b047fa"} -->
<div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3093,"dimRatio":0,"isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3093" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"492px","justifyContent":"right"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3095,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3095"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:22px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Watch', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'SERIES 8', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'A healthy leap ahead', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}}} -->
<p class="has-text-align-center" style="font-size:24px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'From $499', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Pre-Order Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'More Details', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"f932a277-23d8-480a-abd8-67554224ba99","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_f932a277_23d8_480a_abd8_67554224ba99"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'Watch Review', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"c0b3b4f0-92f5-4e67-a3c9-059d7c038f69","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"16","vh":"24"},"iconPath":"M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z","boxStyles":{"padding":{"top":5,"right":4,"bottom":5,"left":7},"borderType":"solid","borderWidth":1,"borderColor":"#0d5fff","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_c0b3b4f0_92f5_4e67_a3c9_059d7c038f69"><svg width="8" height="8" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:cozy-block/slide -->

<!-- wp:cozy-block/slide {"blockClientId":"4efaf664-827d-4493-83f1-c3e58f9e136d"} -->
<div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3093,"dimRatio":0,"isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3093" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"492px","justifyContent":"right"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3095,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3095"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:22px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Watch', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'SERIES 8', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'A healthy leap ahead', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}}} -->
<p class="has-text-align-center" style="font-size:24px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'From $499', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Pre-Order Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'More Details', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"e13ca759-838c-4a93-a7d3-ac103e63f084","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_e13ca759_838c_4a93_a7d3_ac103e63f084"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'Watch Review', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"f7575124-d45e-435d-928a-1fe998e04a9c","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"16","vh":"24"},"iconPath":"M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z","boxStyles":{"padding":{"top":5,"right":4,"bottom":5,"left":7},"borderType":"solid","borderWidth":1,"borderColor":"#0d5fff","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_f7575124_d45e_435d_928a_1fe998e04a9c"><svg width="8" height="8" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:cozy-block/slide -->

<!-- wp:cozy-block/slide {"blockClientId":"8ae62a50-7037-4fb5-b19c-b21f215fd796"} -->
<div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":3093,"dimRatio":0,"isUserOverlayColor":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3093" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"492px","justifyContent":"right"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":3095,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-3095"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:22px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Watch', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'SERIES 8', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","placeholder":"Slide Title","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#fffffe;font-size:48px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e( 'A healthy leap ahead', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"}}} -->
<p class="has-text-align-center" style="font-size:24px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e( 'From $499', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);font-size:16px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#0d5fff","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#0d5fff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Pre-Order Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'More Details', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"6e61de7f-4615-4510-8481-5dbcab0fa32d","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_6e61de7f_4615_4510_8481_5dbcab0fa32d"><svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M15.405 12C15.405 12.22 15.325 12.42 15.165 12.58L9.96501 17.58C9.80501 17.72 9.605 17.8 9.405 17.8C9.185 17.8 8.985 17.72 8.825 17.56C8.525 17.24 8.52499 16.74 8.84499 16.42L13.445 12L8.84499 7.57999C8.52499 7.27999 8.525 6.76 8.825 6.44C9.125 6.12 9.64501 6.12 9.96501 6.42L15.165 11.42C15.325 11.58 15.405 11.78 15.405 12Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}},"fontSize":"x-small"} -->
<p class="has-text-color has-link-color has-x-small-font-size" style="color:#0d5fff;font-style:normal;font-weight:500"><?php esc_html_e( 'Watch Review', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"5px","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:5px;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"dd3e05e6-f105-4bb7-930e-5fa3644b098b","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"16","vh":"24"},"iconPath":"M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z","boxStyles":{"padding":{"top":5,"right":4,"bottom":5,"left":7},"borderType":"solid","borderWidth":1,"borderColor":"#0d5fff","borderColorHover":"","borderRadius":50,"bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_dd3e05e6_f105_4bb7_930e_5fa3644b098b"><svg width="8" height="8" viewBox="0 0 16 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#5566ca"><path d="M7.42244e-07 0.905071L15.5 12.1316L0 23.9991L7.42244e-07 0.905071Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:cozy-block/slide --></div><div class="swiper-pagination cozy-pagination"></div></div></div>
<!-- /wp:cozy-block/slider --></div>
<!-- /wp:group -->