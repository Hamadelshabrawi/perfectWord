<?php
/**
 * Title: Team section one with grid animation
 * Description: This is team section with grid, animation
 * Slug: cozy-block-patterns/team-one
 * Categories: cozy-block-patterns, teams
 */

$images = array(
	CT_ASSETS_URL . 'images/team_1_1.jpg',
	CT_ASSETS_URL . 'images/team_1_2.jpg',
	CT_ASSETS_URL . 'images/team_1_3.jpg',
);
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Team', 'cozy-addons' ); ?>"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#fffffe"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#fffffe;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"var:preset|spacing|80"}},"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#646464;margin-top:0;margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"497px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#01ae8f"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#01ae8f"}},"cozyCustomFont":"Public Sans"} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#01ae8f;font-size:14px;font-style:normal;font-weight:500;line-height:1.3;text-transform:uppercase"><?php esc_html_e( 'Professional Team', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.3","fontSize":"44px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"#090b10"}}},"color":{"text":"#090b10"}},"cozyCustomFont":"Inter","cozyAnimation":{"type":"flip-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":600}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#090b10;font-size:44px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e( 'Our Team Members', 'cozy-addons' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"497px"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Far far away, behind the word mountains, far from the countries Vocalic and Consonantal, there live the blind texts. Separated they live.', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"typography":{"fontSize":"18px","textDecoration":"none"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"cozyHoverEffect":{"boxShadow":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"boxShadowHover":{"enabled":false,"color":"#000","horizontal":0,"vertical":0,"blur":10,"spread":0,"position":""},"transformEnabled":false,"transform":{"translateX":0,"translateY":"-4","rotate":0,"scale":1}}} -->
<div class="wp-block-buttons has-custom-font-size" style="margin-top:var(--wp--preset--spacing--50);font-size:18px;text-decoration:none"><!-- wp:button {"style":{"color":{"background":"#01ae8f","text":"#fffffe"},"elements":{"link":{"color":{"text":"#fffffe"}}},"border":{"radius":"0px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"cozyHoverStyles":{"bgColor":"#f49805","color":"#fffffe","borderColor":"#f49805"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;color:#fffffe;background-color:#01ae8f;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e( 'View All Services', 'cozy-addons' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cozy-block/teams {"blockClientId":"b62fa6ba-959f-4389-a669-acb972f90c17"} -->
<div class="cozy-block-teams display-grid   hover-show" id="cozyBlock_b62fa6ba_959f_4389_a669_acb972f90c17"><div class="cozy-block-grid-wrapper "><!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":800}} -->
<div class="wp-block-group"><!-- wp:image {"id":2534,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-2534"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"John Carter","style":{"typography":{"fontSize":"20px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( 'Daniel Wilson', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Web Developer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:cozy-block/social-icon {"blockClientId":"9ced56da-c363-4788-9ba7-f8790711da6e","iconSize":14,"iconColorLayout":"custom","boxStyles":{"padding":{"top":6,"right":6,"bottom":6,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#646464","bgColorHover":""}} -->
<div class="cozy-block-social-icon stacked fill icon-color-custom" id="cozyBlock_9ced56da_c363_4788_9ba7_f8790711da6e"><!-- wp:cozy-block/social-icon-picker {"blockClientId":"71c7a563-128d-4b58-8159-9d3d32ad7c81","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#1877f2","bgDefaultColor":"#1877f2"} -->
<style>
		#cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81.stacked.icon-color-default {
		background: #1877f2;
		}
		#cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81.fill.icon-color-default svg {
		fill: #1877f2;
		}
		#cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81.outline.icon-color-default svg {
		stroke: #1877f2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_71c7a563_128d_4b58_8159_9d3d32ad7c81"><svg viewBox="0 0 14 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.5122 14.0625L13.2065 9.53809H8.86523V6.60205C8.86523 5.36426 9.47168 4.15771 11.416 4.15771H13.3896V0.305664C13.3896 0.305664 11.5986 0 9.88623 0C6.31104 0 3.97412 2.16699 3.97412 6.08984V9.53809H0V14.0625H3.97412V25H8.86523V14.0625H12.5122Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"ba9d52c0-fcaf-4923-8fea-03fc051fe974","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":24},"iconPath":"M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#000","bgDefaultColor":"#000"} -->
<style>
		#cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974.stacked.icon-color-default {
		background: #000;
		}
		#cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974.fill.icon-color-default svg {
		fill: #000;
		}
		#cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974.outline.icon-color-default svg {
		stroke: #000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_ba9d52c0_fcaf_4923_8fea_03fc051fe974"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"2eda5824-5ac7-4ba1-81f4-07c24b1cc06a","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":17},"iconPath":"M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#ff0000","bgDefaultColor":"#ff0000"} -->
<style>
		#cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a.stacked.icon-color-default {
		background: #ff0000;
		}
		#cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a.fill.icon-color-default svg {
		fill: #ff0000;
		}
		#cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a.outline.icon-color-default svg {
		stroke: #ff0000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_2eda5824_5ac7_4ba1_81f4_07c24b1cc06a"><svg viewBox="0 0 24 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"566d7b26-f08d-4a32-9ba1-71a19993d4eb","iconViewBox":{"vx":0,"vy":0,"vw":22,"vh":22},"iconPath":"M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)","bgDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)"} -->
<style>
		#cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb.stacked.icon-color-default {
		background: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb.fill.icon-color-default svg {
		fill: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb.outline.icon-color-default svg {
		stroke: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_566d7b26_f08d_4a32_9ba1_71a19993d4eb"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker --></div>
<!-- /wp:cozy-block/social-icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":800}} -->
<div class="wp-block-group"><!-- wp:image {"id":2540,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-2540"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"John Carter","style":{"typography":{"fontSize":"20px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( 'Jane Doe', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'UX Designer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:cozy-block/social-icon {"blockClientId":"1c260fc8-c000-48ee-a62a-7b6abd9eada3","iconSize":14,"iconColorLayout":"custom","boxStyles":{"padding":{"top":6,"right":6,"bottom":6,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#646464","bgColorHover":""}} -->
<div class="cozy-block-social-icon stacked fill icon-color-custom" id="cozyBlock_1c260fc8_c000_48ee_a62a_7b6abd9eada3"><!-- wp:cozy-block/social-icon-picker {"blockClientId":"2d4cd36a-104c-4cc3-8610-7836010bce63","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#1877f2","bgDefaultColor":"#1877f2"} -->
<style>
		#cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63.stacked.icon-color-default {
		background: #1877f2;
		}
		#cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63.fill.icon-color-default svg {
		fill: #1877f2;
		}
		#cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63.outline.icon-color-default svg {
		stroke: #1877f2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_2d4cd36a_104c_4cc3_8610_7836010bce63"><svg viewBox="0 0 14 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.5122 14.0625L13.2065 9.53809H8.86523V6.60205C8.86523 5.36426 9.47168 4.15771 11.416 4.15771H13.3896V0.305664C13.3896 0.305664 11.5986 0 9.88623 0C6.31104 0 3.97412 2.16699 3.97412 6.08984V9.53809H0V14.0625H3.97412V25H8.86523V14.0625H12.5122Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"3a826c93-b25c-4676-94d3-f21cb1ed9021","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":24},"iconPath":"M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#000","bgDefaultColor":"#000"} -->
<style>
		#cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021.stacked.icon-color-default {
		background: #000;
		}
		#cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021.fill.icon-color-default svg {
		fill: #000;
		}
		#cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021.outline.icon-color-default svg {
		stroke: #000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_3a826c93_b25c_4676_94d3_f21cb1ed9021"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"cf18c227-0ba9-447d-9265-5e0e1fbe76f5","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":17},"iconPath":"M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#ff0000","bgDefaultColor":"#ff0000"} -->
<style>
		#cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5.stacked.icon-color-default {
		background: #ff0000;
		}
		#cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5.fill.icon-color-default svg {
		fill: #ff0000;
		}
		#cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5.outline.icon-color-default svg {
		stroke: #ff0000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_cf18c227_0ba9_447d_9265_5e0e1fbe76f5"><svg viewBox="0 0 24 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"a108a607-1afa-4694-aeb9-02a1425b22e6","iconViewBox":{"vx":0,"vy":0,"vw":22,"vh":22},"iconPath":"M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)","bgDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)"} -->
