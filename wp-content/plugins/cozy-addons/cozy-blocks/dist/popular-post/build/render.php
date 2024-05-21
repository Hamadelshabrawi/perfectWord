<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyPopularPosts_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPopularPostsInit( "' . $client_id . '" ) }) ' );

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id.layout-ticker .swiper-container {
    height: {$attributes['carouselOptions']['height']}px;
}

#$block_id.layout-ticker .swiper-button-prev::after,
#$block_id.layout-ticker .swiper-button-next::after {
    font-size: {$attributes['carouselOptions']['navigation']['iconSize']}px;
}
#$block_id.layout-ticker .swiper-button-prev,
#$block_id.layout-ticker .swiper-button-next {
    width: {$attributes['carouselOptions']['navigation']['iconBoxWidth']}px;
    height: {$attributes['carouselOptions']['navigation']['iconBoxHeight']}px;
    border-radius: {$attributes['carouselOptions']['navigation']['borderRadius']}px;
    color: {$attributes['carouselOptions']['navigation']['color']};
    background-color: {$attributes['carouselOptions']['navigation']['backgroundColor']};
    margin-top: {$attributes['carouselOptions']['navigation']['verticalGap']}px;
}
#$block_id.layout-ticker .swiper-button-prev:hover,
#$block_id.layout-ticker .swiper-button-next:hover {
    color: {$attributes['carouselOptions']['navigation']['colorHover']};
    background-color: {$attributes['carouselOptions']['navigation']['backgroundColorHover']};
}
#$block_id.layout-ticker .swiper-button-prev {
    right: var(--swiper-navigation-sides-offset, {$attributes['carouselOptions']['navigation']['horizontalGap']}px);
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
