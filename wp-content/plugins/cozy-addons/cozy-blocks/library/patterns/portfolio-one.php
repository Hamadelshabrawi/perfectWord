<?php
/**
 * Title: Portfolio section one with images
 * Description: This is portfolio with image hover effect
 * Slug: cozy-block-patterns/portfolio-one
 * Categories: cozy-block-patterns, portfolio, gallery
 */

$images = array(
	CT_ASSETS_URL . 'images/portfolio_1_1.jpg',
	CT_ASSETS_URL . 'images/portfolio_1_2.jpg',
	CT_ASSETS_URL . 'images/portfolio_1_3.jpg',
);

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Portfolio', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"className":"cozy-block-pattern__portfolio-one","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cozy-block-pattern__portfolio-one has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"color":{"text":"#3620be"},"elements":{"link":{"color":{"text":"#3620be"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#3620be;font-size:14px;font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600"}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600"><?php esc_html_e( 'Our Latest Works', 'cozy-addons' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/portfolio-gallery {"blockClientId":"ca5a0c40-58e1-4899-aa8c-6493bf484868"} -->
<div class="cozy-block-portfolio-gallery source-default layout-grid  featured-image__position-before  has-popup-view popup-view-dimension__default  hover-show     icon-view-default has-image-hover-effect " id="cozyBlock_ca5a0c40_58e1_4899_aa8c_6493bf484868"><div class="cozy-layout-wrapper cozy-layout-grid "><!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"metadata":{"name":""},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"cozy-portfolio-one__wrapper","layout":{"type":"constrained"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":1000}} -->
<div class="wp-block-group cozy-portfolio-one__wrapper"><!-- wp:image {"id":2078,"style":{"color":[]}} -->
<figure class="wp-block-image"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2078"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Illusion', 'cozy-addons' ); ?> &amp; <?php esc_html_e( 'Art', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"b28e0805-0c97-4565-a3a5-d7b5d5299f68","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"20","vh":"10"},"iconPath":"M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z","iconColor":"#3620be"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_b28e0805_0c97_4565_a3a5_d7b5d5299f68"><svg width="20" height="20" viewBox="0 0 20 10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#3620be"><path d="M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"metadata":{"name":""},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"cozy-portfolio-one__wrapper","layout":{"type":"constrained"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":1500}} -->
<div class="wp-block-group cozy-portfolio-one__wrapper"><!-- wp:image {"id":2081,"sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2081"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Illusion', 'cozy-addons' ); ?> &amp; <?php esc_html_e( 'Art', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"dcb922c8-2591-4139-a0f4-fe8d1c84743d","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"20","vh":"10"},"iconPath":"M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z","iconColor":"#3620be"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_dcb922c8_2591_4139_a0f4_fe8d1c84743d"><svg width="20" height="20" viewBox="0 0 20 10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#3620be"><path d="M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"metadata":{"name":""},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"cozy-portfolio-one__wrapper","layout":{"type":"constrained"},"cozyAnimation":{"type":"slide-up","easingFunction":"ease","anchorPlacement":"top-bottom","duration":2000}} -->
<div class="wp-block-group cozy-portfolio-one__wrapper"><!-- wp:image {"id":2082,"sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2082"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h2 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e( 'Illusion', 'cozy-addons' ); ?> &amp; <?php esc_html_e( 'Art', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:cozy-block/icon-picker {"blockClientId":"59f7d2df-fada-42a3-be5f-5dc6d3d0fb47","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"20","vh":"10"},"iconPath":"M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z","iconColor":"#3620be"} -->
<div class="cozy-block-icon-picker default" id="cozyBlock_59f7d2df_fada_42a3_be5f_5dc6d3d0fb47"><svg width="20" height="20" viewBox="0 0 20 10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#3620be"><path d="M15.1109 1.11091C15.5014 0.720385 16.1346 0.720385 16.5251 1.11091L19.7071 4.29289C20.0976 4.68341 20.0976 5.31658 19.7071 5.7071L16.5251 8.88908C16.1346 9.27961 15.5014 9.27961 15.1109 8.88908C14.7204 8.49856 14.7204 7.86539 15.1109 7.47487L16.5858 6H0.5V4H16.5858L15.1109 2.52512C14.7204 2.1346 14.7204 1.50143 15.1109 1.11091Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid --></div></div>
<!-- /wp:cozy-block/portfolio-gallery -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"cozyAnimation":{"type":"fade-up","easingFunction":"ease-in","anchorPlacement":"top-center","duration":1000}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--70);font-size:18px;font-style:normal;font-weight:600;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#3620be"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"100px"}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":""}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:100px;background-color:#3620be;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e( 'View All Work', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->