<style>
		#cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6.stacked.icon-color-default {
		background: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6.fill.icon-color-default svg {
		fill: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6.outline.icon-color-default svg {
		stroke: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_a108a607_1afa_4694_aeb9_02a1425b22e6"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker --></div>
<!-- /wp:cozy-block/social-icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid -->

<!-- wp:cozy-block/grid -->
<div class="cozy-block-grid"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"cozyAnimation":{"type":"zoom-in-up","easingFunction":"ease-in","anchorPlacement":"top-bottom","duration":800}} -->
<div class="wp-block-group"><!-- wp:image {"id":2541,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-2541"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"placeholder":"John Carter","style":{"typography":{"fontSize":"20px"},"color":{"text":"#090b10"},"elements":{"link":{"color":{"text":"#090b10"}}}}} -->
<h4 class="wp-block-heading has-text-align-center has-text-color has-link-color" style="color:#090b10;font-size:20px"><?php esc_html_e( 'Thomas Addin', 'cozy-addons' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","style":{"color":{"text":"#646464"},"elements":{"link":{"color":{"text":"#646464"}}}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#646464"><?php esc_html_e( 'Marketer', 'cozy-addons' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:cozy-block/social-icon {"blockClientId":"df082932-bf15-4acd-a0d3-f2cb548a9911","iconSize":14,"iconColorLayout":"custom","boxStyles":{"padding":{"top":6,"right":6,"bottom":6,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderColorHover":"","borderRadius":50,"bgColor":"#646464","bgColorHover":""}} -->
<div class="cozy-block-social-icon stacked fill icon-color-custom" id="cozyBlock_df082932_bf15_4acd_a0d3_f2cb548a9911"><!-- wp:cozy-block/social-icon-picker {"blockClientId":"602abec6-2fe7-4fcb-8e72-feea56240087","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#1877f2","bgDefaultColor":"#1877f2"} -->
<style>
		#cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087.stacked.icon-color-default {
		background: #1877f2;
		}
		#cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087.fill.icon-color-default svg {
		fill: #1877f2;
		}
		#cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087.outline.icon-color-default svg {
		stroke: #1877f2;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_602abec6_2fe7_4fcb_8e72_feea56240087"><svg viewBox="0 0 14 25" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.5122 14.0625L13.2065 9.53809H8.86523V6.60205C8.86523 5.36426 9.47168 4.15771 11.416 4.15771H13.3896V0.305664C13.3896 0.305664 11.5986 0 9.88623 0C6.31104 0 3.97412 2.16699 3.97412 6.08984V9.53809H0V14.0625H3.97412V25H8.86523V14.0625H12.5122Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"582e73b2-bab0-4cc5-bf6a-ab7d7d40257a","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":24},"iconPath":"M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#000","bgDefaultColor":"#000"} -->
<style>
		#cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a.stacked.icon-color-default {
		background: #000;
		}
		#cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a.fill.icon-color-default svg {
		fill: #000;
		}
		#cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a.outline.icon-color-default svg {
		stroke: #000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_582e73b2_bab0_4cc5_bf6a_ab7d7d40257a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M13.982 10.622 20.54 3h-1.554l-5.693 6.618L8.745 3H3.5l6.876 10.007L3.5 21h1.554l6.012-6.989L15.868 21h5.245l-7.131-10.378Zm-2.128 2.474-.697-.997-5.543-7.93H8l4.474 6.4.697.996 5.815 8.318h-2.387l-4.745-6.787Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"7e98e3d7-b542-4562-b966-e3311b592371","iconViewBox":{"vx":0,"vy":0,"vw":24,"vh":17},"iconPath":"M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"#ff0000","bgDefaultColor":"#ff0000"} -->
