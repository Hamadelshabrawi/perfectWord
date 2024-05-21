<?php
/**
 * Title: Features section one with images and icon
 * Description: This is features section with images and icon
 * Slug: cozy-block-patterns/features-one
 * Categories: cozy-block-patterns, features
 * Premium: true
 */

$images = array(
	CT_ASSETS_URL . 'images/features_1_1.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Features', 'cozy-addons' ); ?>"},"style":{"color":{"background":"#fffffe"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"782px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1.3","fontSize":"14px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"color":{"text":"#0d5fff"},"elements":{"link":{"color":{"text":"#0d5fff"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#0d5fff;font-size:14px;font-style:normal;font-weight:600;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Features', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"44px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:44px;line-height:1.3"><?php esc_html_e( 'Latest Features', 'cozy-addons' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="line-height:1.5"><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"0"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}},"cozyAnimation":{"type":"fade-up-right","easingFunction":"ease","anchorPlacement":"top-bottom","duration":900}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"id":1990,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1990"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"elements":{"link":{"color":{"text":"#646464"}}},"color":{"text":"#646464"},"typography":{"fontSize":"16px"},"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"cozyAnimation":{"type":"fade-up-left","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<div class="wp-block-column is-vertically-aligned-center has-text-color has-link-color" style="color:#646464;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;flex-basis:50%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"36978580-6148-4bf1-9b0c-fe8fead926ae","view":"stacked","iconSize":30,"iconViewBox":{"vx":"0","vy":"0","vw":"24","vh":"24"},"iconPath":"M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":14,"right":14,"bottom":14,"left":14},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_36978580_6148_4bf1_9b0c_fe8fead926ae"><svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M12.0051 2.79999C8.7251 2.79999 6.0051 5.52 6.0051 8.86C6.0051 10.9 6.8051 12.54 8.4051 13.64V15.6C8.4051 15.82 8.5451 16.04 8.7051 16.18C8.8451 16.32 9.06511 16.4 9.26511 16.4C9.28511 16.4 9.32509 16.4 9.34509 16.4L14.8451 15.96C15.2651 15.92 15.6251 15.58 15.6251 15.16V13.66C17.0251 12.64 18.0251 10.88 18.0251 8.86C18.0051 5.52 15.2851 2.79999 12.0051 2.79999ZM14.4051 12.5C14.1451 12.64 14.0051 12.92 14.0051 13.2V14.42L10.0051 14.74V13.2C10.0051 12.92 9.88509 12.66 9.64509 12.5C8.26509 11.7 7.62509 10.5 7.62509 8.86C7.62509 6.4 9.6051 4.39999 12.0051 4.39999C14.4251 4.39999 16.4051 6.4 16.4051 8.86C16.3851 10.46 15.6651 11.82 14.4051 12.5ZM15.5251 17.66C15.5651 18.1 15.2251 18.48 14.7851 18.52L9.32509 18.92C9.30509 18.92 9.28511 18.92 9.26511 18.92C8.84511 18.92 8.50511 18.6 8.46511 18.18C8.42511 17.74 8.7651 17.36 9.2051 17.32L14.6651 16.92C15.1251 16.88 15.5051 17.22 15.5251 17.66ZM13.7851 20.18C13.8251 20.62 13.4851 21 13.0451 21.04L11.0651 21.2C11.0451 21.2 11.0251 21.2 11.0051 21.2C10.5851 21.2 10.2451 20.88 10.2051 20.46C10.1651 20.02 10.5051 19.64 10.9451 19.6L12.9251 19.44C13.3851 19.42 13.7651 19.74 13.7851 20.18ZM15.1851 8.86C15.1451 9.22 14.8451 9.49999 14.4851 9.49999C14.4651 9.49999 14.4451 9.49999 14.4251 9.49999C14.0451 9.45999 13.7651 9.11998 13.8051 8.73998C13.9251 7.59998 12.9251 7.17998 12.8051 7.13998C12.4451 6.99998 12.2651 6.59998 12.3851 6.23998C12.5051 5.87998 12.9051 5.68001 13.2651 5.82001C14.0051 6.06001 15.3651 7.04 15.1851 8.86Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Identity Design', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"5bec313c-ebf8-4570-8e18-c594f5b8d0b2","view":"stacked","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"29","vh":"26"},"iconPath":"M3.24512 25.2506C2.55762 25.2506 1.96908 25.0058 1.47949 24.5162C0.989909 24.0267 0.745117 23.4381 0.745117 22.7506V7.75061C0.745117 7.06311 0.989909 6.47457 1.47949 5.98499C1.96908 5.4954 2.55762 5.25061 3.24512 5.25061H7.18262L9.49512 2.75061H16.9951V5.25061H10.5889L8.30762 7.75061H3.24512V22.7506H23.2451V11.5006H25.7451V22.7506C25.7451 23.4381 25.5003 24.0267 25.0107 24.5162C24.5212 25.0058 23.9326 25.2506 23.2451 25.2506H3.24512ZM23.2451 7.75061V5.25061H20.7451V2.75061H23.2451V0.25061H25.7451V2.75061H28.2451V5.25061H25.7451V7.75061H23.2451ZM13.2451 20.8756C14.8076 20.8756 16.1357 20.3287 17.2295 19.235C18.3232 18.1412 18.8701 16.8131 18.8701 15.2506C18.8701 13.6881 18.3232 12.36 17.2295 11.2662C16.1357 10.1725 14.8076 9.62561 13.2451 9.62561C11.6826 9.62561 10.3545 10.1725 9.26074 11.2662C8.16699 12.36 7.62012 13.6881 7.62012 15.2506C7.62012 16.8131 8.16699 18.1412 9.26074 19.235C10.3545 20.3287 11.6826 20.8756 13.2451 20.8756ZM13.2451 18.3756C12.3701 18.3756 11.6305 18.0735 11.0264 17.4694C10.4222 16.8652 10.1201 16.1256 10.1201 15.2506C10.1201 14.3756 10.4222 13.636 11.0264 13.0319C11.6305 12.4277 12.3701 12.1256 13.2451 12.1256C14.1201 12.1256 14.8597 12.4277 15.4639 13.0319C16.068 13.636 16.3701 14.3756 16.3701 15.2506C16.3701 16.1256 16.068 16.8652 15.4639 17.4694C14.8597 18.0735 14.1201 18.3756 13.2451 18.3756Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":19,"right":19,"bottom":19,"left":19},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_5bec313c_ebf8_4570_8e18_c594f5b8d0b2"><svg width="20" height="20" viewBox="0 0 29 26" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M3.24512 25.2506C2.55762 25.2506 1.96908 25.0058 1.47949 24.5162C0.989909 24.0267 0.745117 23.4381 0.745117 22.7506V7.75061C0.745117 7.06311 0.989909 6.47457 1.47949 5.98499C1.96908 5.4954 2.55762 5.25061 3.24512 5.25061H7.18262L9.49512 2.75061H16.9951V5.25061H10.5889L8.30762 7.75061H3.24512V22.7506H23.2451V11.5006H25.7451V22.7506C25.7451 23.4381 25.5003 24.0267 25.0107 24.5162C24.5212 25.0058 23.9326 25.2506 23.2451 25.2506H3.24512ZM23.2451 7.75061V5.25061H20.7451V2.75061H23.2451V0.25061H25.7451V2.75061H28.2451V5.25061H25.7451V7.75061H23.2451ZM13.2451 20.8756C14.8076 20.8756 16.1357 20.3287 17.2295 19.235C18.3232 18.1412 18.8701 16.8131 18.8701 15.2506C18.8701 13.6881 18.3232 12.36 17.2295 11.2662C16.1357 10.1725 14.8076 9.62561 13.2451 9.62561C11.6826 9.62561 10.3545 10.1725 9.26074 11.2662C8.16699 12.36 7.62012 13.6881 7.62012 15.2506C7.62012 16.8131 8.16699 18.1412 9.26074 19.235C10.3545 20.3287 11.6826 20.8756 13.2451 20.8756ZM13.2451 18.3756C12.3701 18.3756 11.6305 18.0735 11.0264 17.4694C10.4222 16.8652 10.1201 16.1256 10.1201 15.2506C10.1201 14.3756 10.4222 13.636 11.0264 13.0319C11.6305 12.4277 12.3701 12.1256 13.2451 12.1256C14.1201 12.1256 14.8597 12.4277 15.4639 13.0319C16.068 13.636 16.3701 14.3756 16.3701 15.2506C16.3701 16.1256 16.068 16.8652 15.4639 17.4694C14.8597 18.0735 14.1201 18.3756 13.2451 18.3756Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Creative Images', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"1811b3a6-00cf-4e4e-ad24-3d617b483da5","view":"stacked","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"23","vh":"24"},"iconPath":"M2.75 23.25C2.0625 23.25 1.47396 23.0052 0.984375 22.5156C0.494792 22.026 0.25 21.4375 0.25 20.75V0.75H2.75V20.75H22.75V23.25H2.75ZM4 19.5V8.25H9V19.5H4ZM10.25 19.5V2H15.25V19.5H10.25ZM16.5 19.5V13.25H21.5V19.5H16.5Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":18,"right":18,"bottom":18,"left":18},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_1811b3a6_00cf_4e4e_ad24_3d617b483da5"><svg width="20" height="20" viewBox="0 0 23 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M2.75 23.25C2.0625 23.25 1.47396 23.0052 0.984375 22.5156C0.494792 22.026 0.25 21.4375 0.25 20.75V0.75H2.75V20.75H22.75V23.25H2.75ZM4 19.5V8.25H9V19.5H4ZM10.25 19.5V2H15.25V19.5H10.25ZM16.5 19.5V13.25H21.5V19.5H16.5Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Data Analysis', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cozy-block/icon-picker {"blockClientId":"c9890fdd-78ae-41f3-84b3-1a1c17aeb0d9","view":"stacked","iconSize":20,"iconViewBox":{"vx":"0","vy":"0","vw":"19","vh":"20"},"iconPath":"M3.25 20V17.5H0.75V2.5H3.25V0H5.75V2.5H8.25V17.5H5.75V20H3.25ZM3.25 15H5.75V5H3.25V15ZM13.25 20V13.75H10.75V5H13.25V0H15.75V5H18.25V13.75H15.75V20H13.25ZM13.25 11.25H15.75V7.5H13.25V11.25Z","iconColor":"#fffffe","boxStyles":{"padding":{"top":18,"right":18,"bottom":18,"left":18},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#0d5fff","bgColorHover":"#f49805"}} -->
<div class="cozy-block-icon-picker stacked" id="cozyBlock_c9890fdd_78ae_41f3_84b3_1a1c17aeb0d9"><svg width="20" height="20" viewBox="0 0 19 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="#fffffe"><path d="M3.25 20V17.5H0.75V2.5H3.25V0H5.75V2.5H8.25V17.5H5.75V20H3.25ZM3.25 15H5.75V5H3.25V15ZM13.25 20V13.75H10.75V5H13.25V0H15.75V5H18.25V13.75H15.75V20H13.25ZM13.25 11.25H15.75V7.5H13.25V11.25Z"></path></svg></div>
<!-- /wp:cozy-block/icon-picker -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h3 class="wp-block-heading has-text-color has-link-color" style="color:#090b10;font-size:20px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Easy Module', 'cozy-addons' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->