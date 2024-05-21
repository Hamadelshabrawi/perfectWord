<?php
/**
 * Title: Post Magazine section three with slider grid
 * Description: This is post magazine section with slider and grid
 * Slug: cozy-block-patterns/post-magazine-three
 * Categories: cozy-block-patterns, posts-and-magazine
 * Premium: true
 * Dynamic: true
 */
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Posts and Magazine', 'cozy-addons' ); ?>"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"#fffffe"}},"className":"cozy-block-pattern__post-three","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__post-three has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0","padding":{"top":"0px"}}},"className":"cozy-post-three__slider-post"} -->
<div class="wp-block-column is-vertically-aligned-top cozy-post-three__slider-post" style="padding-top:0px"><!-- wp:cozy-block/post-slider {"blockClientId":"bdee3de9-e111-4221-80ba-8d1004a7bae1","hoverShow":false,"carouselOptions":{"pagination":{"enabled":false,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#01ae8f","color":"#252525","activeColorHover":"#f49805","colorHover":"#f49805","positionVertical":-32},"navigation":{"enabled":true,"iconSize":25,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"color":"#fffffe","colorHover":"#f49805"},"sliderOptions":{"loop":true,"autoplay":{"enabled":false,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":1,"spaceBetween":30,"speed":"1000"}}} -->
<div class="cozy-block-post-slider-wrapper " id="cozyBlock_bdee3de9_e111_4221_80ba_8d1004a7bae1"><!-- wp:query {"queryId":1,"query":{"perPage":"3","postType":"post"},"lock":{"move":"false","remove":"true"},"className":"swiper-container"} -->
<div class="wp-block-query swiper-container"><!-- wp:post-template {"lock":{"move":"false","remove":"true"},"style":{"spacing":{"blockGap":"0"}},"className":"swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"},"cozyCustomFont":"Nuosu SIL"} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"position__relative","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group position__relative" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"500px","align":"full"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"left":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"position__absolute","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group position__absolute" style="padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"textTransform":"uppercase","fontSize":"30px"},"color":{"text":"#fffffe"}}} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"fontSize":"12px","textTransform":"none"},"color":{"text":"#fffffe"},"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap"},"cozyCustomFont":"Alegreya Sans"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;font-size:12px;text-transform:none"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"af2af81f-01e2-499e-ae6b-b42adeebc60d","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z","iconColor":"#fffffe"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_af2af81f_01e2_499e_ae6b_b42adeebc60d"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-picker {"blockClientId":"a5b2bff9-f9d5-4cb9-aec6-82234c994baa","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#fffffe"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_a5b2bff9_f9d5_4cb9_aec6_82234c994baa"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --><div class="swiper-button-prev cozy-block-button-prev"></div><div class="swiper-button-next cozy-block-button-next"></div></div>
<!-- /wp:cozy-block/post-slider --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"cozy-post-three__latest-post"} -->
<div class="wp-block-column is-vertically-aligned-top cozy-post-three__latest-post" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/post-carousel {"blockClientId":"3058ee1e-a57e-4812-90a6-4d64d68fb02b","layout":"grid","gridOptions":{"displayColumn":"2","masonryEnabled":false,"columnGap":10}} -->
<div class="cozy-block-post-grid-wrapper  hover-show" id="cozyBlock_3058ee1e_a57e_4812_90a6_4d64d68fb02b"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"post"},"lock":{"move":false,"remove":true},"className":"cozy-query swiper-container"} -->
<div class="wp-block-query cozy-query swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"},"cozyCustomFont":"Nuosu SIL"} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"className":"position__relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group position__relative" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"244px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"left":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"position__absolute","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group position__absolute" style="padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"color":{"text":"#fffffe"},"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"textTransform":"uppercase","fontSize":"20px"},"color":{"text":"#fffffe"}}} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#fffffe"}}},"typography":{"fontSize":"12px","textTransform":"none"},"color":{"text":"#fffffe"}},"layout":{"type":"flex","flexWrap":"wrap"},"cozyCustomFont":"Alegreya Sans"} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#fffffe;font-size:12px;text-transform:none"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/icon-picker {"blockClientId":"2a73fab9-ce3c-41cc-8397-c808f894c504","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z","iconColor":"#fffffe"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_2a73fab9_ce3c_41cc_8397_c808f894c504"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.5 14.0625C16.3818 14.0625 19.5312 10.9131 19.5312 7.03125C19.5312 3.14941 16.3818 0 12.5 0C8.61816 0 5.46875 3.14941 5.46875 7.03125C5.46875 10.9131 8.61816 14.0625 12.5 14.0625ZM18.75 15.625H16.0596C14.9756 16.123 13.7695 16.4062 12.5 16.4062C11.2305 16.4062 10.0293 16.123 8.94043 15.625H6.25C2.79785 15.625 0 18.4229 0 21.875V22.6562C0 23.9502 1.0498 25 2.34375 25H22.6562C23.9502 25 25 23.9502 25 22.6562V21.875C25 18.4229 22.2021 15.625 18.75 15.625Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-author-name {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:cozy-block/icon-picker {"blockClientId":"3f36af9b-5807-45f9-8b2d-ea8555acf096","iconSize":12,"iconViewBox":{"vx":"0","vy":"0","vw":"25","vh":"25"},"iconPath":"M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z","iconColor":"#fffffe"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_3f36af9b_5807_45f9_8b2d_ea8555acf096"><svg width="12" height="12" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.1094 0C5.41992 0 0 5.41992 0 12.1094C0 18.7988 5.41992 24.2188 12.1094 24.2188C18.7988 24.2188 24.2188 18.7988 24.2188 12.1094C24.2188 5.41992 18.7988 0 12.1094 0ZM14.8975 17.0947L10.5908 13.9648C10.4395 13.8525 10.3516 13.6768 10.3516 13.4912V5.27344C10.3516 4.95117 10.6152 4.6875 10.9375 4.6875H13.2812C13.6035 4.6875 13.8672 4.95117 13.8672 5.27344V11.9971L16.9678 14.2529C17.2314 14.4434 17.2852 14.8096 17.0947 15.0732L15.7178 16.9678C15.5273 17.2266 15.1611 17.2852 14.8975 17.0947Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cozy-block/post-carousel --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->