<style>
		#cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371.stacked.icon-color-default {
		background: #ff0000;
		}
		#cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371.fill.icon-color-default svg {
		fill: #ff0000;
		}
		#cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371.outline.icon-color-default svg {
		stroke: #ff0000;
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_7e98e3d7_b542_4562_b966_e3311b592371"><svg viewBox="0 0 24 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M23.2084 2.60777C22.9358 1.58129 22.1326 0.772873 21.1128 0.498524C19.2642 0 11.8519 0 11.8519 0C11.8519 0 4.43954 0 2.59097 0.498524C1.57114 0.772917 0.767925 1.58129 0.495312 2.60777C0 4.46832 0 8.35017 0 8.35017C0 8.35017 0 12.232 0.495312 14.0926C0.767925 15.1191 1.57114 15.8938 2.59097 16.1681C4.43954 16.6667 11.8519 16.6667 11.8519 16.6667C11.8519 16.6667 19.2642 16.6667 21.1128 16.1681C22.1326 15.8938 22.9358 15.1191 23.2084 14.0926C23.7037 12.232 23.7037 8.35017 23.7037 8.35017C23.7037 8.35017 23.7037 4.46832 23.2084 2.60777ZM9.4276 11.8746V4.82574L15.6229 8.35026L9.4276 11.8746Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker -->

