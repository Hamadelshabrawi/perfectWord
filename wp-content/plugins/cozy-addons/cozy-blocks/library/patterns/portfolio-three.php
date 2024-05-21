<?php
	/**
	 * Title: Portfolio section three with images animation
	 * Description: This is portfolio section with images grid and animation
	 * Slug: cozy-block-patterns/portfolio-three
	 * Categories: cozy-block-patterns, portfolio, gallery
	 */

	$images = array(
		CT_ASSETS_URL . 'images/portfolio_1_1.jpg',
		CT_ASSETS_URL . 'images/portfolio_1_2.jpg',
		CT_ASSETS_URL . 'images/portfolio_1_3.jpg',
	);
	?>

<!-- wp:group {"metadata":{"name":"Portfolio"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained", "contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#0d01ae8f"},"elements":{"link":{"color":{"text":"#0d01ae8f"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#0d01ae8f;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Our Portfolio', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"44px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:44px;line-height:1.3"><?php esc_html_e( 'Featured Work', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/portfolio-gallery {"blockClientId":"b3dea873-15cb-4f0f-a4c3-e3b72740b678","gridOptions":{"displayColumn":3,"columnGap":20,"isotopeFilter":false,"masonryEnabled":false}} -->
<div class="cozy-block-portfolio-gallery source-default layout-grid  featured-image__position-before  has-popup-view popup-view-dimension__default  hover-show     icon-view-default has-image-hover-effect " id="cozyBlock_b3dea873_15cb_4f0f_a4c3_e3b72740b678"><div class="cozy-layout-wrapper cozy-layout-grid "><!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2106,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2107,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2107"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2108,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2108"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2109,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2109"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2106,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:image {"id":2110,"style":{"color":{}},"className":"cozy-portfolio-two__cover"} -->
<figure class="wp-block-image cozy-portfolio-two__cover"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2110"/></figure>
<!-- /wp:image --></div>
<!-- /wp:cozy-block/grid --></div></div>
<!-- /wp:cozy-block/portfolio-gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->