<?php
/**
 * Title: Post Magazine section seven with grid
 * Description: This is post magazine section with and grid
 * Slug: cozy-block-patterns/post-magazine-seven
 * Categories: cozy-block-patterns, posts-and-magazine
 * Dynamic: true
 */

$images = array(
	CT_ASSETS_URL . 'images/post-magazine_7_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Posts and Magazine', 'cozy-addons' ); ?>"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"},"color":{"background":"#fffffe"}},"className":"cozy-block-pattern__post-seven","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__post-seven has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"style":{"border":{"bottom":{"color":"#d9dddc","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#d9dddc;border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"194px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}},"cozyCustomFont":"PT Serif"} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( 'Animals and Plant', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:media-text {"mediaId":3828,"mediaLink":"<?php echo esc_url( $images[0] ); ?>","mediaType":"image"} -->
<div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-3828 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"38px","lineHeight":"1.3"}},"cozyCustomFont":"Kaisei Opti"} -->
<h2 class="wp-block-heading" style="font-size:38px;line-height:1.3"><?php esc_html_e( 'Sustainable Travel:Exploring the World Responsibly', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}}} -->
<p class="has-text-color has-link-color" style="color:#090b10;font-size:16px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"cozyCustomFont":"Inter"} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);font-size:18px;font-style:normal;font-weight:500;text-decoration:none"><!-- wp:button {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe","background":"#f49805"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#090b10","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;color:#fffffe;background-color:#f49805;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'Read More', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:cozy-block/post-carousel {"blockClientId":"1f6d3a69-da96-4d0d-a863-b933ade36669","layout":"grid","gridOptions":{"displayColumn":"4","masonryEnabled":false,"columnGap":30}} -->
<div class="cozy-block-post-grid-wrapper  hover-show" id="cozyBlock_1f6d3a69_da96_4d0d_a863_b933ade36669"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
<div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"position__relative","layout":{"type":"constrained"},"cozyCustomFont":"Gothic A1"} -->
<div class="wp-block-group position__relative" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"200px"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#f49805"}}}},"typography":{"textTransform":"uppercase","fontSize":"20px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"text":"#afafaf"},"elements":{"link":{"color":{"text":"#afafaf"}}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small","cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group has-text-color has-link-color has-x-small-font-size" style="color:#afafaf;margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"41e79662-b4e1-4e9f-a0a0-1732bdada862","iconSize":14,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#afafaf"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_41e79662_b4e1_4e9f_a0a0_1732bdada862"><svg width="14" height="14" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#afafaf"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"0","bottom":"3px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/post-carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->