<!-- wp:cozy-block/social-icon-picker {"blockClientId":"cc86b911-f8e3-4a8d-8dc3-10ecbbd80b75","iconViewBox":{"vx":0,"vy":0,"vw":22,"vh":22},"iconPath":"M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z","parentAttrs":{"view":"stacked","layout":"fill","iconColorLayout":"custom"},"iconDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)","bgDefaultColor":"linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%)"} -->
<style>
		#cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75.stacked.icon-color-default {
		background: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75.stacked.fill.icon-color-default svg {
		fill: #fff;
		}
		#cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75.stacked.outline.icon-color-default svg {
		stroke: #fff;
		fill: none;
		}
		#cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75.fill.icon-color-default svg {
		fill: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		}
		#cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75.outline.icon-color-default svg {
		stroke: linear-gradient(180deg, #DA5353 -38.62%, #595FF4 61.38%);
		fill: none;
		}
	</style><a href="#" target="" rel="noopener"><div class="cozy-block-social-icon-picker stacked fill icon-color-custom" id="cozyBlock_cc86b911_f8e3_4a8d_8dc3_10ecbbd80b75"><svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M10.946 5.33081C7.84058 5.33081 5.33569 7.83569 5.33569 10.9412C5.33569 14.0466 7.84058 16.5515 10.946 16.5515C14.0515 16.5515 16.5564 14.0466 16.5564 10.9412C16.5564 7.83569 14.0515 5.33081 10.946 5.33081ZM10.946 14.5886C8.93921 14.5886 7.29858 12.9529 7.29858 10.9412C7.29858 8.92944 8.93433 7.2937 10.946 7.2937C12.9578 7.2937 14.5935 8.92944 14.5935 10.9412C14.5935 12.9529 12.9529 14.5886 10.946 14.5886ZM18.0945 5.10132C18.0945 5.82886 17.5085 6.40991 16.7859 6.40991C16.0584 6.40991 15.4773 5.82397 15.4773 5.10132C15.4773 4.37866 16.0632 3.79272 16.7859 3.79272C17.5085 3.79272 18.0945 4.37866 18.0945 5.10132ZM21.8103 6.42944C21.7273 4.67651 21.3269 3.12378 20.0427 1.84448C18.7634 0.565185 17.2107 0.164795 15.4578 0.0769043C13.6511 -0.0256348 8.23608 -0.0256348 6.42944 0.0769043C4.6814 0.159912 3.12866 0.560303 1.84448 1.8396C0.560303 3.1189 0.164795 4.67163 0.0769043 6.42456C-0.0256348 8.2312 -0.0256348 13.6462 0.0769043 15.4529C0.159912 17.2058 0.560303 18.7585 1.84448 20.0378C3.12866 21.3171 4.67651 21.7175 6.42944 21.8054C8.23608 21.908 13.6511 21.908 15.4578 21.8054C17.2107 21.7224 18.7634 21.322 20.0427 20.0378C21.322 18.7585 21.7224 17.2058 21.8103 15.4529C21.9128 13.6462 21.9128 8.23608 21.8103 6.42944ZM19.4763 17.3914C19.0955 18.3484 18.3582 19.0857 17.3962 19.4714C15.9558 20.0427 12.5378 19.9109 10.946 19.9109C9.35425 19.9109 5.9314 20.0378 4.49585 19.4714C3.53882 19.0906 2.80151 18.3533 2.41577 17.3914C1.84448 15.9509 1.97632 12.533 1.97632 10.9412C1.97632 9.34937 1.84937 5.92651 2.41577 4.49097C2.79663 3.53394 3.53394 2.79663 4.49585 2.41089C5.93628 1.8396 9.35425 1.97144 10.946 1.97144C12.5378 1.97144 15.9607 1.84448 17.3962 2.41089C18.3533 2.79175 19.0906 3.52905 19.4763 4.49097C20.0476 5.9314 19.9158 9.34937 19.9158 10.9412C19.9158 12.533 20.0476 15.9558 19.4763 17.3914Z"></path></svg></div></a>
<!-- /wp:cozy-block/social-icon-picker --></div>
<!-- /wp:cozy-block/social-icon --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:cozy-block/grid --></div></div>
<!-- /wp:cozy-block/teams --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->