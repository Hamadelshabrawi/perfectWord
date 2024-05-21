<?php
/**
 * Title: Post Magazine section eight with grid
 * Description: This is post magazine section with and grid
 * Slug: cozy-block-patterns/post-magazine-eight
 * Categories: cozy-block-patterns, posts-and-magazine
 * Dynamic: true
 */

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Posts and Magazine', 'cozy-addons' ); ?>"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"},"color":{"background":"#fffffe"}},"className":"cozy-block-pattern__post-eight","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__post-eight has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:group {"style":{"border":{"bottom":{"color":"#d9dddc","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#d9dddc;border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"194px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#01ae8f"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:10px;background-color:#01ae8f;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"20px"},"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"}},"cozyCustomFont":"PT Serif"} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#fffffe;font-size:20px"><?php esc_html_e( 'Post Grid', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/post-carousel {"blockClientId":"f696b40e-8402-49fb-9c40-2b809ad48fcc","layout":"grid","gridOptions":{"displayColumn":"1","masonryEnabled":false,"columnGap":19}} -->
<div class="cozy-block-post-grid-wrapper  hover-show" id="cozyBlock_f696b40e_8402_49fb_9c40_2b809ad48fcc"><!-- wp:query {"queryId":1,"query":{"perPage":"3","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
<div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"style":{"spacing":{"blockGap":"0"}},"className":"cozy-layout-grid swiper-wrapper"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"","height":"400px"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"},":hover":{"color":{"text":"#01ae8f"}}}},"typography":{"textTransform":"uppercase","fontSize":"20px"}}} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small","cozyCustomFont":"Public Sans"} -->
<div class="wp-block-group has-text-color has-link-color has-x-small-font-size" style="color:#6a6a6a;font-style:normal;font-weight:600;text-transform:capitalize"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-picker {"blockClientId":"7ec37d82-2d97-41e8-a132-b7fbe0a9a06a","view":"stacked","iconSize":8,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":5,"right":5,"bottom":5,"left":5},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#a09eab","bgColorHover":""}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_7ec37d82_2d97_41e8_a132_b7fbe0a9a06a"><svg width="8" height="8" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group -->

<!-- wp:post-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1px"><!-- wp:cozy-block/icon-picker {"blockClientId":"720113d5-3a87-40ef-a1b9-9a359173c2a8","iconSize":18,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#a09eab"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_720113d5_3a87_40ef_a1b9_9a359173c2a8"><svg width="18" height="18" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#a09eab"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group -->

<!-- wp:post-date {"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"bottom":"0px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":30,"style":{"elements":{"link":{"color":{"text":"#6a6a6a"},":hover":{"color":{"text":"#01ae8f"}}}},"color":{"text":"#6a6a6a"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"border":{"top":{"color":"#d9dddc","width":"1px"}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#d9dddc;border-top-width:1px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/post-carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->